<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'image_url', 'description', 'instagram_link', 'facebook_link', 'youtube_link'];

    public function dancestyles() {
        return $this->belongsToMany(Dancestyle::class);
    }

    // Register the "deleting" event to delete the associated image file from storage
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($teacher) {
            // Check if an image is associated with the teacher
            if ($teacher->image_url) {
                // Delete the image from the storage
                Storage::delete('public/' . $teacher->image_url);
            }
        });
    }
}
