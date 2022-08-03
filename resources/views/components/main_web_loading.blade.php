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
<body class="relative font-AmpleSoft" onload="hideLoading()">
  @empty($specialPage)
    @include('components.navbar_web')
    <div class="py-8 lg:py-9"></div>
  @endempty
  <main>
    <div class="relative opacity-100 transition-all duration-[4000ms]" id="loading-target">
      <div class="fixed top-0 bottom-0 left-0 right-0 min-h-screen min-w-full flex justify-center items-center bg-white bg-opacity-50 z-10">
        <img src="{{ url('image/web/LoadingWeb.gif') }}" alt="Loading Urban Athletes">
      </div>
    </div>
    <div class="font-AmpleSoft">
      {{$slot}}
    </div>
  </main>
  @empty($specialPage)
  <footer>
    @include('components.footer_web')
  </footer>
  @endempty
  <script src="{{ url('/js/app.js') }}"></script>
  {{-- <script src="{{ url('js/coba.js') }}"></script> --}}
  <script>
    let loadingTarget = document.querySelector('#loading-target');
    function showLoading() {
      console.log(loadingTarget);
    }

    function hideLoading() {
      loadingTarget.classList.add('loading-hidden');
      setInterval(() => {
        loadingTarget.classList.add('hidden')
      },4000)
    }
  </script>
  @stack('script')
</body>
</html>