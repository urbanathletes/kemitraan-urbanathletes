<x-main_web menu='ABOUT US' subMenu="CLUB">
  <div class="container">
    <div class="lg:flex lg:justify-between items-end">
      <div class="font-FuturaBold my-4">
        <h2 class="text-4xl">CLUB GALLERY</h2>
        <h2 class="text-4xl">OF URBAN ATHLETES</h2>
      </div>
      <div class="lg:text-xl font-black space-x-4 my-4">
        <button class="hover:text-yellow-primary">Gunawangsa Merr</button>
        <button class="hover:text-yellow-primary">Gunawangsa Tidar</button>
        <button class="hover:text-yellow-primary">Marvell City</button>
        <button class="hover:text-yellow-primary">Lenmarc Mall</button>
      </div>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 my-8">
      <div class="col-span-2 max-h-60 m-1 overflow-hidden">
        <button id="image" class="h-full">
          <img class="object-cover object-center w-full" src="{{ url('image/web/about/clubs/tidar/Tidar_1.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
      <div class="m-1">
        <button id="image" class="h-full">
          <img class="object-cover object-center h-full aspect-auto" src="{{ url('image/web/about/clubs/tidar/Tidar_2.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
      <div class="m-1">
        <button id="image" class="h-full">
          <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_3.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
      <div class="m-1">
        <button id="image">
          <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_4.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
      <div class="m-1">
        <button id="image">
          <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_5.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
      <div class="m-1">
        <button id="image">
          <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_6.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
      <div class="m-1">
        <button id="image">
          <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_7.jpg') }}" alt="Clubs Urban Athletes">
        </button>
      </div>
    </div>
  </div>
  @push('script')
    
  @endpush
</x-main_web>