<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'timetable';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'day',
      'dancestyle',
      'lesson_start',
      'lesson_end',
      'description',
      'order_of_lesson',
      'hall_size'
    ];

    /**
     * Function return week day
     *
     * @var array
     */
    public function getWeekDay() {
      $week_day = "";

      switch ($this->day) {
        case 1: $week_day = "Monday"; break;
        case 2: $week_day = "Tuesday"; break;
        case 3: $week_day = "Wednesday"; break;
        case 4: $week_day = "Thursday"; break;
        case 5: $week_day = "Friday"; break;
        case 6: $week_day = "Saturday"; break;
        case 7: $week_day = "Sunday"; break;
        default: $week_day = "IDK"; break;
      }

      return $week_day;
    }

    /**
     * Function return hall size
     *
     * @var array
     */
    public function getHallSize() {
      return $this->hall_size == 0 ? "Big hall" : "Small hall";
    }

    /**
     * Function return lesson start and end time
     *
     * @var array
     */
    public function getLessonStartAndEndTime() {
      return $this->lesson_start . " - " . $this->lesson_end;
    }

    /**
     * Function update lesson
     *
     * @var array
     */
    public function updateLesson($day, $dancestyle, $lesson_start, $lesson_end, $description, $order_of_lesson, $hall_size) {
      $this->day = $day;
      $this->dancestyle = $dancestyle;
      $this->lesson_start = $lesson_start;
      $this->lesson_end = $lesson_end;
      $this->description = $description;
      $this->order_of_lesson = $order_of_lesson;
      $this->hall_size = $hall_size;

      if($this->save()) {
        return true;
      } else {
        return false;
      }
    }

    /**
     * Function get all lesson in array
     *
     * @var array
     */
    public static function getDataOfLessons() {
      $data = [];
      $mondayLessons = [];
      $tuesdayLessons = [];
      $wednesdayLessons = [];
      $thursdayLessons = [];
      $fridayLessons = [];
      $saturdayLessons = [];
      $sundayLessons = [];

      $lessons = Timetable::all();

      foreach ($lessons as $lesson) {
        switch ($lesson->day) {
          case 1: array_push($mondayLessons, $lesson); break;
          case 2: array_push($tuesdayLessons, $lesson); break;
          case 3: array_push($wednesdayLessons, $lesson); break;
          case 4: array_push($thursdayLessons, $lesson); break;
          case 5: array_push($fridayLessons, $lesson); break;
          case 6: array_push($saturdayLessons, $lesson); break;
          case 7: array_push($sundayLessons, $lesson); break;
          default: return false; break;
        }
      }

      array_push($data, $mondayLessons, $tuesdayLessons, $wednesdayLessons, $thursdayLessons, $fridayLessons, $saturdayLessons, $sundayLessons);

      return $data;
    }


}
