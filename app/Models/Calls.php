<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Calls extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = [
        'title',
        'description',
        'price',
    ];

    protected $hidden = [
        'permissions',
    ];
}
