<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dancestyle extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'slug', 'email', 'description', 'youtube-link'
    ];
}