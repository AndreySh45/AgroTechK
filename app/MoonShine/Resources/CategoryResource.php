<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Category;
use MoonShine\Fields\ID;

use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Enums\PageType;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Enums\ClickAction;

/**
 * @extends ModelResource<Categoryt>
 */
class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Категории';

    protected string $column = 'title';

    protected bool $createInModal = true; //Добавление в модальном окне

    protected bool $editInModal = true; //Редактирование в модальном окне

    protected ?PageType $redirectAfterSave = PageType::INDEX;

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),

                Text::make('Название','title')->updateOnPreview()->required(),
                Slug::make('Слаг','slug')->from('title')->separator('-')
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'min:5'],
        ];
    }
}
