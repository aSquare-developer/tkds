<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentPage extends Model
{
    use HasFactory;

    protected $fillable = [
      'title', 'video_url', 'content'
    ];

    public function editRentPageWith($title, $video_url, $content) {
      $this->title = $title;
      $this->video_url = $video_url;
      $this->content = $content;

      if($this->save()) {
        return true;
      } else {
        return false;
      }
    }
}
