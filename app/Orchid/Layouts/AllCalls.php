<?php

namespace App\Orchid\Layouts;

use App\Models\Appointment;
use App\Models\Calls;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Layouts\Table;

class AllCalls extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'calls';

    /**
     * @return TD[]
     */
    protected function columns() : array
    {
        return [
            TD::make('id', __('ID'))
                ->sort(),

            TD::make('name', __('Имя'))
                ->sort(),

            TD::make('phone', __('Телефон'))
                ->sort(),

            TD::make('description', __('Описание'))
                ->sort(),

            TD::make('status', __('Статус'))
            ->align(TD::ALIGN_RIGHT)
            ->render(function ($value) {
                $color = null;
                $result = null;
                if ($value->status === 0) {
                    $color = 'gray';
                    $result = 'В ожидании';
                } elseif ($value->status === 1) {
                    $color = 'yellow';
                    $result = 'Не дозвонились';
                } elseif ($value->status === 2) {
                    $color = 'green';
                    $result = 'Завершено';
                }
                return "<div style='display: flex; align-items: right;'><div style='width: 10px; height: 10px; border-radius: 50%; background-color: $color;' title='$result'></div></div>";
            })
            ->sort(),

            TD::make('created_at', __('Дата'))
            ->align(TD::ALIGN_RIGHT)
            ->sort(),     
            

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Calls $appointment) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
    
                        Link::make(__('Дозвонились'))
                            ->route('call.done', $appointment->id)
                            ->icon('bs.check-lg'),

                        Link::make(__('Не дозвонились'))
                            ->route('call.notdone', $appointment->id)
                            ->icon('bs.x'),
                    ])),
        ];
    }
}
