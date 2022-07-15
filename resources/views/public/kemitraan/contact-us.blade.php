<x-main menu='CONTACT US'>
  @push('style')
    <style>
      /* #map {
        height: 400px;
        width: 100%;
      } */
      
      
    </style>
  @endpush
  <div>
    <img src="{{ url('/image/contect-us/Find-Us-Urban-Athletes-02.jpg') }}" alt="Contect Us Urban Athletes">
  </div>
  <div class="bg-[url('/image/contect-us/Find-Us-Urban-Athletes-bg-gym-location.jpg')] bg-cover bg-center">
    <div class="font-FuturaBold text-white pt-4 md:pt-8">
      <h2 class="text-3xl text-center py-4">GYM LOCATION</h2>
      <div class="flex flex-wrap justify-around">
        <div class="text-center w-80 lg:w-1/3 mb-8">
          <div class="flex justify-center">
            <img src="{{ url('/image/contect-us/urban-athletes-marvell.jpg') }}" alt="Urban Athletes">
          </div>
          <div class="py-4">
            <h2 class="text-2xl">URBAN ATHLETES</h2>
            <h2 class="text-2xl">MARVELL CITY MALL</h2>
          </div>
          <p class="text-sm font-sans-serif">Marvell City Mall, Jl. Ngagel No.03, Surabaya</p>
        </div>
        <div class="text-center w-80 lg:w-1/3 mb-8">
          <div class="flex justify-center">
            <img src="{{ url('/image/contect-us/tidar-valor.jpg') }}" alt="Urban Athletes">
          </div>
          <div class="py-4">
            <h2 class="text-2xl">URBAN ATHLETES</h2>
            <h2 class="text-2xl">GUNAWANGSA TIDAR</h2>
          </div>
          <p class="text-sm font-sans-serif">Jl. Tidar No.350, Tembok Dukuh, Surabaya</p>
        </div>
        <div class="text-center w-80 lg:w-1/3 mb-8">
          <div class="flex justify-center">
            <img src="{{ url('/image/contect-us/merr-treadmill.jpg') }}" alt="Urban Athletes">
          </div>
          <div class="py-4">
            <h2 class="text-2xl">URBAN ATHLETES</h2>
            <h2 class="text-2xl">GUNAWANGSA MERR</h2>
          </div>
          <p class="text-sm font-sans-serif">Jl. Raya Kedung Baruk No.96, Surabaya</p>
        </div>
        <div class="text-center w-80 lg:w-1/3 mb-8">
          <div class="flex justify-center">
            <img src="{{ url('/image/contect-us/lenmarc-jungle-gym.jpg') }}" alt="Urban Athletes">
          </div>
          <div class="py-4">
            <h2 class="text-2xl">URBAN ATHLETES</h2>
            <h2 class="text-2xl">LENMARC MALL</h2>
          </div>
          <p class="text-sm font-sans-serif">Jl. Mayjen Yono Suwoyo No.9, Surabaya</p>
        </div>
        <div class="text-center w-80 lg:w-1/3 mb-8">
          <div class="flex justify-center">
            <img src="{{ url('/image/contect-us/Find-Us-Urban-Athletes-img-gym-coming-soon.png') }}" alt="Urban Athletes">
          </div>
          <div class="py-4">
            <h2 class="text-2xl">URBAN ATHLETES</h2>
            <h2 class="text-2xl">GRESIK</h2>
          </div>
          <p class="text-sm font-sans-serif">Jl. Raya Ambeng Ambeng, Kabupaten Gresik,</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container text-center my-4">
    <h2 class="text-3xl my-4">IT’S ALL ABOUT YOU, TELL US MORE!</h2>
    <p class="text-sm font-sans-serif pb-4">We are eager to hear more about you and your vision for starting a profitable gym that will make an impact in your area. Whether your dream for a gym is large or small; budget, mid-tier or premium – we have the answers. So we can work closely together help you succeed, tell us more, we will get back to you to coordinate a discovery call.</p>
  </div>
  <div class="grid md:grid-cols-2">
    <div>
      {{-- <div id="map"></div> --}}
      <div>
        <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1BLfrcfUk0H2FggTjFXoI0RILoBbTR-o&ehbc=2E312F" width="100%" height="480"></iframe>
      </div>
    </div>
    <div class="px-4 mb-4" id="formContact"> {{-- ========Fomr========= --}}

      <form action="{{ url('/contact-us') }}" method="post">
        @csrf
        <label class="block mx-4 my-4 border-b">
          <span class="">Full Name*</span>
          <input name="nama" type="text" 
          value="{{ old('nama') }}"
          placeholder="Nama Lengkap"
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('nama') error-input @enderror" required>
          @error('nama')
            <div id="nama" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">Email*</span>
          <input name="email" type="text" 
          value="{{ old('email') }}"
          placeholder="email"
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('email') error-input @enderror" required>
          @error('email')
            <div id="email" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">Phone Number (WhatsApp)*</span>
          <input name="phone" type="text" 
          value="{{ old('phone') }}"
          placeholder="phone"
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('phone') error-input @enderror" required>
          @error('phone')
            <div id="phone" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">Preferred gym Location (City)*</span>
          <input name="location" type="text" 
          value="{{ old('location') }}"
          placeholder="location"
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('location') error-input @enderror" required>
          @error('location')
            <div id="location" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">Cash Available for Investment*</span>
          <select name="investment" id="investment" 
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('investment') error-input @enderror">
            <option value="< Rp 1.000.000.000,-">< Rp 1.000.000.000,-</option>
            <option value="Rp 1.000.000.000,- - Rp 2.500.000.000,-">Rp 1.000.000.000,- - Rp 2.500.000.000,-</option>
            <option value="Rp 2.500.000.000,- - Rp 5.000.000.000,-">Rp 2.500.000.000,- - Rp 5.000.000.000,-</option>
            <option value="> Rp 5.000.000.000,-">> Rp 5.000.000.000</option>
          </select>
          @error('investment')
            <div id="location" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">Do u own a property<span class="font-sans-serif font-bold text-sm">?</span>*</span>
          <div>
            <label for="property1">
              <input type="radio" id="property1" name="property" value="Yes" checked>
              <span class="ml-2 mr-4">Yes</span>
            </label>
            <label for="property2">
              <input type="radio" id="property2" name="property" value="No">
              <span class="ml-2 mr-4">No</span>
            </label>
          </div>
        </label>
        <label class="block mx-4 my-4" id="property_type">
          <span class="">If Yes, What is the Type of the property*</span>
          <div class="flex flex-wrap">
            <label class="block my-1" for="Land">
              <input type="checkbox" id="Land" name="property_type[]" value="Land">
              <span class="ml-2 mr-4">Land</span>
            </label>
            <label class="block my-1" for="Shop_Houses">
              <input type="checkbox" id="Shop_Houses" name="property_type[]" value="Shop Houses">
              <span class="ml-2 mr-4">Shop Houses</span>
            </label>
            <label class="block my-1" for="a_Building">
              <input type="checkbox" id="a_Building" name="property_type[]" value="a Building">
              <span class="ml-2 mr-4">a Building</span>
            </label>
            <label class="block my-1" for="a_Shopping_Mall">
              <input type="checkbox" id="a_Shopping_Mall" name="property_type[]" value="A Shopping_Mall">
              <span class="ml-2 mr-4">A Shopping Mall</span>
            </label>
            <label class="block my-1" for="a_Club_House">
              <input type="checkbox" id="a_Club_House" name="property_type[]" value="A Club House">
              <span class="ml-2 mr-4">A Club House</span>
            </label>
            <label class="block my-1" for="Other">
              <input type="checkbox" id="Other" name="property_type[]" value="Other">
              <span class="ml-2 mr-4">Other</span>
            </label>
          </div>
        </label>
        <label class="block mx-4 my-4 border-b" id="large">
          <span class="">How big is the property in meter square<span class="font-sans-serif font-bold text-sm">?</span>*</span>
          <input name="large" type="text" 
          value="{{ old('large') }}"
          placeholder=""
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('large') error-input @enderror">
          @error('large')
            <div id="large" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">How do you hear about us<span class="font-sans-serif font-bold text-sm">?</span></span>
          <select name="know" id="know" 
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('know') error-input @enderror">
            <option value="Internet Search/ Google">Internet Search/ Google</option>
            <option value="Internet search">Internet search</option>
            <option value="Instagram">Instagram</option>
            <option value="Facebook">Facebook</option>
            <option value="Event">Event</option>
            <option value="A friend">A friend</option>
            <option value="I'm A member">I'm A member</option>
            <option value="Other">Other</option>
          </select>
          @error('know')
            <div id="location" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4 border-b">
          <span class="">Why are you interested in Urban Athletes<span class="font-sans-serif font-bold text-sm">?</span>*</span>
          <textarea name="interested" id="interested" cols="30" rows="5"
          value="{{ old('interested') }}"
          class="mt-2
          block
          w-full
          px-0.5
          border-0 border-b-2 border-gray-200
          outline-none
          focus:ring-0 focus:border-black
          @error('interested') error-input @enderror" required></textarea>
          @error('interested')
            <div id="interested" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <div class="mx-4 my-4">
          <button class="bg-zinc-800 py-1 px-6 text-white font-sans-serif" type="submit">SUBMIT</button>
        </div>
      </form>

    </div> {{-- ========Fomr========= --}}
  </div>
  <div class="bg-[url('/image/contect-us/bg-find-us.jpg')] bg-cover bg-center text-center py-4">
    <h2 class="text-2xl font-FuturaBold">URBAN ATHLETES</h2>
    <div class="grid md:grid-cols-2 lg:mx-16">
      <div class="py-2">
        <a class="flex justify-center items-center" href=""><i class="fa-brands fa-whatsapp text-2xl mx-2"></i> +62817-9188-880</a>
        <p>Mon to Sat 9am to 6pm</p>
      </div>
      <div class="py-2">
        <a class="flex justify-center items-center" href=""><i class="far fa-envelope text-2xl mx-2"></i> ceo@urbanathletes.co.id</a>
      </div>
    </div>
  </div>
  @push('script')
    @if (session('success'))
      <script>
        Swal.fire(
          'Terima kasih',
          'Data berhasil terkirim',
          'success'
        )
      </script>
    @endif
    <script>
      let property1 = document.querySelector("#property1");
      let property2 = document.querySelector("#property2");
      let property_type = document.querySelector("#property_type");
      let large = document.querySelector("#large");
      property1.addEventListener('change', function() {
        property_type.classList.remove('hidden')
        large.classList.remove('hidden')
      })
      property2.addEventListener('change', function() {
        property_type.classList.add('hidden')
        large.classList.add('hidden')
      })
    </script>
    {{-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx_7ZtNcOa8nrbn5s8zYtP-rsNvek3uw8&callback=initMap&v=weekly"
      defer
    ></script>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.031 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }

      window.initMap = initMap;
    </script> --}}
  @endpush
</x-main>