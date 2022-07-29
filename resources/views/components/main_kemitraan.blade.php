<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
    @include('components.navbar_kemitraan')
    <div class="py-8 md:py-9 lg:py-10"></div>
  @endempty
  <main>
    <div class="font-Futura">
      {{$slot}}
    </div>
  </main>
  @empty($specialPage)
  <footer>
    @include('components.footer_web')
  </footer>
  @endempty
  <script src="{{ url('/js/app.js') }}"></script>
  @stack('script')
</body>
</html>