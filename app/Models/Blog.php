<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'description',
        'image',
        'status',
    ];

    protected $with = ['blogcategory', 'user'];

    public function blogcategory()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
