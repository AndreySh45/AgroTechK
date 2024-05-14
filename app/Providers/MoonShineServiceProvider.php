<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\CategoryResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),
            MenuGroup::make('Агротехника', [
                MenuItem::make( 'Категории', new CategoryResource())->icon('heroicons.circle-stack'),
                MenuItem::make( 'Техника', new ProductResource())
            ])
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }

    public function boot(): void
    {
        parent::boot();

        moonshineColors()
            ->background('#383838')
            ->content('#173cd0')
            ->tableRow('#173cd0')
            ->dividers('#50c878')
            ->borders('#173cd0')
            ->buttons('#ffc107')
            ->primary('#e83119')
            ->secondary('#6c788c');
    }


}
