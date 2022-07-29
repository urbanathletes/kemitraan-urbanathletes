<x-main_kemitraan menu='FRANCHISE' subMenu="VALOR">
  <div class="flex flex-col md:grid md:grid-cols-2 min-h-max" id="register">
    <div class="flex justify-start md:justify-end md:min-w-[75%] relative h-72 md:h-[430px]">
      <img class="object-cover object-left mr-auto w-full" src="{{ url('image/franchise/Banner_valor.jpg') }}" alt="Franchise Urban Athletes">
      <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-t md:bg-gradient-to-l from-neutral-800 flex justify-center items-center">
        <img class="w-48" src="{{ url('image/web/logo/Valor_TM_putih.png') }}" alt="Valor">
      </div>
    </div>
    <div class="grid content-center bg-neutral-800 text-white px-4 py-4 z-10 font-Futura">
      <h2 class="mx-2 text-3xl font-FuturaBold">INVESTMENT TODAY.</h2>
      <form action="">
        @csrf
        <div class="flex">
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">FIRST NAME</span>
            <input name="first_name" type="text"
            value="{{ old('first_name') }}"
            placeholder="FIRST NAME"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('first_name') error-input @enderror" required>
            @error('first_name')
              <div id="first_name" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">LAST NAME</span>
            <input name="last_name" type="text"
            value="{{ old('last_name') }}"
            placeholder="LAST NAME"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('last_name') error-input @enderror" required>
            @error('last_name')
              <div id="last_name" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="flex">
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">EMAIL</span>
            <input name="email" type="text"
            value="{{ old('email') }}"
            placeholder="EMAIL"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('email') error-input @enderror" required>
            @error('email')
              <div id="email" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">MOBILE PHONE NUMBER</span>
            <input name="phone" type="text"
            value="{{ old('phone') }}"
            placeholder="MOBILE PHONE NUMBER"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('phone') error-input @enderror" required>
            @error('phone')
              <div id="phone" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="flex">
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">COUNTRY/REGION</span>
            <input name="country" type="text"
            value="{{ old('country') }}"
            placeholder="COUNTRY/REGION"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('country') error-input @enderror" required>
            @error('country')
              <div id="country" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">CITY</span>
            <input name="city" type="text"
            value="{{ old('city') }}"
            placeholder="CITY"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('city') error-input @enderror" required>
            @error('city')
              <div id="city" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="flex">
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">COUMPANY NAME</span>
            <input name="company" type="text"
            value="{{ old('company') }}"
            placeholder="COUMPANY NAME"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('company') error-input @enderror" required>
            @error('company')
              <div id="company" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">COUNTRY/REGION</span>
            <input name="country" type="text"
            value="{{ old('country') }}"
            placeholder="COUNTRY/REGION"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('country') error-input @enderror" required>
            @error('country')
              <div id="country" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">CITY</span>
            <input name="city" type="text"
            value="{{ old('city') }}"
            placeholder="CITY"
            class="mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
            @error('city') error-input @enderror" required>
            @error('city')
              <div id="city" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="mx-2 my-2">
          <button class="py-2 px-4 bg-yellow-primary text-black hover:bg-yellow-600 font-FuturaBold transition-all duration-300" type="submit">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
  <div class="container py-8">
    <h2 class="font-FuturaBold text-4xl text-center">WHY INVEST IN VALOR ?</h2>
    <div class="py-4">
      <div class="flex justify-center lg:max-h-screen overflow-hidden lg:container">
        <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
          <source src="{{ url('video/VideoBannerUA.mp4') }}" type="video/mp4">
        </video>
      </div>
    </div>
  </div>

  <div class="bg-[url('/image/franchise/Valor_bg.jpg')] bg-cover bg-center text-white">
    <div class="py-4 text-center text-2xl font-FuturaBold">
      <h2>LOW COMPLEXITY, <br>LOW OPERATIONAL EXPENDITURE</h2>
    </div>
    <div class="container text-center grid md:grid-cols-3">
      <div class="my-4 max-w-xs mx-auto px-4">
        <img class="h-24 mx-auto" src="{{ url('image/franchise/Label_valor-1.png') }}" alt="Valor Urban Athletes">
        <div class="py-4">
          <p class="tracking-widest">
            Our studios can be built in as compact as 75m² to 350m².
          </p>
        </div>
      </div>
      <div class="my-4 max-w-xs mx-auto px-4">
        <img class="h-24 mx-auto" src="{{ url('image/franchise/Label_valor-2.png') }}" alt="Valor Urban Athletes">
        <div class="py-4">
          <p class="tracking-widest">
            We offer high-quality commercial grade equipment available in a variety of packages.
          </p>
        </div>
      </div>
      <div class="my-4 max-w-xs mx-auto px-4">
        <img class="h-24 mx-auto" src="{{ url('image/franchise/Label_valor-3.png') }}" alt="Valor Urban Athletes">
        <div class="py-4">
          <p class="tracking-widest">
            We utilise technology to provide both a seamless fan experience and a business & membership management solution.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="grid md:grid-cols-2 place-items-center">
    <div class="container mx-auto px-4 py-4 max-w-lg">
      <h2 class="font-FuturaBold text-2xl text-[#465137]">TRAINING</h2>
      <h3 class="font-FuturaBold text-lg mb-8">& SUPPORT FOR TRAINERS</h3>
      <p class="tracking-widest">
        We deliver our training modules through an online training platform. Trainers will be guided through a series of online videos, checklists, set goals, peer and personal assessments and recommended training sessions.
      </p>
      <p class="tracking-widest pt-2">
        All these content will prepare them to be a world-class trainer <br>– a trainer that sets the world on fire.
      </p>
    </div>
    <div>
      <img src="{{ url('image/franchise/Valor_img-1.jpg') }}" alt="Valor Urban Athletes">
    </div>
  </div>

  <div class="container text-center py-8">
    <div class="">
      <h2 class="text-2xl font-FuturaBold">UNPARALLELED</h2>
      <h2 class="text-4xl font-FuturaBold text-[#465137]">BUSINESS SUPPORT</h2>
      <div class="max-w-3xl mx-auto mt-4">
        <p class="tracking-widest">
          We’re part of a global company with a portfolio of Asia’s best-known fitness brands with a proven business model. Our experienced team is available to you at every step of your build and operational stage so you get the support you need to create a roaring fire.
        </p>
      </div>
    </div>
    <div class="flex flex-wrap justify-around items-center py-4 lg:px-10">
      <img class="h-20 m-4" src="{{ url('image/web/logo/LOGO_UA_HITAM_TM.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/URBAN-FALCON FINAL-TM.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/Valor_TM.png') }}" alt="Mitra Urban Athletes">
      {{-- <img class="h-20 m-4" src="{{ url('image/web/logo/urbanfit.png') }}" alt="Mitra Urban Athletes"> --}}
      <img class="h-20 m-4" src="{{ url('image/web/logo/fitness_work-02.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/URBAN-LOGOCIRCUIT.png') }}" alt="Mitra Urban Athletes">
    </div>
  </div>

  <div class="bg-[url('/image/web/footer/Valor_bg_img_1.jpg')] bg-cover bg-center text-white text-center py-8">
    <h2 class="font-FuturaBold text-2xl mb-4">FEATURED PROGRAMME</h2>
    <div>
      <img class="mx-auto w-48 " src="{{ url('image/web/logo/Valor_TM_putih.png') }}" alt="Valor">
    </div>
    <div class="max-w-4xl mx-auto px-4">
      <p class="tracking-widest mt-4">
        A new transformational programme by FIRE FIT. FIRE Revolution is a 45-minute high intensity programme designed to deliver maximum results in a safe, instructor-led setting that guarantees success to our FIRE fans. FIRE Revolution is suitable for any fitness levels.
      </p>
      <p class="tracking-widest mt-4">
        Our in-studio programme provides fans with performance data post workout that enhances the high-end boutique experience. The class is fully supported by our programme delivery platform that not only guides the FIRE fans but also underpins instructor directions.
      </p>
    </div>
  </div>
  <div class="bg-[url('/image/franchise/Valor_bg_img_2.jpg')] bg-cover bg-center text-white text-center py-40 mb-4">
    <h2 class="font-FuturaBold text-4xl mb-2">JOIN US NOW</h2>
    <h2 class="font-FuturaBold text-2xl mb-4">BE ONE WITH THE VALOR.</h2>
    <div class="py-4">
      <a class="font-FuturaBold py-2 px-8 border border-white hover:bg-neutral-300 hover:text-black transition-all duration-300" href="#register">REGISTER</a>
    </div>
  </div>

</x-main_kemitraan>