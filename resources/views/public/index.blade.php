<x-main_web>
  <div class="relative">
    {{-- <video autoplay loop src="{{ url('video/Fithub-Vid-Banner-dex-small.mp4') }}"></video> --}}
    <div class="flex justify-center lg:max-h-screen overflow-hidden">
      <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
        <source src="{{ url('video/Fithub-Vid-Banner-dex-small.mp4') }}" type="video/mp4">
      </video>
    </div>
  </div>
  <div class="py-4">
    <div class="flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar xl:justify-between lg:space-x-36 lg:px-36">

      <div class="flex justify-center min-w-full md:min-w-full xl:min-w-max xl:px-36">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-xl">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <img class="h-72" src="{{ url('image/web/home/Image-Poster-1.png') }}" alt="Poster Urban Athletes">
          </div>
          <div class="grid content-center md:w-max px-4">
            <h2 class="font-FuturaBold text-xl">YOUR TRANSFORMATION IS ONE CLICK AWAY</h2>
            <span class="my-2">
              <a class="bg-yellow-primary py-1 px-4 font-PoppinsSemiBold" href="#">GET FREE TRIAL</a>
            </span>
            <P>3-day trial, get rid of all your excuses, change now or never! Make a better version of you with Urban Athletes. #buildingabetteryou</P>
          </div>
        </div>
      </div>
      <div class="flex justify-center min-w-full xl:min-w-max xl:px-36">
        <div class="flex flex-col md:grid md:grid-cols-2 lg:max-w-xl">
          <div class="grid content-center bg-black text-white px-4 py-4">
            <h2 class="font-FuturaBold text-xl">YOUR TRANSFORMATION IS ONE CLICK AWAY</h2>
            <span class="my-2">
              <a class="bg-yellow-primary py-1 px-4 font-PoppinsSemiBold" href="#">GET FREE TRIAL</a>
            </span>
            <P>3-day trial, get rid of all your excuses, change now or never! Make a better version of you with Urban Athletes. #buildingabetteryou</P>
          </div>
          <div class="flex justify-center md:justify-end md:min-w-max relative h-72">
            <img class="object-cover object-top" src="{{ url('image/web/home/Challange.jpg') }}" alt="Poster Urban Athletes">
            <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-b md:bg-gradient-to-r from-black"></div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="bg-black bg-gradient-to-tr from-neutral-300 via-neutral-700 py-8
    lg:flex lg:justify-center lg:items-center
  ">
    <div class="container lg:mx-0 text-yellow-primary lg:max-w-xl">
      <h2 class="text-4xl font-FuturaBold">ABOUT US</h2>
      <p class="text-white font-extralight mt-2 mb-4">
        Urban Athletes adalah tempat bagi mereka yang berinspirasi untuk hidup sehat dengan metode yang tepat dan fun. Kita percaya olahraga bukan hanya sekedar gaya hidup. Tapi adalah sarana untuk menjadi pribadi yang lebih baik. Membawa Dampak dan membangun manusia menjadi versi terbaiknya.
      </p>
      <div class="py-2">
        <a class="py-2 px-4 font-PoppinsSemiBold border border-yellow-primary hover:bg-yellow-primary hover:text-black transition-all duration-300" href="#">CARI TAHU LEBIH LANJUT</a>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-4 container lg:mx-0 py-6 lg:max-w-xl">
      <img class="pb-12 lg:pb-16 object-cover object-top mx-auto" src="{{ url('image/web/home/About-Us-l.jpg') }}" alt="About us Urban Athletes">
      <img class="pt-12 lg:pt-16 object-cover object-top mx-auto" src="{{ url('image/web/home/About-Us-r.jpg') }}" alt="About us Urban Athletes">
    </div>
  </div>

  <div class="relative">
    <div class="bg-[url('/image/web/home/Background_Kelas.jpg')] bg-cover bg-center py-8 overflow-hidden overflow-x-auto no-scrollbar">
      <div class="container font-Futura text-yellow-primary text-3xl">
        <div class="md:px-8">
          <div class="font-FuturaBold absolute">
            <h2>EXCLUSIVE WORKOUT</h2>
            <h2>URBAN ATHLETES</h2>
          </div>
          <div class="pb-8 pt-24 flex flex-nowrap space-x-6">

            <a class="min-w-max group" href="#">
              <div class="w-48 h-48 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/Exclusive_Bodycombat.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-4xl">01</span>
                <p>BODY COMBAT</p>
              </div>
            </a>
            <a class="min-w-max group" href="#">
              <div class="font-FuturaBold p-2 text-xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-4xl">02</span>
                <p>MUAY THAI</p>
              </div>
              <div class="w-48 h-48 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/Exclusive_Muaythai.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </a>
            <a class="min-w-max group" href="#">
              <div class="w-48 h-48 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/Challange.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-4xl">03</span>
                <p>TRX CLASESS</p>
              </div>
            </a>
            <a class="min-w-max group" href="#">
              <div class="font-FuturaBold p-2 text-xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-4xl">04</span>
                <p>YOGA & PILATES</p>
              </div>
              <div class="w-48 h-48 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/Exclusive_Yoga-n-pilates.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </a>
            <a class="min-w-max group" href="#">
              <div class="w-48 h-48 flex justify-center overflow-hidden">
                <img class="object-cover object-bottom w-full mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/Exclusive_Yoga-wheel.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-4xl">05</span>
                <p>YOGA WHEEL</p>
              </div>
            </a>
            <a class="min-w-max group" href="#">
              <div class="font-FuturaBold p-2 text-xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-4xl">06</span>
                <p>FALCON</p>
              </div>
              <div class="w-48 h-48 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/Exclusive_Falcon.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </a>
            <div class="px-4 md:px-8"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="flex justify-center overflow-hidden">
    <div class="flex justify-center min-w-max md:w-full">
      <img class="object-cover object-center mx-auto w-[768px] md:w-screen" src="{{ url('image/web/home/mobile-apps-urban-athletes.jpg') }}" alt="Mobile Apps Urban Athletes">
    </div>
  </div>

  <div class="py-4">
    <div class="flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar xl:justify-between lg:space-x-20 lg:px-36">

      <div class="flex justify-center min-w-full md:min-w-full xl:min-w-max">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-3xl lg:max-w-4xl">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <div class="min-w-max relative bg-blue-800">
              <img class="h-96" src="{{ url('image/web/home/Image-Poster-1.png') }}" alt="Poster Urban Athletes">
              <div class="absolute top-0 -right-8 bottom-0 flex items-center">
                <img class="bg-neutral-800 p-2 w-16" src="{{ url('image/web/home/Mask-Group_21.svg') }}" alt="Success story Urban Athletes">
              </div>
            </div>
          </div>
          <div class="grid content-center md:w-max px-4 md:pr-0 md:pl-16">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="flex justify-center min-w-full md:min-w-full xl:min-w-max md:pl-56 xl:p-0 ">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-3xl lg:max-w-4xl">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <div class="min-w-max relative bg-blue-800">
              <img class="h-96" src="{{ url('image/web/home/Image-Poster-1.png') }}" alt="Poster Urban Athletes">
              <div class="absolute top-0 -right-8 bottom-0 flex items-center">
                <img class="bg-neutral-800 p-2 w-16" src="{{ url('image/web/home/Mask-Group_21.svg') }}" alt="Success story Urban Athletes">
              </div>
            </div>
          </div>
          <div class="grid content-center md:w-max px-4 md:pr-0 md:pl-16">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      {{-- <div class="flex justify-center min-w-full md:min-w-full xl:min-w-max">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-2xl">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <div class="min-w-max relative bg-blue-800">
              <img class="h-72" src="{{ url('image/web/home/Image-Poster-1.png') }}" alt="Poster Urban Athletes">
              <div class="absolute top-0 -right-8 bottom-0 flex items-center">
                <img class="bg-neutral-800 p-2 w-16" src="{{ url('image/web/home/Mask-Group_21.svg') }}" alt="Success story Urban Athletes">
              </div>
            </div>
          </div>
          <div class="grid content-center md:w-max px-4 md:pr-0 md:pl-12">
            <h2 class="font-FuturaBold text-xl">YOUR TRANSFORMATION IS ONE CLICK AWAY</h2>
            <span class="my-2">
              <a class="bg-yellow-primary py-1 px-4 font-PoppinsSemiBold" href="#">GET FREE TRIAL</a>
            </span>
            <P>3-day trial, get rid of all your excuses, change now or never! Make a better version of you with Urban Athletes. #buildingabetteryou</P>
          </div>
        </div>
      </div> --}}

    </div>
  </div>

  <div class="container text-center py-8">
    <h2 class="font-FuturaBold text-2xl">ARTICLE UPDATE</h2>
    <p>Eksplor hal-hal baru mengenai kesehatan dan kebugaran.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 overflow-hidden py-4">
      <div class="flex justify-center items-center relative">
        <img class="object-cover object-center h-full" src="{{ url('image/web/example/example-1x1.jpg') }}" alt="Urban Athletes">
        <div class="absolute top-0 left-0 bg-black bg-opacity-50 p-2 m-4">
          <p class="font-PoppinsSemiBold text-lg text-white">12</p>
          <p class="text-yellow-primary">APR '12</p>
        </div>
        <div class="absolute top-0 right-0 bg-black bg-opacity-50 py-1 px-4 m-4">
          <p class="text-yellow-primary">TIPS & TRICK</p>
        </div>
        <div class="absolute bottom-0 top-0 right-0 left-0 text-left bg-gradient-to-t from-black bg-opacity-90">
          <div class="h-fit px-4 pb-6 absolute bottom-0 right-0 left-0">
            <p class="font-PoppinsSemiBold text-lg text-white">GIVE YOUR FITNESS A BOOST</p>
            <p class="text-yellow-primary text-sm">TIPS & TRICK</p>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-4">
        <div class="flex justify-center items-center relative">
          <img src="{{ url('image/web/example/example-2x1.jpg') }}" alt="Urban Athletes">
          <div class="absolute top-0 left-0 bg-black bg-opacity-50 p-2 m-4">
            <p class="font-PoppinsSemiBold text-lg text-white">12</p>
            <p class="text-yellow-primary">APR '12</p>
          </div>
          <div class="absolute top-0 right-0 bg-black bg-opacity-50 py-1 px-4 m-4">
            <p class="text-yellow-primary">BUSSINESS</p>
          </div>
          <div class="absolute bottom-0 top-0 right-0 left-0 text-left bg-gradient-to-t from-black bg-opacity-90">
            <div class="h-fit px-4 pb-6 absolute bottom-0 right-0 left-0">
              <p class="font-PoppinsSemiBold text-lg text-white">GIVE YOUR FITNESS A BOOST</p>
              <p class="text-yellow-primary text-sm">TIPS & TRICK</p>
            </div>
          </div>
        </div>
        <div class="flex justify-center items-center relative">
          <img src="{{ url('image/web/example/example-2x1.jpg') }}" alt="Urban Athletes">
          <div class="absolute top-0 left-0 bg-black bg-opacity-50 p-2 m-4">
            <p class="font-PoppinsSemiBold text-lg text-white">12</p>
            <p class="text-yellow-primary">APR '12</p>
          </div>
          <div class="absolute top-0 right-0 bg-black bg-opacity-50 py-1 px-4 m-4">
            <p class="text-yellow-primary">BUSSINESS</p>
          </div>
          <div class="absolute bottom-0 top-0 right-0 left-0 text-left bg-gradient-to-t from-black bg-opacity-90">
            <div class="h-fit px-4 pb-6 absolute bottom-0 right-0 left-0">
              <p class="font-PoppinsSemiBold text-lg text-white">GIVE YOUR FITNESS A BOOST</p>
              <p class="text-yellow-primary text-sm">TIPS & TRICK</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-8 place-items-center bg-yellow-primary p-4 bg-gradient-to-tr from-neutral-700">
      <div class="pb-8 md:pb-0">
        <img class="rounded-md" src="{{ url('image/web/example/example-2x1.jpg') }}" alt="Urban Athletes">
      </div>
      <div class="col-span-2 px-4 flex items-center">
        <div class="flex flex-col space-y-4">
          <h2 class="text-white font-FuturaBold">JOIN URBAN ATHLETES ACADEMY,<br> DAPATAKAN BANYAK KEMUDAHAN DAN BENEFIT SEGERA!!</h2>
          <span class="my-2">
            <a class="bg-yellow-500 py-1 px-4 font-PoppinsSemiBold drop-shadow-md shadow-black" href="#">GET FREE TRIAL</a>
          </span>
        </div>
      </div>
    </div>

    <div class="relative max-w-max mx-auto">
      <h2 class="text-center text-3xl font-FuturaBold mt-12 text-[#0F1123]">ENTERPRISE</h2>
      <span class="absolute right-0 -bottom-2 w-1/2 py-1 bg-yellow-primary"></span>
    </div>
    <div class="flex flex-wrap justify-around items-center py-4 lg:px-10">
      <img class="h-20 m-4" src="{{ url('image/web/logo/LOGO_UA_HITAM_TM.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/URBAN-FALCON FINAL-TM.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/Valor_TM.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/urbanfit.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/fitness_work-02.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/URBAN-LOGOCIRCUIT.png') }}" alt="Mitra Urban Athletes">
    </div>
  </div>
{{--   
  <div class="container">
    
  </div>

  <div class="min-h-screen">

    <h1>ini halaman web</h1>
  </div> --}}
</x-main_web>