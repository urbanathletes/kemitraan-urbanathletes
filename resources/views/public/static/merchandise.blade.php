<x-main_web menu="MERCHANDISE">
  <div class="container">
    <div class="flex justify-center max-h-[30vh] lg:max-h-[40vh] relative">
      <img class="object-cover object-center w-full mx-auto" src="{{ url('image/web/bg_page/BGAboutUs-OurWorkout.jpg') }}" alt="Store Urban Athletes">
      <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-t from-black via-transparent to-black flex justify-center items-center">
        {{-- <div class="absolute bottom-0 max-w-max text-center pb-6">
        </div> --}}
        <div>
          <img class="h-16 my-4 lg:my-2 lg:h-24 mx-auto lg:mx-0" src="{{ url('image/web/logo/LOGO_UA_PUTIH_TM.png') }}" alt="Logo Urban Athletes">
        </div>
        <div class="ml-2 text-lg sm:ml-8 sm:text-2xl lg:text-4xl font-FuturaBold text-yellow-primary">
          <h2 class="">MERCHANDISE</h2>
          <h2 class="">URBAN ATHLETES</h2>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-3 font-FuturaBold">
      <div>
        <h2>SHOP BY</h2>
        <h2>CATEGORIES</h2>
      </div>
      <div class="col-span-2">
        <div class="flex flex-row justify-center items-center text-sm w-full">
          <button class="menu-active">ALL PRODUCT</button>
          <button>GYM BACK</button>
          <button>T-SHIRT</button>
        </div>
      </div>
    </div>


  </div>
</x-main_web>