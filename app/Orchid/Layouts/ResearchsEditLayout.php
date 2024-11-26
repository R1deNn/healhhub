<?php

namespace App\Orchid\Layouts;

use Orchid\Platform\Models\Role;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class ResearchsEditLayout extends Rows
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
            Input::make('category.title')
            ->type('text')
            ->max(255)
            ->required()
            ->title(__('Название'))
            ->placeholder(__('Название')),

            Input::make('category.description')
            ->type('text')
            ->required()
            ->title(__('Описание'))
            ->placeholder(__('Описание')),

            Input::make('category.price')
            ->type('text')
            ->required()
            ->title(__('Стоимость'))
            ->placeholder(__('Стоимость')),
        ];
    }
}
