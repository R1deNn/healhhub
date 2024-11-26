<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Filters\Types\WhereDateStartEnd;

class Category extends Model
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

    protected $casts = [
        'permissions'          => 'array',
    ];

    protected $allowedFilters = [
        'id'         => Where::class,
        'title'       => Like::class,
        'updated_at' => WhereDateStartEnd::class,
        'created_at' => WhereDateStartEnd::class,
 ];

    protected $allowedSorts = [
        'id',
        'price',
        'updated_at',
        'created_at',
    ];
}
