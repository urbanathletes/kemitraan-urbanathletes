<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('/css/app.css')}}">
  <link rel="stylesheet" href="{{ url('/css/style.css')}}">
  <title>{{ $title ?? config('app.name') }}</title>
</head>
<body class="relative font-serif">
  @empty($specialPage)
    @include('components.navbar')
    <div class="py-8 md:py-0"></div>
  @endempty
  <main>
    {{$slot}}
  </main>
  @empty($specialPage)
  <footer>
    @include('components.footer')
  </footer>
  <script src="{{ url('/js/script_navbar.js') }}"></script>
  @endempty
</body>
</html>