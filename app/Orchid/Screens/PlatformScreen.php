<?php

declare(strict_types=1);

namespace App\Orchid\Screens;

use App\Models\Appointment;
use App\Models\User;
use App\Orchid\Layouts\Appointments;
use App\Orchid\Layouts\CalculateMoney;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\Users;
use App\Orchid\Layouts\UserWhoConfirmEmail;
use Carbon\Carbon;
use Orchid\Platform\Models\Role;

class PlatformScreen extends Screen
{

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Панель администратора';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return "Добро пожаловать, " . auth()->user()->name;
    }

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): array
    {
        $start = Carbon::now()->subDay(365);
        $end = Carbon::now()->subDay(0);
        return [
            'members' => [
                User::countByDays($start, $end)->toChart('Пользователей'),
            ],

            'appointments' => [
                Appointment::countByDays($start, $end)->toChart('Записей'),
            ],
        ];
    }
    
    public function layout(): array
    {
        return [
            Users::class,
            Appointments::class,
        ];
    }
    
}
