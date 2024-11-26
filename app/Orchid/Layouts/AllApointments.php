<?php

namespace App\Orchid\Layouts;

use App\Models\Appointment;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Layouts\Table;

class AllApointments extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'appointments';

    /**
     * @return TD[]
     */
    protected function columns() : array
    {
        return [
            TD::make('id', __('ID'))
                ->sort(),

            TD::make('id_user', __('Пациент'))
                ->sort()
                ->cantHide()
                ->render(function (Appointment $appointment) {
                    return Link::make($appointment->user->name . ' ' . $appointment->user->surname)
                        ->route('platform.usercard', $appointment->user->id)->style('color: blue;');
            }),

            TD::make('id_doctor', __('Врач'))
            ->sort()
            ->cantHide()
            ->render(function (Appointment $appointment) {
                return Link::make($appointment->doctor->name . ' ' . $appointment->doctor->surname)
                    ->route('/', $appointment->doctor->id)->style('color: blue;');
            }),

            TD::make('result', __('Статус'))
            ->align(TD::ALIGN_RIGHT)
            ->render(function ($value) {
                $color = null;
                $result = null;
                if ($value->result === 0) {
                    $color = 'gray';
                    $result = 'В ожидании';
                } elseif ($value->result === 1) {
                    $color = 'yellow';
                    $result = 'На приеме';
                } elseif ($value->result === 2) {
                    $color = 'green';
                    $result = 'Завершено';
                } elseif ($value->result === 3) {
                    $color = 'red';
                    $result = 'Пациент не явился';
                }
                return "<div style='display: flex; align-items: right;'><div style='width: 10px; height: 10px; border-radius: 50%; background-color: $color;' title='$result'></div></div>";
            })
            ->sort(),

            TD::make('date', __('Дата записи'))
            ->align(TD::ALIGN_RIGHT)
            ->sort(),     

            TD::make('time', __('Время записи'))
            ->align(TD::ALIGN_RIGHT)
            ->sort(),   
                
            TD::make(__('Actions'))
            ->align(TD::ALIGN_CENTER)
            ->width('100px')
            ->render(fn (Appointment $appointment) => DropDown::make()
                ->icon('bs.three-dots-vertical')
                ->list([

                    Link::make(__('Edit'))
                        ->route('platform.appointment.edit', $appointment->id)
                        ->icon('bs.pencil'),
                ])),
        ];
    }
}
