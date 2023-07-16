<?php

namespace App\Models\Dashboard;

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

      if($this->save()) {
        return true;
      } else {
        return false;
      }
    }
}
