<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
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
            return 'resources/images/no_image.png';
        }
        return 'resources/images/'.$img;
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeLike ($query, $s){
        return $query->where('title', 'LIKE', "%{$s}%");
    }

}
