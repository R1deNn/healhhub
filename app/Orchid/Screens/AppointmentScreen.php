<?php

namespace App\Orchid\Screens;

use App\Models\Appointment;
use App\Models\User;
use App\Orchid\Layouts\AllApointments;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class AppointmentScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'appointments' => Appointment::query()
                ->paginate(),
            'users' => User::query()
                ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Все записи';
    }

    public function description(): ?string
    {
        return 'Здесь вы можете управлять всеми записями';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('bs.plus-circle')
                ->route('platform.category.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            AllApointments::class,

            Layout::modal('asyncEditUserModal', AllApointments::class)
                ->async('asyncGetUser'),
        ];
    }
}
