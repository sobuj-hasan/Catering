<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'user_id',
        'name',
        'price',
        'time',
        'image',
    ];

    protected $with = ['user', 'restaurant', 'packageitem'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function packageitem()
    {
        return $this->hasMany(PackageItems::class, 'package_id');
    }

}
