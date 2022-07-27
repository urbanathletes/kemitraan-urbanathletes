<x-main specialPage=true>
  <div class="flex justify-center items-center max-h-full relative">
    <div class="absolute top-0 right-0 left-0 flex justify-center sm:py-6">
      <img class="z-20 h-24" src="{{ url('/image/logo-urban-athletes.png') }}" alt="Urban Athletes">
    </div>
    <div class="min-h-screen w-1/2 flex justify-center items-center overflow-hidden z-10">
      <a class="min-h-screen w-full 
      sm:bg-[url('/image/landing-page-1.png')]
      bg-[url('/image/Landing-Page-Mobile-1.png')]
      bg-cover bg-no-repeat bg-top sm:bg-center hover:scale-105 transition-all duration-300" href="https://klik.urbanathletes.co.id/dev">
      </a>
    </div>
    <div class="min-h-screen w-1/2 flex justify-center items-center overflow-hidden z-10">
      <a class="min-h-screen w-full 
      sm:bg-[url('/image/landing-page-2.png')] 
      bg-[url('/image/Landing-Page-Mobile-2.png')] 
      bg-cover bg-no-repeat bg-top sm:bg-center hover:scale-105 transition-all duration-300" href="{{ url('/franchise/home') }}">
      </a>
    </div>
  </div>
</x-main>