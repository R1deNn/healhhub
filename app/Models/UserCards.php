<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class UserCards extends Model
{
    use HasFactory;
    use AsSource;

    public function doctor()
    {
        return $this->belongsTo(User::class, 'id_doctor');
    }
}
