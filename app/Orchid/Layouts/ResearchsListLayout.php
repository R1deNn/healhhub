<?php

namespace App\Orchid\Layouts;

use App\Models\Category;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Components\Cells\DateTimeSplit;
use Orchid\Screen\Layouts\Table;

class ResearchsListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'category';

    /**
     * @return TD[]
     */
    protected function columns() : array
    {
        return [
            TD::make('id', __('ID'))
                ->sort(),

            TD::make('title', __('Название'))
                ->sort()
                ->cantHide(),

            TD::make('Цена')
                ->sort()
                ->render(function ($category) {
                return $category->price . ' ' . 'руб.';
            }),

            TD::make('active', __('Статус'))
            ->align(TD::ALIGN_RIGHT)
            ->render(function ($value) {
                $color = null;
                $result = null;
                if ($value->active === 0) {
                    $color = 'gray';
                    $result = 'Неактивен';
                } elseif ($value->active === 1) {
                    $color = 'green';
                    $result = 'Активен';
                }
                return "<div style='display: flex; align-items: right;'><div style='width: 10px; height: 10px; border-radius: 50%; background-color: $color;' title='$result'></div></div>";
            })
            ->sort(),

            TD::make('created_at', __('Создано'))
            ->usingComponent(DateTimeSplit::class)
            ->align(TD::ALIGN_RIGHT)
            ->defaultHidden()
            ->sort(),

            TD::make('updated_at', __('Последнее редактирование'))
                ->usingComponent(DateTimeSplit::class)
                ->align(TD::ALIGN_RIGHT)
                ->sort(),   
                
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Category $category) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Link::make(__('Edit'))
                            ->route('platform.category.edit', $category->id)
                            ->icon('bs.pencil'),
                        $category->active 
                            ? Button::make(__('Сделать неактивным'))
                                ->icon('bs.trash3')
                                ->confirm(__('Как только вы совершите это действие, пользователи не смогут записаться на это обследование.'))
                                ->method('disable', [
                                    'id' => $category->id,
                                ])
                            : Button::make(__('Активировать'))
                                ->icon('bs.check')
                                ->method('activate', [
                                    'id' => $category->id,
                                ]),
                    ])
                ),
        ];
    }
}