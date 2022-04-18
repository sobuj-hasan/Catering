<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'country',
        'city',
        'address',
        'service_date',
        'service_name',
        'message',
    ];
}
