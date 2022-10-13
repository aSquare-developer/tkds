<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
      'title', 'sub_title', 'register_button', 'trial_button', 'about_first', 'about_second'
    ];

    public function editHeader($title, $sub_title, $register_button, $trial_button, $about_first, $about_second) {
      $this->title = $title;
      $this->sub_title = $sub_title;
      $this->register_button = $register_button;
      $this->trial_button = $trial_button;
      $this->about_first = $about_first;
      $this->about_second = $about_second;
      $this->save();
      return true;
    }
}
