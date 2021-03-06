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
<body class="relative font-serif">
  @empty($specialPage)
    @include('components.navbar_franchise')
    <div class="py-8 md:py-0"></div>
  @endempty
  <main class="font-Futura">
    {{$slot}}
  </main>
  @empty($specialPage)
  <footer>
    @include('components.footer')
  </footer>
  @endempty
  <script src="{{ url('/js/app.js') }}"></script>
  @stack('script')
</body>
</html>