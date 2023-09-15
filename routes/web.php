<?php

    use App\Http\Controllers\AccountController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\StaffAuthController;
    use App\Http\Controllers\AuditorAuthController;
    use App\Http\Controllers\AuditorController;
    use App\Http\Controllers\CooperativeController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\DefaultCooperativeController;
    use App\Http\Controllers\FinanceCategoryController;
    use App\Http\Controllers\OwnerAuthController;
    use App\Http\Controllers\TransactionController;

    Route::get('/', function () {
        return view('welcome');
    })->name('homepage');

    Route::prefix('staff')->group(function () {
        Route::get('/login', [StaffAuthController::class, 'showLoginForm'])->name('staff.login');
        Route::post('/login', [StaffAuthController::class, 'login']);
        Route::get('/logout', [StaffAuthController::class, 'logout'])->name('staff.logout');
    });

    // Auditor routes
    Route::prefix('auditor')->group(function () {
        Route::get('/login', [AuditorAuthController::class, 'showLoginForm'])->name('auditor.login');
        Route::post('/login', [AuditorAuthController::class, 'login']);
        Route::get('/logout', [AuditorAuthController::class, 'logout'])->name('auditor.logout');
    });

    // Owner routes
    Route::prefix('owner')->group(function () {
        Route::get('/login', [OwnerAuthController::class, 'showLoginForm'])->name('owner.login');
        Route::post('/login', [OwnerAuthController::class, 'login']);
        Route::get('/register', [OwnerAuthController::class, 'showRegistrationForm'])->name('owner.register');
        Route::post('/register', [OwnerAuthController::class, 'register']);
        Route::get('/logout', [OwnerAuthController::class, 'logout'])->name('owner.logout');
    });

    // Staff dashboard
    Route::middleware('auth:staff')->prefix('staff')->group(function () {
        Route::get('/dashboard', [CooperativeController::class, 'cooperativeStaff']);
        Route::get('/{cooperative}/approve', [CooperativeController::class, 'approveCooperative'])->name('staff.cooperative.approve');
        Route::get('/auditors', [AuditorController::class, 'index']);
        Route::post('/auditors/register', [AuditorController::class, 'register'])->name('staff.auditors.register');
    });

    // Auditor dashboard
    Route::middleware('auth:auditor')->prefix('auditor')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'auditor'])->name('auditor.dashboard');
        Route::get('/transactions', [TransactionController::class, 'auditorTrans'])->name('auditor.transactions.index');
        Route::get('/transactions/reports', [TransactionController::class, 'generateAuditorTransReports'])->name('auditor.transactions.reports');
        Route::get('/audits', [DashboardController::class, 'auditorReviews'])->name('auditor.financial.audits');
        Route::get('/add/comment', [AuditorController::class, 'addComment'])->name('auditor.comment');
    });

    // Owner dashboard
    Route::middleware('auth:owner')->prefix('owner')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'owner'])->name('owner.dashboard');
        Route::get('/cooperatives', [CooperativeController::class, 'index'])->name('cooperatives.index');
        Route::post('/cooperatives', [CooperativeController::class, 'store'])->name('cooperatives.store');
        Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
        Route::post('/accounts', [AccountController::class, 'store'])->name('accounts.store');
        Route::get('/categories', [FinanceCategoryController::class, 'index'])->name('categories.index');
        Route::post('/categories', [FinanceCategoryController::class, 'store'])->name('categories.store');
        Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
        Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
        Route::get('/transactions/reports', [TransactionController::class, 'generateReports'])->name('transactions.reports');
        Route::post('/default-cooperative/set', [DefaultCooperativeController::class, 'set']);
        Route::get('/default-cooperative/get', [DefaultCooperativeController::class, 'get']);
        Route::get('/audits', [DashboardController::class, 'ownerReviews'])->name('owner.audits');
    });
