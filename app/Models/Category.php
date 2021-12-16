<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'ar_name',
        'name',
    ];

    protected $with = ['food'];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    
}
