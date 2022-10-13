<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
      'name', 'description', 'status'
    ];

    public function updateTask($name, $description) {
      $this->name = $name;
      $this->description = $description;
      $this->save();
      return true;
    }
}
