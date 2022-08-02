<x-main_kemitraan menu='KEMITRAAN' subMenu="FITNESS WORKS">
  <div class="flex flex-col md:grid md:grid-cols-2 min-h-max" id="register">
    <div class="grid items-center mx-auto px-4 md:py-4">
      <h2 class="pb-4 font-FuturaBold text-2xl text-center">WHY INVEST IN FITNESS WORK ?</h2>
      <video class="object-cover" autoplay muted loop>
        <source src="{{ url('video/VideoBannerUA.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="grid content-center px-4 py-4 z-10 font-Futura tracking-widest">
      <form action="{{ url('ua') }}" method="post">
        @csrf
        <div class="flex justify-between">
          <h2 class="mx-2 text-3xl font-FuturaBold">INVESTMENT TODAY.</h2>
          <label for="year" class="border border-black py-2 px-4 font-FuturaBold hidden">
            <p>SELECT INVESTMENT</p>
            <select id="kode_inves" name="kode_inves" class="text-black ml-6 form-select inline max-w-max text-right outline-0 outline-none appearance-none w-full px-3 bg-clip-padding bg-no-repeatrounded transition ease-in-out m-0
              focus:outline-none" aria-label="Default select example" required>
                <option value="">Select</option>
                <option value="1">Urban Athletes</option>
                <option selected value="2">Fitness Works</option>
            </select>
          </label>
        </div>
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
            <span class="">JOB TITLE</span>
            <input name="job" type="text"
            value="{{ old('job') }}"
            placeholder="JOB TITLE"
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
            @error('job') error-input @enderror" required>
            @error('job')
              <div id="job" class="text-sm text-red-500">
                  {{ $message }}
              </div>
            @enderror
          </label>
          <label class="block mx-2 my-2 border-b w-full">
            <span class="">INDURSTRY</span>
            <input name="industry" type="text"
            value="{{ old('industry') }}"
            placeholder="INDURSTRY"
            class="mt-1 block w-full px-1 py-2 border border-gray-500 outline-none focus:ring-0 focus:border-black
            @error('industry') error-input @enderror" required>
            @error('industry')
              <div id="industry" class="text-sm text-red-500">
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
  
  <div class="px-5">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/1.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/2.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/3.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/4.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/5.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/6.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/7.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/8.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/9.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/10.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/11.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/12.jpg') }}" alt="FW Urban Athletes">
    <img class="w-full h-full" src="{{ url('image/franchise/fitness-works/13.jpg') }}" alt="FW Urban Athletes">
  </div>

  <div class="bg-[url('/image/franchise/Valor_bg_img_2-w.jpg')] bg-cover bg-centere text-center py-40">
    <h2 class="font-FuturaBold text-4xl mb-2 text-blue-800">JOIN US NOW</h2>
    <h2 class="font-FuturaBold text-2xl mb-4">BE ONE WITH THE VALOR.</h2>
    <div class="py-4">
      <a class="font-FuturaBold py-2 px-8 border border-zinc-800 hover:bg-zinc-800 hover:text-white transition-all duration-300" href="#register">REGISTER</a>
    </div>
  </div>

</x-main_kemitraan>