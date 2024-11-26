<?php

namespace App\Orchid\Screens;

use App\Models\Speciality;
use App\Orchid\Layouts\SpecialityEditRows;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Orchid\Access\Impersonation;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SpecialityEditScreen extends Screen
{
    /**
     * @var Speciality
     */
    public $speciality;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Speciality $speciality): iterable
    {
        return [
            'speciality'       => $speciality,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->speciality->exists ? 'Редактирование специальности' : 'Создание специальности';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->speciality->exists ? 'Обследование (ID: ' . $this->speciality->id . ') ' . $this->speciality->title : 'Создание специальности';
    }

    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Remove'))
                ->icon('bs.trash3')
                ->confirm(__('Как только вы совершите удаление, запись не может быть восстановлена. Вы уверены?'))
                ->method('remove')
                ->canSee($this->speciality->exists),

            Button::make(__('Save'))
                ->icon('bs.check-circle')
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [

            Layout::block(SpecialityEditRows::class)
                ->title(__('Информация о записи'))
                ->description(__('Если это необходимо, обновите информацию об обследовании'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->speciality->exists)
                        ->method('save')
                ),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Speciality $speciality, Request $request, Dashboard $dashboard)
    {
        $request->validate([
            'speciality.title' => [
                'required',
            ],
        ]);

        $speciality
            ->fill($request->collect('speciality')->except(['speciality.title'])->toArray())
            ->save();

        Toast::success(__('Данные изменены'));
        return redirect()->route('platform.speciality');
    }

    /**
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
}
