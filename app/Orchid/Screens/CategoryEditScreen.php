<?php

namespace App\Orchid\Screens;

use App\Models\Category;
use App\Models\User;
use App\Orchid\Layouts\ResearchsEditLayout;
use App\Orchid\Layouts\Role\PermissionsCategoryLayout;
use App\Orchid\Layouts\Role\RolePermissionLayout;
use Illuminate\Http\Request;
use Orchid\Access\Impersonation;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoryEditScreen extends Screen
{
    /**
     * @var Category
     */
    public $category;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Category $category, User $user): iterable
    {
        return [
            'category'       => $category,

            'permission' => $user->getStatusPermission(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->category->exists ? 'Редактирование обследования' : 'Создание обследования';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Общие сведения, такие как название и цена.';
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
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('remove')
                ->canSee($this->category->exists),

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

            Layout::block(ResearchsEditLayout::class)
                ->title(__('Информация об обследовании'))
                ->description(__('Если это необходимо, обновите информацию об обследовании'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->category->exists)
                        ->method('save')
                ),

                Layout::block(PermissionsCategoryLayout::class)
                ->title(__('Кто может выполнять обследование'))
                ->description(__('Выберите, кто может выполнять данное обследование'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->category->exists)
                        ->method('save')
                ),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Category $category, Request $request)
    {
        $request->validate([
            'category.title' => [
                'required',
            ],

            'category.description' => [
                'required',
            ],

            'category.price' => [
                'required',
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(fn ($value, $key) => [base64_decode($key) => $value])
            ->collapse()
            ->toArray();

        $category
            ->fill($request->collect('category')->except(['category.title', 'category.description', 'category.price', 'category.permissions'])->toArray())
            ->forceFill(['permissions' => $permissions])
            ->save();

        Toast::success(__('Данные изменены'));
        return redirect()->route('platform.category');
    }

    /**
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Category $user)
    {
        $user->delete();

        Toast::info(__('User was removed'));

        return redirect()->route('platform.systems.users');
    }
}
