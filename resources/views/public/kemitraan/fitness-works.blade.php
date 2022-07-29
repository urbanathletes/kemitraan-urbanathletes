<x-main_kemitraan menu='FRANCHISE' subMenu="FITNESS WORKS">
  <div class="flex flex-col md:grid md:grid-cols-2 min-h-max" id="register">
    <div class="grid items-center mx-auto px-4 md:py-4">
      {{-- <img class="object-cover object-left mr-auto w-full" src="{{ url('image/franchise/Banner_valor.jpg') }}" alt="Franchise Urban Athletes">
      <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-t md:bg-gradient-to-l from-neutral-800 flex justify-center items-center">
        <img class="w-48" src="{{ url('image/web/logo/Valor_TM_putih.png') }}" alt="Valor">
      </div> --}}
      <h2 class="pb-4 font-FuturaBold text-2xl text-center">WHY INVEST IN FITNESS WORK ?</h2>
      <video class="object-cover" autoplay muted loop>
        <source src="{{ url('video/VideoBannerUA.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="grid content-center px-4 py-4 z-10 font-Futura tracking-widest">
      <h2 class="mx-2 mb-4 text-3xl font-FuturaBold tracking-normal">INVESTMENT TODAY.</h2>
      <form action="">
        @csrf
        <div class="flex">
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">FIRST NAME</span>
            <input name="first_name" type="text"
            value="{{ old('first_name') }}"
            placeholder="FIRST NAME"
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
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
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
            @error('city') error-input @enderror" required>
            @error('city')
              <div id="city" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
        </div>
        <div class="mx-2 my-2">
          <button class="py-2 px-6 bg-black text-white hover:bg-neutral-700 font-FuturaBold transition-all duration-300" type="submit">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>
  <div class="bg-neutral-100">
    <div class="container py-8 grid grid-cols-1 lg:grid-cols-2">
      <div class="p-4">
        <h3 class="font-FuturaBold text-2xl mb-2">VARIETY OF</h3>
        <h2 class="font-FuturaBold text-4xl text-blue-800 mb-2">LICENSING</h2>
        <h2 class="font-FuturaBold text-4xl text-blue-800 mb-8">OPTIONS</h2>
        <p class="tracking-widest">
          Amp it up with our larger studio spaces. Designed with the same minimalist approach, these larger studio spaces make the most of every inch.
        </p>
        <p class="tracking-widest mt-2">
          Go big with our double and triple studio spaces to add on FIRE’s other signature programmes into your licensing packages.
        </p>
      </div>
      <div class="my-4">
        <div class="flex justify-around font-FuturaBold">
          <button class="text-blue-800">SINGLE STUDIO</button>
          <button class="">DOUBLE STUDIO</button>
          <button class="">TRIPLE STUDIO</button>
        </div>
        <div class="p-4">
          <img class="p-8" src="{{ url('image/franchise/studio/studio-floor-plan-single.png') }}" alt="Studio Urban Athletes">
        </div>
      </div>
    </div>
  </div>

  <div class="bg-black text-white py-8">
    <div class="py-4 text-center text-2xl font-FuturaBold">
      <h2><span class="text-red-600">LOW</span> COMPLEXITY</h2>
      <h2><span class="text-red-600">LOW</span> OPERATIONAL EXPENDITURE</h2>
    </div>
    <div class="container text-center grid md:grid-cols-3">
      <div class="my-4 max-w-xs mx-auto px-4">
        <img class="h-24 mx-auto" src="{{ url('image/franchise/Label_valor-1_white.png') }}" alt="Valor Urban Athletes">
        <div class="py-4">
          <p class="tracking-widest">
            Our studios can be built in as compact as 75m² to 350m².
          </p>
        </div>
      </div>
      <div class="my-4 max-w-xs mx-auto px-4">
        <img class="h-24 mx-auto" src="{{ url('image/franchise/Label_valor-2_white.png') }}" alt="Valor Urban Athletes">
        <div class="py-4">
          <p class="tracking-widest">
            We offer high-quality commercial grade equipment available in a variety of packages.
          </p>
        </div>
      </div>
      <div class="my-4 max-w-xs mx-auto px-4">
        <img class="h-24 mx-auto" src="{{ url('image/franchise/Label_valor-3_white.png') }}" alt="Valor Urban Athletes">
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
    <div class="flex justify-center lg:max-h-screen overflow-hidden">
      <img class="object-cover object-top min-h-[350px] min-w-full" src="{{ url('image/franchise/Exclusive_Falcon.jpg') }}" alt="Valor Urban Athletes">
    </div>
  </div>
  <div>
    <img class="object-cover object-center" src="{{ url('image/franchise/FitnessWork_benner.jpg') }}" alt="Fitness Work Urban Athletes">
  </div>

  <div class="container text-center py-12">
    <div class="">
      <h2 class="text-2xl font-FuturaBold">UNPARALLELED</h2>
      <h2 class="text-4xl font-FuturaBold text-blue-800">BUSINESS SUPPORT</h2>
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
      <img class="mx-auto h-40 " src="{{ url('image/web/logo/fitness_work-02_white.png') }}" alt="Fitness Works">
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
  <div class="bg-[url('/image/franchise/Valor_bg_img_2-w.jpg')] bg-cover bg-centere text-center py-40">
    <h2 class="font-FuturaBold text-4xl mb-2 text-blue-800">JOIN US NOW</h2>
    <h2 class="font-FuturaBold text-2xl mb-4">BE ONE WITH THE VALOR.</h2>
    <div class="py-4">
      <a class="font-FuturaBold py-2 px-8 border border-zinc-800 hover:bg-zinc-800 hover:text-white transition-all duration-300" href="#register">REGISTER</a>
    </div>
  </div>

</x-main_kemitraan>