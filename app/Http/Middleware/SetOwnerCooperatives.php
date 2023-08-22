<?php

namespace App\Http\Middleware;

use App\Models\Cooperative;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SetOwnerCooperatives
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $loggedInOwnerId = Auth::id();
        $ownerCooperatives = Cooperative::whereHas('owners', function ($query) use ($loggedInOwnerId) {
            $query->where('owner_id', $loggedInOwnerId);
        })->where('status', 'approved')
            ->get();

        Session::put('ownerCooperatives', $ownerCooperatives);

        return $next($request);
    }
}
