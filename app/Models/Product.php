<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'review',
        'specification',
        'category_id'
    ];

    public function images(){
        return $this->hasMany('App\Models\ProductImage');
    }

    public function getImage()
    {
        $img = $this->images()->pluck('img')->first();
        if (!$img) {
            return '/assets/images/no_image.png';
        }
        return '/assets/images/'.$img;
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public static function getProducts($search_keyword) {
        $products = Product::orderBy('id', 'desc');

        if($search_keyword && !empty($search_keyword)) {
            $products->where('title', 'like', "%{$search_keyword}%");
        }

        return $products->paginate(12);
    }
}
