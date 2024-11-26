<?php

namespace App\Orchid\Layouts;

use App\Models\Appointment;
use App\Models\User;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class AppointmentEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        $id = Input::make('appointment.id_user');
        return [
            Input::make('appointment.time')
            ->type('time')
            ->required()
            ->title(__('Время'))
            ->placeholder(__('Время')),

            Input::make('appointment.date')
            ->type('date')
            ->required()
            ->title(__('Дата'))
            ->placeholder(__('Дата'))
        ];
    }
}
