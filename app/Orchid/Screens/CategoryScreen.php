<?php

namespace App\Orchid\Screens;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Speciality;
use App\Orchid\Layouts\ResearchsListLayout;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoryScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'category' => Category::query()
                ->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return 'Список обследований';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Здесь вы можете удалить и редактировать обследования';
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
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('bs.plus-circle')
                ->route('platform.category.create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return string[]|\Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [
            ResearchsListLayout::class,

            Layout::modal('asyncEditUserModal', ResearchsListLayout::class)
                ->async('asyncGetUser'),
        ];
    }

    /**
     * @return array
     */
    public function asyncGetUser(Category $category): iterable
    {
        return [
            'category' => $category,
        ];
    }

    public function activate(Request $request): void
    {
        $category = Category::findOrFail($request->get('id'));
        $category->active = true;
        $category->save();
    
        Toast::success(__('Обследование теперь видно пользователям'));
    }

    public function disable(Request $request): void
    {
        $category = Category::findOrFail($request->get('id'));
        $category->active = false;
        $category->save();
    
        Toast::warning(__('Обследование теперь не видно пользователям'));
    }
}
