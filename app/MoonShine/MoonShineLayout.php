<?php

declare(strict_types=1);

namespace App\MoonShine;

use MoonShine\Components\Layout\{Content,
    Flash,
    Footer,
    Header,
    LayoutBlock,
    LayoutBuilder,
    Menu,
    Profile,
    Search,
    Sidebar, TopBar};
use MoonShine\Components\When;
use MoonShine\Contracts\MoonShineLayoutContract;

final class MoonShineLayout implements MoonShineLayoutContract
{
    public static function build(): LayoutBuilder
    {
        return LayoutBuilder::make([
            TopBar::make([
                Menu::make()->top(),
            ])
                ->actions([
                    When::make(
                        static fn() => config('moonshine.auth.enable', true),
                        static fn() => [Profile::make()]
                    )
                ]),
            LayoutBlock::make([
                Flash::make(),
                Header::make([
                    Search::make(),
                ]),
                Content::make(),
                Footer::make()
                    ->copyright(fn(): string => sprintf(
                        <<<'HTML'
                            &copy; %d Разработано с ❤️
                            <a href="https://vk.link/ciaiti"
                                class="font-semibold text-primary hover:text-secondary"
                                target="_blank"
                            >
                                CIT
                            </a>
                        HTML,
                        now()->year
                    ))
            ])->customAttributes(['class' => 'layout-page']),
        ]);
    }
}
