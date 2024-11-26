<?php

namespace Tests\Feature\Auth;

use App\Models\Appointment;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{

    public function test_user_can_be_create_appointment(): void
    {
        $appointment = Appointment::factory()->create();

        $this->assertGuest();
    }
}
