<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Product;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\TinyMce;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use App\MoonShine\Resources\CategoryResource;
use MoonShine\Fields\Relationships\BelongsTo;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Продукция';
    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название','title')->updateOnPreview()->required(),
                BelongsTo::make('Категория', 'category', resource: new CategoryResource())
                    ->sortable()
                    ->badge(fn($status, Field $field) => 'info'),
                TinyMce::make('Описание', 'description')->required(),
                Text::make('Тех.характеристика', 'specification')->required()->hideOnIndex()
            ]),
        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'min:5'],
        ];
    }
}
