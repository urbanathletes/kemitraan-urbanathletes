<x-main_kemitraan menu='FRANCHISE' subMenu="URBAN ATHLETES">
  <div class="font-Futura">
    <div class="flex flex-col md:grid md:grid-cols-2 min-h-max">
      <div class="flex justify-center md:justify-end md:min-w-max relative h-72 md:h-[430px]">
        <img class="object-cover object-center w-full" src="{{ url('image/franchise/home_franchise_benner.jpg') }}" alt="Franchise Urban Athletes">
        <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-t md:bg-gradient-to-l from-black"></div>
      </div>
      <div class="grid content-center bg-black text-white px-4 py-4 z-10 font-Futura">
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

    <div class="py-8">
      <div class="container">
        <h2 class="font-FuturaBold text-2xl border-l-[8px] border-yellow-primary px-4">
          Why Partner With URBAN ATHLETES ?
        </h2>
        <p class="py-4 tracking-wide">
          Demand for affordable fitness is a global trend. As a pioneer of, and leading operator in, the UK value sector, PureGym has unrivalled expertise in opening and operating value gyms, and benefits from significant scale.
        </p>
      </div>
      <div class="lg:container">
        <div class="flex justify-center lg:max-h-screen overflow-hidden">
          <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
            <source src="{{ url('video/VideoBannerUA.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>

    <div class="py-8">
      <div class="container">
        <h2 class="font-FuturaBold text-2xl border-l-[8px] border-yellow-primary px-4">
          Key Areas of Sustainable Competitive Advantage
        </h2>
      </div>
      <div class="lg:container">
        <div class="
          text-white font-Futura font-bold py-8 tracking-widest leading-5
          flex flex-wrap justify-center
        ">

          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>01</p>
              </div>
              <p>4 Gym Concept (Based on SWOT Analysis)</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>02</p>
              </div>
              <p>Urban Athletes Academy Integrated Coaching, Training & Certification</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>03</p>
              </div>
              <p>Customized Integrated Operational Gym Software and mobile apps</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>04</p>
              </div>
              <p>All Club Access Membership</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>05</p>
              </div>
              <p>Hustle Free Investment, Realtime Online Revenue Report</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>06</p>
              </div>
              <p>Hustle Free Investment, Realtime Online Revenue Report</p>
            </div>
          </div>

        </div>
        <div class="container tracking-wide">
          <p class="py-2">
            As Franchisor, Urban Athletes has a full eco-system to set you up for success including a Technology Smart Suite, with localised: 
          </p>
          <ul class="list-disc pl-4">
            <li>
              Website
            </li>
            <li>
              App
            </li>
            <li>
              Member Management System (MMS)
            </li>
          </ul>
          <p class="py-2">
            With the knowledge and support from an experienced franchise team, the Urban Athletes operating model can be deployed to help you bring an industry leading gym to your market.
          </p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="relative flex justify-center">
        <h2 class="text-2xl font-FuturaBold">PROSES JOIN FRANCHISE</h2>
        <div class="w-40 inline border-b-4 border-yellow-primary absolute -bottom-2"></div>
      </div>
      <div class="lg:flex lg:justify-center lg:my-12">
        <div class="flex justify-center lg:block pt-8">
          <div class="relative hidden lg:block py-4 border border-b-0 border-black">
            <p class="absolute -top-10 right-0 left-0 text-center whitespace-nowrap font-FuturaBold">1 - 2 MONTH</p>
          </div>
          <div class="grid grid-cols-1
            lg:flex lg:justify-center
          ">
            <div class="my-4 lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/pageIconUa-1.png') }}" alt="Icon Urban Athletes"> 
                </div>
                <div class="p-4">
                  <p class="text-lg font-FuturaBold">Proses <br>Administrasi</p>
                  <p class="py-3 tracking-wide">Presentasi lanjutan <br>proses Q&A.</p>
                </div>
              </div>
            </div>
            <div class="my-4 lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/pageIconUa-2.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-lg font-FuturaBold">
                    Pembayaran <br>Commitment fee
                  </p>
                  <p class="py-3 tracking-wide">
                    Pembayaran <br>
                    commitment fee <br>
                    sebesar 100 juta.
                  </p>
                  {{-- <p>proses Q&A.</p> --}}
                </div>
              </div>
            </div>
            <div class="my-4 lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/pageIconUa-3.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-lg font-FuturaBold">
                    Survey dan <br>
                    Pemilihan Lokasi <br>
                    Design Lokasi
                  </p>
                  <p class="py-3 tracking-wide">
                    Kami membantu Anda <br>
                    untuk menentukan lokasi <br>
                    yang tepat melalui survey <br>
                    dan analisa.
                  </p>
                  <p class="py-3 tracking-wide">
                    Dilanjudkan dengan proses <br>
                    design sesuai dengan <br>
                    kebutuhan pasar.
                  </p>
                </div>
              </div>
            </div>
            <div class="my-4 lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/pageIconUa-4.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-lg font-FuturaBold">
                    Pelunasan <br>
                    frinchise fee
                  </p>
                  <p class="py-3 tracking-wide">
                    Pembayaran sisa <br>
                    franchise fee sesuai <br>
                    dengan pihak konsep <br>
                    bisnis dan tanda tangan <br>
                    kontrak. Dilanjutkan <br>
                    dengan proses <br>
                    pembangunan gym
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="lg:hidden relative pl-4 ml-4 mb-8 border-y-2 border-r-2 border-black w-4 min-h-max flex justify-center items-center">
            <p class="absolute -left-3 rotate-90 whitespace-nowrap font-FuturaBold">1 - 2 MONTH</p>
          </div>
        </div>
        
        <div class="flex justify-center lg:block mt-4 lg:mt-8 mb-8 ">
          <div class="relative hidden lg:block py-4 ml-11 border border-b-0 border-black">
            <p class="absolute -top-10 right-0 left-0 3ext-center whitespace-nowrap font-FuturaBold">2 - 3 MONTH</p>
          </div>
          <div class="lg:ml-12 min-w-[191px]">
            <div class="my-4 lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/pageIconUa-5.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-lg font-FuturaBold">
                    Pelunasan <br>
                    frinchise fee
                  </p>
                  <p class="py-3 tracking-wide">
                    Pembayaran sisa <br>
                    franchise fee sesuai <br>
                    dengan pihak konsep <br>
                    bisnis dan tanda tangan <br>
                    kontrak. Dilanjutkan <br>
                    dengan proses <br>
                    pembangunan gym
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="lg:hidden relative pl-4 ml-4 my-6 border-y-2 border-r-2 border-black w-4 min-h-max flex justify-center items-center">
            <p class="absolute -left-3 rotate-90 whitespace-nowrap font-FuturaBold">2 - 3 MONTH</p>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</x-main_kemitraan>