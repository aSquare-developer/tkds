<section id="dancestyle" class="text-center pt-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-7 text-center">
                <h3 class="mb-3">Experienced & Professional Team</h3>
            </div>
        </div>
        <div class="row">
            @foreach($teachers as $teacher)
                <div class="col-lg-3 mb-4">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ Storage::url($teacher->image_url) }}" alt="{{ Str::slug($teacher->fullname) }}" class="img-fluid rounded-circle" />
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">{{ $teacher->fullname }}</h5>
                                <h6 class="subtitle mb-3">
                                    @foreach($teacher->danceStyles as $danceStyle)
                                        {{ $danceStyle->name }}
                                    @endforeach
                                </h6>
                                <p>{{ Str::limit($teacher->description, 100) }}</p>
                                <ul class="list-inline">
                                    @if(isset($teacher->facebook_link))
                                        <li class="list-inline-item">
                                            <a href="{{ $teacher->facebook_link }}" target="_blank" class="text-decoration-none d-block px-1">
                                                <img src="{{ URL::asset('/img/facebook-icon.png') }}" width="28" alt="TKDS Facebook page">
                                            </a>
                                        </li>
                                    @endif
                                    @if(isset($teacher->youtube_link))
                                        <li class="list-inline-item">
                                            <a href="{{ $teacher->youtube_link }}" target="_blank" class="text-decoration-none d-block px-1">
                                                <img src="{{ URL::asset('/img/youtube-icon.png') }}" width="28" alt="TKDS YouTube channel">
                                            </a>
                                        </li>
                                    @endif
                                    @if(isset($teacher->instagram_link))
                                        <li class="list-inline-item">
                                            <a href="{{ $teacher->instagram_link }}" target="_blank" class="text-decoration-none d-block px-1">
                                                <img src="{{ URL::asset('/img/instagram-icon.png') }}" width="28" alt="TKDS Instagram">
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                </div>
            @endforeach
        </div>
    </div>
</section>
