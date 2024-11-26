<?php

namespace App\Orchid\Screens;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\User;
use App\Orchid\Layouts\AppointmentEditLayout;
use Illuminate\Http\Request;
use Orchid\Access\Impersonation;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class AppointmentEditScreen extends Screen
{
    /**
     * @var Appointment
     */
    public $appointment;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Appointment $appointment, User $user): iterable
    {
        return [
            'appointment'       => $appointment,
            'user' => $user,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->appointment->exists ? 'Редактирование обследования' : 'Создание обследования';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return "Обследование (ID: " . $this->appointment->id . ") пациента " . $this->appointment->user->surname . ' ' . $this->appointment->user->name;
    }

    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Remove'))
                ->icon('bs.trash3')
                ->confirm(__('Как только вы совершите удаление, запись не может быть восстановлена. Вы уверены?'))
                ->method('remove')
                ->canSee($this->appointment->exists),

            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [

            Layout::block(AppointmentEditLayout::class)
                ->title(__('Информация о записи'))
                ->description(__('Если это необходимо, обновите информацию о записи'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->appointment->exists)
                        ->method('save')
                ),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Appointment $appointment, Request $request)
    {
        $request->validate([
            'appointment.date' => [
                'required',
            ],

            'appointment.time' => [
                'required',
            ],
        ]);

        $appointment
            ->fill($request->collect('appointment')->except(['appointment.id_user', 'appointment.date', 'appointment.time'])->toArray())
            ->save();

        Toast::success(__('Данные изменены'));
        return redirect()->route('platform.appointments');
    }

    /**
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
}
