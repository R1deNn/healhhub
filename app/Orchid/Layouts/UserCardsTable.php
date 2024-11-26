<?php

namespace App\Orchid\Layouts;

use App\Models\UserCards;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\TD;
use Orchid\Screen\Layouts\Table;

class UserCardsTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'user_cards';

    /**
     * @return TD[]
     */
    protected function columns() : array
    {
        return [
            TD::make('title', __('Название'))
                ->sort(),
            TD::make('description', __('Описание'))
                ->sort(),
            TD::make('attachment', __('Файл'))
                ->render(function (UserCards $usercard) {
                    return Link::make('Скачать')
                           ->route('/', $usercard->attachment)->style('color: blue;');
                }),
            TD::make('created_at', __('Дата'))
                ->sort(),
            TD::make('id_doctor', __('Врач'))
                ->sort()
                ->cantHide()
                ->render(function (UserCards $usercard) {
                    return Link::make($usercard->doctor->surname . ' ' . $usercard->doctor->name)
                        ->route('/', $usercard->doctor->id)->style('color: blue;');
                }),
        ];
    }
}
