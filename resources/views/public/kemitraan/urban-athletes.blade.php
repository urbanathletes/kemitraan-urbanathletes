<x-main_kemitraan menu='KEMITRAAN' subMenu="URBAN ATHLETES">
  @push('script')
    @if (session('success'))
    <script>
      Swal.fire(
        'Thank you',
        'Data sent successfully',
        'success'
      )
    </script>
    @endif
  @endpush
  <div class="font-Futura" id="register">
    <div class="flex flex-col md:grid md:grid-cols-2 min-h-max">
      <div class="flex justify-center md:justify-end md:min-w-max relative h-72 md:h-[430px]">
        <img class="object-cover object-center w-full" src="{{ url('image/franchise/home_franchise_benner.jpg') }}" alt="Franchise Urban Athletes">
        <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-t md:bg-gradient-to-l from-black"></div>
      </div>
      <div class="grid content-center bg-black text-white px-4 py-4 z-10 font-Futura">
        <form action="{{ url('ua') }}" method="post">
          @csrf
          <div class="flex justify-between">
            <h2 class="mx-2 text-3xl font-FuturaBold">INVESTMENT TODAY.</h2>
            <label for="year" class="border border-black py-2 px-4 font-FuturaBold hidden">
              <p>SELECT INVESTMENT</p>
              <select id="kode_inves" name="kode_inves" class="text-black ml-6 form-select inline max-w-max text-right outline-0 outline-none appearance-none w-full px-3 bg-clip-padding bg-no-repeatrounded transition ease-in-out m-0
                focus:outline-none" aria-label="Default select example" required>
                  <option value="">Select</option>
                  <option selected value="1">Urban Athletes</option>
                  <option value="2">Fitness Works</option>
              </select>
            </label>
          </div>
          <div class="flex">
            <label class="block mx-2 my-2 border-b w-full">
              <span class="">FIRST NAME</span>
              <input name="first_name" type="text"
              value="{{ old('first_name') }}"
              placeholder="FIRST NAME"
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
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
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
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
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
              @error('email') error-input @enderror" required>
              @error('email')
                <div id="email" class="text-sm text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </label>
            <label class="block mx-2 my-2 border-b w-full">
              <span class="">MOBILE NUMBER</span>
              <input name="phone" type="text"
              value="{{ old('phone') }}"
              placeholder="MOBILE NUMBER"
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
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
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
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
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
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
              <span class="">COMPANY NAME</span>
              <input name="company" type="text"
              value="{{ old('company') }}"
              placeholder="COMPANY NAME"
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
              @error('company') error-input @enderror" required>
              @error('company')
                <div id="company" class="text-sm text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </label>
            <label class="block mx-2 my-2 border-b w-full">
              <span class="">JOB TITLE</span>
              <input name="job" type="text"
              value="{{ old('job') }}"
              placeholder="JOB TITLE"
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
              @error('job') error-input @enderror" required>
              @error('job')
                <div id="job" class="text-sm text-red-500">
                    {{ $message }}
                </div>
              @enderror
            </label>
            <label class="block mx-2 my-2 border-b w-full">
              <span class="">INDUSTRY</span>
              <input name="industry" type="text"
              value="{{ old('industry') }}"
              placeholder="INDUSTRY"
              class="text-black mt-2 block w-full px-0.5 border-0 border-b-2 border-gray-200 outline-none focus:ring-0 focus:border-black
              @error('industry') error-input @enderror" required>
              @error('industry')
                <div id="industry" class="text-sm text-red-500">
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
          {{-- Demand for affordable fitness is a global trend. As a pioneer of, and leading operator in, the UK value sector, PureGym has unrivalled expertise in opening and operating value gyms, and benefits from significant scale. --}}
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
              <p>Excellent product offering delivered across a broad range of site sizes</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>02</p>
              </div>
              <p>Great consumer value proposition : no contract and low price</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>03</p>
              </div>
              <p>Operating model combines strong revenue management and low labour costs</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>04</p>
              </div>
              <p>Superior technology and digital capabilities</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>05</p>
              </div>
              <p>Proven in delivering and deploying successful site selection and development</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-gradient-to-tr from-black to-neutral-500 overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>06</p>
              </div>
              <p>Excellent performance management and continuous improvement</p>
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
        <h2 class="text-2xl font-FuturaBold">PROSES JOIN KEMITRAAN</h2>
        <div class="w-40 inline border-b-4 border-yellow-primary absolute -bottom-2"></div>
      </div>
      <div class="lg:flex lg:justify-center lg:my-12">
        <div class="flex justify-center lg:block pt-8">
          <div class="relative hidden lg:block py-4 border border-b-0 border-black">
            <p class="absolute -top-10 right-0 left-0 text-center whitespace-nowrap font-FuturaBold">1 MONTH</p>
          </div>
          <div class="grid grid-cols-1 text-center
            lg:flex lg:justify-center
          ">
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/1n4.png') }}" alt="Icon Urban Athletes"> 
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">Payment Commitment Fee of IDR 10 million</p>
                </div>
              </div>
            </div>
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/2.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">
                    Survey and Site Selection
                  </p>
                  {{-- <p>proses Q&A.</p> --}}
                </div>
              </div>
            </div>
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/3.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">
                    Business Plan
                  </p>
                </div>
              </div>
            </div>
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/1n4.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">
                    Payment of Partnership Fee
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="lg:hidden relative pl-4 ml-4 mb-8 border-y-2 border-r-2 border-black w-4 min-h-max flex justify-center items-center">
            <p class="absolute -left-3 rotate-90 whitespace-nowrap font-FuturaBold">1 MONTH</p>
          </div>
        </div>
        
        {{-- <div class="flex justify-center lg:block mt-4 lg:mt-8 mb-8 ">
          <div class="relative hidden lg:block py-4 ml-11 border border-b-0 border-black">
            <p class="absolute -top-10 right-0 left-0 3ext-center whitespace-nowrap font-FuturaBold">2 - 3 MONTH</p>
          </div>
          <div class="lg:ml-12 min-w-[191px]">
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/5.png') }}" alt="Icon Urban Athletes">
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
        </div> --}}
      </div>

      <div class="lg:flex lg:justify-center lg:my-12">
        <div class="flex justify-center lg:block pt-8">
          <div class="relative hidden lg:block py-4 border border-b-0 border-black">
            <p class="absolute -top-10 right-0 left-0 text-center whitespace-nowrap font-FuturaBold">2 - 3 MONTH</p>
          </div>
          <div class="grid grid-cols-1 text-center
            lg:flex lg:justify-center
          ">
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/5.png') }}" alt="Icon Urban Athletes"> 
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">Interior Design and Fit Out start</p>
                </div>
              </div>
            </div>
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/6.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">
                    Purchase of gym equipment
                  </p>
                  {{-- <p>proses Q&A.</p> --}}
                </div>
              </div>
            </div>
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/7.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">
                    Recruitment and training of staff
                  </p>
                </div>
              </div>
            </div>
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/8.png') }}" alt="Icon Urban Athletes">
                </div>
                <div class="p-4">
                  <p class="text-xl font-FuturaBold font-thin">
                    Presales and Grand Opening
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="lg:hidden relative pl-4 ml-4 mb-8 border-y-2 border-r-2 border-black w-4 min-h-max flex justify-center items-center">
            <p class="absolute -left-3 rotate-90 whitespace-nowrap font-FuturaBold">2 - 3 MONTH</p>
          </div>
        </div>
        
        {{-- <div class="flex justify-center lg:block mt-4 lg:mt-8 mb-8 ">
          <div class="relative hidden lg:block py-4 ml-11 border border-b-0 border-black">
            <p class="absolute -top-10 right-0 left-0 3ext-center whitespace-nowrap font-FuturaBold">2 - 3 MONTH</p>
          </div>
          <div class="lg:ml-12 min-w-[191px]">
            <div class="my-4 w-52 bg-black bg-gradient-to-bl from-neutral-700 via-transparent to-neutral-700 text-white lg:my-0 lg:mx-2">
              <div class="shadow-2xl min-h-max">
                <div class="w-20 h-8 bg-yellow-400 bg-gradient-to-l from-yellow-100 flex items-center"
                style="clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"
                >
                  <img class="h-6 pl-2 group-hover:invert" src="{{ url('image/franchise/iconsKemitraan/5.png') }}" alt="Icon Urban Athletes">
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
        </div> --}}
      </div>
    </div>
    
  </div>
</x-main_kemitraan>