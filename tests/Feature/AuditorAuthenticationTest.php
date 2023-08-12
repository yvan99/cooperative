<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Auditor;

class AuditorAuthenticationTest extends TestCase
{
    public function test_auditor_can_login()
    {
        $auditor = Auditor::factory()->create(['password' => bcrypt('password')]);

        // Auditor login
        $response = $this->post('/auditor/login', [
            'email' => $auditor->email,
            'password' => 'password',
        ]);

        $response->assertRedirect('/auditor/dashboard');
        $this->assertAuthenticated('auditor');

        // Auditor logout
        $response = $this->post('/auditor/logout');
        $response->assertRedirect('/auditor/login');
        $this->assertGuest('auditor');
    }
}
