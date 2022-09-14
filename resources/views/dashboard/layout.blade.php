<!DOCTYPE html>
<html lang="en">
@include('dashboard.includes.head')
<body>

  @include('dashboard.includes.nav')

  <div class="container-fluid">
    <div class="row">
      @include('dashboard.includes.menu')

      @include('dashboard.includes.main')
    </div>
  </div>

@include('dashboard.includes.scripts')
</body>
</html>
