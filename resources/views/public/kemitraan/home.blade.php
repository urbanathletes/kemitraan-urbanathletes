<x-main_kemitraan menu='HOMEfranchise'>
  @push('script')
    @if (session('success'))
    <script>
      let success = document.querySelector('#alert');
      Swal.fire(
        'Thank you',
        success.getAttribute("data-pesan"),
        'success'
      )
    </script>
    @endif
  @endpush
  <div>
    @if (session('success'))
      <div class="hidden" id="alert" data-pesan="{{session('success')}}"></div>
    @endif
    <div class="flex flex-col md:grid md:grid-cols-2 min-h-max">
      <div class="flex justify-center md:justify-end md:max-w-[100%] relative h-72 md:h-[470px]">
        <img class="object-cover object-center h-full w-full" src="{{ url('image/franchise/home_franchise_benner.jpg') }}" alt="Franchise Urban Athletes">
        <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-t md:bg-gradient-to-l from-black"></div>
      </div>
      <div class="grid content-center bg-black text-white px-4 py-2 z-10 font-Futura">
        <form action="{{ url('franchise') }}" method="post">
          @csrf
          <div class="flex justify-between">
            <h2 class="mx-2 text-3xl font-FuturaBold">INVESTMENT TODAY.</h2>
            <label for="year" class="border border-black py-2 px-4 font-FuturaBold">
              <p>SELECT INVESTMENT</p>
              <select id="kode_inves" name="kode_inves" class="text-black ml-6 form-select inline max-w-max text-right outline-0 outline-none appearance-none w-full px-3 bg-clip-padding bg-no-repeatrounded transition ease-in-out m-0
                focus:outline-none" aria-label="Default select example" required>
                  <option value="">Select</option>
                  <option value="1">Urban Athletes</option>
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

    <div class="bg-[url('/image/franchise/Background_About_Us.jpg')] bg-cover bg-center text-white py-8">
      <div class="container">
        <h2 class="font-FuturaBold text-2xl border-l-4 border-yellow-primary px-4">
          LEADING WITH 18 YEARS EXPERIENCE <br>
          IN PROFESSIONAL FITNESS INDUSTRY
        </h2>
        <div class="
          text-white font-Futura font-bold py-8 tracking-widest leading-5
          flex flex-wrap justify-center
        ">

          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-yellow-primary text-black overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>01</p>
              </div>
              <p>Excellent product offering delivered across a broad range of site sizes</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-yellow-primary text-black overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>02</p>
              </div>
              <p>Great consumer value proposition : no contract and low price</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-yellow-primary text-black overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>03</p>
              </div>
              <p>Operating model combines strong revenue management and low labour costs</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-yellow-primary text-black overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>04</p>
              </div>
              <p>Superior technology and digital capabilities</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-yellow-primary text-black overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>05</p>
              </div>
              <p>Proven in delivering and deploying successful site selection and development</p>
            </div>
          </div>
          <div class="relative max-w-max my-4 px-2 font-extralight">
            <div class="pt-8 w-44 min-h-[180px] pl-10 pr-4 bg-yellow-primary text-black overflow-visible border-2 border-black outline-4 outline-offset-4 outline-blue-500" 
            style="clip-path: polygon(30% 0, 100% 0, 100% 70%, 70% 100%, 0 100%, 0 30%);">
              <div class="text-lg font-FuturaBold absolute top-1 right-4">
                <p>06</p>
              </div>
              <p>Excellent performance management and continuous improvement</p>
            </div>
          </div>

        </div>
      </div>
      <div class="lg:container">
        <div class="flex justify-center lg:max-h-screen overflow-hidden">
          <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
            <source src="{{ url('video/VideoBannerUA.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>

    <div class="flex justify-center overflow-hidden">
      <div class="flex justify-center min-w-max md:w-full">
        <img class="object-cover object-center mx-auto w-[768px] md:w-screen" src="{{ url('image/web/home/mobile-apps-urban-athletes.jpg') }}" alt="Mobile Apps Urban Athletes">
      </div>
    </div>

    <div class="container my-8">

      <h2 class="font-FuturaBold text-2xl border-l-4 border-yellow-primary px-4 my-4">
        OUR GEOGRAPHIES
      </h2>
      <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1BLfrcfUk0H2FggTjFXoI0RILoBbTR-o&ehbc=2E312F" width="100%" height="480"></iframe>
      <h2 class="font-FuturaBold text-2xl border-l-4 border-yellow-primary px-4 my-4">
        OUR BRAND
      </h2>
      {{-- <div class="flex justify-center flex-wrap"> --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 place-items-center pb-8">
        <div class="px-4 pt-6 min-h-[280px] bg-neutral-100 shadow-xl">
          <div class="min-h-[64px] flex items-center">
            <img class="w-16" src="{{ url('image/web/logo/LOGO_UA_HITAM_TM.png') }}" alt="Mitra Urban Athletes">
          </div>
          <h3 class="font-FuturaBold my-2">URBAN ATHLETES</h3>
          <p class="text-sm">Urban Athletes is a place for those who are inspired to live a healthy life with the right and fun methods. We believe sport is not just a lifestyle. But it is a means to become a better person. Bringing Impact and building people into their best versions.</p>
          <div class="text-center my-6 font-PoppinsSemiBold">
            <a class="py-2 px-6 border border-neutral-800 hover:bg-yellow-primary transition-all duration-300" href="{{ url('franchise/urban-athletes') }}">MORE</a>
          </div>
        </div>
        {{-- <div class="px-4 pt-6 bg-neutral-100 shadow-xl">
          <div class="min-h-[64px] flex items-center">
            <img class="w-16" src="{{ url('image/web/logo/URBAN-LOGO_JR_HIRES.png') }}" alt="Mitra Urban Athletes">
          </div>
          <h3 class="font-FuturaBold my-2">URBAN ATHLETES JUNIOR</h3>
          <p class="text-sm">Urban Athletes adalah tempat bagi mereka yang berinspirasi untuk hidup sehat dengan metode yang tepat dan fun. Kita percaya olahraga bukan hanya sekedar gaya hidup. Tapi adalah sarana untuk menjadi pribadi yang lebih baik. Membawa Dampak dan membangun manusia menjadi versi terbaiknya.</p>
          <div class="text-center my-6 font-PoppinsSemiBold">
            <a class="py-2 px-6 border border-neutral-800 hover:bg-yellow-primary transition-all duration-300" href="#">MORE</a>
          </div>
        </div> --}}
        <div class="px-4 pt-6 min-h-[280px] bg-neutral-100 shadow-xl">
          <div class="min-h-[64px] flex items-center">
            <img class="h-10" src="{{ url('image/web/logo/LogoFitnessworkPanjang.png') }}" alt="Mitra Urban Athletes">
          </div>
          <h3 class="font-FuturaBold my-2">FITNESS WORKS</h3>
          <p class="text-sm">Fitnessworks ia a new concept in smart gym with high value, low investment and faster return of investment. Fitnessworks provides premium club facility with complete weight training, cardio, certified Personal Trainer. various group exercise classes, and technology-driven member management system app.</p>
          <div class="text-center my-6 font-PoppinsSemiBold">
            <a class="py-2 px-6 border border-neutral-800 hover:bg-yellow-primary transition-all duration-300" href="{{ url('franchise/fitness-works') }}">MORE</a>
          </div>
        </div>
        {{-- <div class="px-4 pt-6 bg-neutral-100 shadow-xl">
          <div class="min-h-[64px] flex items-center">
            <img class="w-16" src="{{ url('image/web/logo/Valor_TM.png') }}" alt="Mitra Urban Athletes">
          </div>
          <h3 class="font-FuturaBold my-2">VALOR</h3>
          <p class="text-sm">Urban Athletes adalah tempat bagi mereka yang berinspirasi untuk hidup sehat dengan metode yang tepat dan fun. Kita percaya olahraga bukan hanya sekedar gaya hidup. Tapi adalah sarana untuk menjadi pribadi yang lebih baik. Membawa Dampak dan membangun manusia menjadi versi terbaiknya.</p>
          <div class="text-center my-6 font-PoppinsSemiBold">
            <a class="py-2 px-6 border border-neutral-800 hover:bg-yellow-primary transition-all duration-300" href="#">MORE</a>
          </div>
        </div> --}}
      </div>
    </div>

  </div>
</x-main_kemitraan>