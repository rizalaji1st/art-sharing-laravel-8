<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeKontenUser extends Model
{
    use HasFactory;
    protected $table = 'like_konten_user';

    protected $fillable = [
        'user_id',
        'konten_id',
        'created_by',
    ];

    protected $dates = [
        'created_at',
    ];
}
