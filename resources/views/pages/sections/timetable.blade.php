<section id="timetable" class="pt-5">

<div class="container">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs justify-content-center" role="tablist">
      <li role="presentation"><a class="active" href="#bighall" aria-controls="bighall" role="tab" data-toggle="tab"><h3>STUDIO II</h3></a></li>
      <li role="presentation"><a href="#smallhall" aria-controls="smallhall" role="tab" data-toggle="tab"><h3>STUDIO I</h3></a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content pt-3">

      <div role="tabpanel" class="tab-pane active" id="bighall">
        <div class="table-responsive">
          <table class="table text-center">
              <thead>
                  <tr class="bg-light-gray">
                      <th class="text-uppercase">Esmaspäev</th>
                      <th class="text-uppercase">Teisipäev</th>
                      <th class="text-uppercase">Kolmapäev</th>
                      <th class="text-uppercase">Neljapäev</th>
                      <th class="text-uppercase">Reede</th>
                      <th class="text-uppercase">Laupäev</th>
                      <th class="text-uppercase">Pühapäev</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 1 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 2 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 3 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 4 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 5 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 6 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 7 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 1)
                              <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                  </tr>

                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 2 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 3 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 4 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 5 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 6 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 7 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 2)
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                  </tr>

                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 2 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                              <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 3 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                              <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 4 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                              <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 5 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 6 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 7 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 3)
                              <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                  </tr>

                  <tr>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 1 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 2 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 3 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 4 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 5 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 6 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 7 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 4)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                  </tr>

                  <tr>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 1 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 2 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 3 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 4 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 5 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 6 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                      <td>
                        @foreach($arrayOflessons as $lessons)
                          @foreach($lessons as $lesson)
                            @if($lesson->day == 7 && $lesson->hall_size == 0 && $lesson->order_of_lesson == 5)
                              <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                              <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                              <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                            @endif
                          @endforeach
                        @endforeach
                      </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="smallhall">
        <div class="table-responsive">
          <table class="table text-center">
              <thead>
                  <tr class="bg-light-gray">
                    <th class="text-uppercase">Esmaspäev</th>
                    <th class="text-uppercase">Teisipäev</th>
                    <th class="text-uppercase">Kolmapäev</th>
                    <th class="text-uppercase">Neljapäev</th>
                    <th class="text-uppercase">Reede</th>
                    <th class="text-uppercase">Laupäev</th>
                    <th class="text-uppercase">Pühapäev</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 2 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 3 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 4 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 5 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 6 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 7 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 1)
                            <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 2 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 3 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 4 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 5 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 6 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 7 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 2)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 2 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 3 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 4 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 5 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 6 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 7 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 3)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 2 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 3 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 4 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 5 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 6 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 7 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 4)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                  </tr>
                  <tr>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 1 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 2 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 3 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 4 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 5 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 6 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                    <td>
                      @foreach($arrayOflessons as $lessons)
                        @foreach($lessons as $lesson)
                          @if($lesson->day == 7 && $lesson->hall_size == 1 && $lesson->order_of_lesson == 5)
                            <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">{{ $lesson->dancestyle }}</span>
                            <div class="margin-10px-top font-size14">{{ $lesson->getLessonStartAndEndTime() }}</div>
                            <div class="font-size13 text-light-gray">{{ $lesson->description }}</div>
                          @endif
                        @endforeach
                      @endforeach
                    </td>
                  </tr>
              </tbody>
          </table>
        </div>
      </div>

    </div>

</div>

</section>
