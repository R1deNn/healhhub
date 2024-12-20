<?php

namespace App\Orchid\Layouts;

use App\Models\Appointment;
use App\Models\User;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class CabUserEditLayout extends Rows
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
        return [
            Input::make('user.cab')
            ->type('input')
            ->title(__('№ кабинета'))
            ->placeholder(__('15')),
        ];
    }
}
