<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Role;

use Illuminate\Support\Collection;
use Orchid\Platform\Models\Category;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Layouts\Rows;
use Throwable;

class PermissionsCategoryLayout extends Rows
{
    /**
     * @var Category|null
     */
    private $category;

    /**
     * The screen's layout elements.
     *
     * @throws Throwable
     *
     * @return Field[]
     */
    public function fields(): array
    {
        $this->category = $this->query->get('category');

        return $this->generatedPermissionFields(
            $this->query->getContent('permission')
        );
    }

    private function generatedPermissionFields(Collection $permissionsRaw): array
    {
        return $permissionsRaw
            ->map(fn (Collection $permissions, $title) => $this->makeCheckBoxGroup($permissions, $title))
            ->flatten()
            ->toArray();
    }

    private function makeCheckBoxGroup(Collection $permissions, string $title): Collection
    {
        return $permissions
            ->map(fn (array $chunks) => $this->makeCheckBox(collect($chunks)))
            ->flatten()
            ->map(fn (CheckBox $checkbox, $key) => $key === 0
                ? $checkbox->title($title)
                : $checkbox)
            ->chunk(4)
            ->map(fn (Collection $checkboxes) => Group::make($checkboxes->toArray())
                ->alignEnd()
                ->autoWidth());
    }

    private function makeCheckBox(Collection $chunks): CheckBox
    {
        return CheckBox::make('permissions.'.base64_encode($chunks->get('slug')))
            ->placeholder($chunks->get('description'))
            ->value($chunks->get('active'))
            ->sendTrueOrFalse();
    }
}
