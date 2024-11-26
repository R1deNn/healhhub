<?php

namespace App\Providers;

use App\Models\Speciality;
use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Dashboard $dashboard): void
    {
        $specialities = Speciality::all();

        foreach ($specialities as $speciality) {
            $permission = ItemPermission::group('Специальности')
                ->addPermission($speciality->title, 'Дает доступ к обследованиям, которым необходима специальность ' . $speciality->title);
    
            $dashboard->registerPermissions($permission);
        }
    }
}
