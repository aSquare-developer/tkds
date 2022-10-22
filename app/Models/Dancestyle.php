<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dancestyle extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'slug', 'description', 'dancestyle_description', 'youtube_link'
    ];

    public function updateDancestyle($name, $slug, $description, $dancestyle_description, $youtube_link) {
      $this->name = $name;
      $this->slug = $slug;
      $this->description = $description;
      $this->dancestyle_description = $dancestyle_description;
      $this->youtube_link = $youtube_link;

      if($this->save()) {
        return true;
      } else {
        return false;
      }

    }
}
