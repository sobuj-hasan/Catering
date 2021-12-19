<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_id',
        'category_id',
        'user_id',
        'title',
        'slug',
        'short_description',
        'price',
        'discount',
        'image',
    ];

    protected $with = ['category', 'user', 'restaurant'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

}
