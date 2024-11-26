<?php

namespace App\Orchid\Screens;

use App\Models\Calls;
use App\Orchid\Layouts\AllCalls;
use Orchid\Screen\Screen;

class CallsScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'calls' => Calls::query()
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
        return 'Список звонков';
    }

    public function description(): ?string
    {
        return 'Здесь вы можете увидеть заявки клиентов';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            AllCalls::class,
        ];
    }
}
