<?php

namespace App\Orchid\Screens;

use App\Models\MedCard;
use App\Models\User;
use App\Models\UserCards;
use App\Orchid\Layouts\UserCardsTable;
use Orchid\Screen\Action;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Facades\Layout;

class UserCard extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */

     public $user;
     public $userCards;

    public function query(UserCards $userCards, User $user): iterable
    {
        return [
            'user' => $user,
            'user_cards' => UserCards::where('id_user', $user->id)->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Медицинская карта пациента';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return "Пациент: " . $this->user->surname . " " . $this->user->name;
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @throws \Throwable
     *
     * @return array
     */
    public function layout(): iterable
    {
        return [
            UserCardsTable::class,
        ];
    }
}
