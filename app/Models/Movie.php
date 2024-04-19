<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title',
        'genre',
        'director',
        'rating',
        'thumbnail',
        'poster',
        'release_date',
        'synopsis',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
