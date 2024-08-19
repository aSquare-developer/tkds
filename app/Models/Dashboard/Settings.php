<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['address', 'phone', 'email'];
}
