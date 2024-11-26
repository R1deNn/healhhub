<?php

namespace App\Orchid\Layouts;

use App\Models\Speciality;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Field;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SpecialityRows extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'speciality';

    /**
     * @return TD[]
     */
    protected function columns() : array
    {
        return [
            TD::make('id', __('ID'))
                ->sort(),

            TD::make('title', __('Название'))
                ->sort(),

            TD::make('created_at', __('Создано'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->sort(),
                
            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(fn (Speciality $speciality) => DropDown::make()
                ->icon('bs.three-dots-vertical')
                ->list([

                    Link::make(__('Edit'))
                        ->route('platform.speciality.edit', $speciality->id)
                        ->icon('bs.pencil'),
                ])),
        ];
    }
}
