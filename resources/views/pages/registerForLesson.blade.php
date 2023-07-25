@extends('layout')

@section('title', config('app.name') . ' - ' . 'Register')

@section('content')

    <div class="container">
        <h1>Uute tantsijate vastuvõtt 2022/23</h1>

        <form action="/register-for-lessons" method="post">
            @csrf

            <div class="form-group">
                <label for="fullname">Ees- ja perekonnanimi</label>
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Ees- ja perekonnanimi" value="{{ old('fullname') }}" required>
            </div>

            <div class="form-group">
                <label for="age">Vanus</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Vanus" value="{{ old('age') }}" required>
            </div>

            <div class="form-group">
                <label for="dancestyle">Tantsustiil</label>
                <input type="text" class="form-control" id="dancestyle" name="dancestyle" placeholder="Tantsustiil" value="{{ old('dancestyle') }}" required>
            </div>

            <div class="form-group">
                <label for="email">E-post</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-post" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
            </div>

            <button type="submit" class="btn btn-outline-success">Saada</button>

        </form>
    </div>

@endsection
