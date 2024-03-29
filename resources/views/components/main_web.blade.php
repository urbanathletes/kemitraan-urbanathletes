<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('/css/app.css')}}">
  <link rel="stylesheet" href="{{ url('/css/style.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('/fontawesome/css/all.min.css') }}">
  @stack('style')
  <title>{{ $title ?? config('app.name') }}</title>
</head>
<body class="relative font-AmpleSoft">
  @empty($specialPage)
    @include('components.navbar_web')
    <div class="py-8 lg:py-9"></div>
  @endempty
  <main>
    <div class="font-AmpleSoft">
      {{$slot}}
    </div>
  </main>
  @empty($specialPage)
  <footer>
    @empty($specialPageNoFooter)
    @include('components.footer_web')
    @endempty
  </footer>
  @endempty
  <script src="{{ url('/js/app.js') }}"></script>
  @stack('script')
</body>
</html>