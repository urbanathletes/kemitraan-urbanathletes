<x-main_web_loading>
  {{-- <div class="relative" id="loading-target">
    <div class="fixed top-0 bottom-0 left-0 right-0 min-h-screen min-w-full flex justify-center items-center bg-black bg-opacity-80 z-10">
      <img src="{{ url('image/web/LoadingWeb.gif') }}" alt="Loading Urban Athletes">
    </div>
  </div> --}}
  <div class="relative">
    {{-- <video autoplay loop src="{{ url('video/Fithub-Vid-Banner-dex-small.mp4') }}"></video> --}}
    <div class="flex justify-center lg:max-h-screen overflow-hidden">
      <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
        <source src="{{ url('video/VideoBannerUA.mp4') }}" type="video/mp4">
      </video>
    </div>
  </div>
  <div class="py-4">
    <div class="flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar xl:justify-between lg:space-x-36 lg:px-16">

      <div class="flex justify-center min-w-full xl:px-0">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-[100%] lg:grid lg:grid-cols-2">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <img class="h-72 md:h-96" src="{{ url('image/web/home/Image-Poster-1.png') }}" alt="Poster Urban Athletes">
          </div>
          <div class="grid content-center pl-4">
            <h2 class="font-FuturaBold text-xl">YOUR TRANSFORMATION IS ONE CLICK AWAY</h2>
            <span class="my-2">
              <a class="bg-yellow-primary py-1 px-4 font-PoppinsSemiBold" href="https://api.whatsapp.com/send?phone=628179188880&text=*3%20DAY%20TRIAL*%0AHi!%0AThank%20you%20for%20your%20interest%20in%20Urban%20Athletes%0APlease%20leave%20your%20contact%20details%20below%20and%20we%20will%20be%20in%20touch%20shortly%3A%0A%0A%E2%96%ABFull%20Name%3A%0A%E2%96%ABE-mail%3A%0A%E2%96%ABLocation%20of%203%20Day%20Trial%3A%20(Gunawangsa%20Merr%2F%20Marvell%20City%2F%20Gunawangsa%20Tidar%2FLenmarc)">GET FREE TRIAL</a>
            </span>
            <P>3-day trial, get rid of all your excuses, change now or never! <br>Make a better version of you with Urban Athletes. <br>#buildingabetteryou</P>
          </div>
        </div>
      </div>
      {{-- <div class="flex justify-center min-w-full xl:min-w-max xl:px-0"> --}}
      <div class="flex justify-center min-w-full ">
        <div class="flex flex-col md:grid md:grid-cols-2 w-screen">
          <div class="grid content-center bg-black text-white px-4 py-4">
            <h2 class="font-FuturaBold text-xl">YOUR TRANSFORMATION IS ONE CLICK AWAY</h2>
            <span class="my-2">
              <a class="bg-yellow-primary py-1 px-4 font-PoppinsSemiBold" href="https://api.whatsapp.com/send?phone=628179188880&text=*3%20DAY%20TRIAL*%0AHi!%0AThank%20you%20for%20your%20interest%20in%20Urban%20Athletes%0APlease%20leave%20your%20contact%20details%20below%20and%20we%20will%20be%20in%20touch%20shortly%3A%0A%0A%E2%96%ABFull%20Name%3A%0A%E2%96%ABE-mail%3A%0A%E2%96%ABLocation%20of%203%20Day%20Trial%3A%20(Gunawangsa%20Merr%2F%20Marvell%20City%2F%20Gunawangsa%20Tidar%2FLenmarc)">GET FREE TRIAL</a>
            </span>
            <P>3-day trial, get rid of all your excuses, change now or never! Make a better version of you with Urban Athletes. #buildingabetteryou</P>
          </div>
          <div class="flex justify-center md:justify-center relative overflow-hidden">
            {{-- <img class="object-cover object-top w-full" src="{{ url('image/web/home/Challange.jpg') }}" alt="Poster Urban Athletes"> --}}
            <img class="object-cover object-top" src="{{ url('image/web/home/Challange.jpg') }}" alt="Poster Urban Athletes">
            <div class="absolute top-0 right-0 left-0 bottom-0 bg-gradient-to-b md:bg-gradient-to-r from-black"></div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="bg-[url('/image/web/bg_page/BGAboutUsDeskripsi.jpg')] object-contain object-center relative overflow-hidden
    flex flex-col lg:flex-row lg:justify-center lg:items-center
  ">
    <div class="absolute top-0 bottom-0 right-0 left-0 bg-black opacity-80">
    </div>
    <div class="container my-4 lg:mx-0 text-yellow-primary lg:max-w-xl z-10">
      <h2 class="text-4xl font-FuturaBold">ABOUT US</h2>
      <p class="text-white font-extralight mt-2 mb-4">
        Urban Athletes adalah tempat bagi mereka yang berinspirasi untuk hidup sehat dengan metode yang tepat dan fun. Kita percaya olahraga bukan hanya sekedar gaya hidup. Tapi adalah sarana untuk menjadi pribadi yang lebih baik. Membawa Dampak dan membangun manusia menjadi versi terbaiknya.
      </p>
      <div class="py-2">
        <a class="py-2 px-4 font-PoppinsSemiBold border border-yellow-primary hover:bg-yellow-primary hover:text-black transition-all duration-300" href="{{ url('about/about-us') }}">CARI TAHU LEBIH LANJUT</a>
      </div>
    </div>
    <div class="grid grid-cols-2 gap-4 container lg:mx-0 py-6 lg:max-w-xl z-10">
      <img class="pb-12 lg:pb-16 object-cover object-top mx-auto h-full" src="{{ url('image/web/home/Home_about_us-l.jpg') }}" alt="About us Urban Athletes">
      <img class="pt-12 lg:pt-16 object-cover object-top mx-auto" src="{{ url('image/web/home/About-Us-l.jpg') }}" alt="About us Urban Athletes">
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

            <div class="cursor-pointer min-w-max group">
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/1BodyPump.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">01</span>
                <p>BODY COMBAT</p>
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">02</span>
                <p>MUAY THAI</p>
              </div>
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/2MuayThai.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/3Trx.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">03</span>
                <p>TRX CLASESS</p>
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">04</span>
                <p>YOGA & PILATES</p>
              </div>
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/4Flexibility.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/fotokelas/Fly_High_Yoga.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">05</span>
                <p class="uppercase">fly high yoga</p>
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">06</span>
                <p>FALCON</p>
              </div>
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/6Falcon.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-bottom mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/7BodyCombat.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">07</span>
                <p class="uppercase">Body Combat</p>
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">08</span>
                <p>CIRCUIT</p>
              </div>
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/8Circuit.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-bottom mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/11Zumba.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">09</span>
                <p class="uppercase">ZUMBA</p>
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">10</span>
                <p>VALOR</p>
              </div>
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-center mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/10VALOR.JPG') }}" alt="Exclusive Urban Athletes">
              </div>
            </div>
            <div class="cursor-pointer min-w-max group">
              <div class="w-72 h-72 flex justify-center overflow-hidden">
                <img class="w-full object-cover object-bottom mx-auto group-hover:scale-110 transition-all duration-300" src="{{ url('image/web/home/9KidsGym.jpg') }}" alt="Exclusive Urban Athletes">
              </div>
              <div class="font-FuturaBold p-2 text-2xl
                group-hover:bg-yellow-primary group-hover:text-black transition-all duration-300
              ">
                <span class="text-5xl">11</span>
                <p class="uppercase">Kids Gym</p>
              </div>
            </div>
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

  <div class="py-8">
    <div class="flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar xl:justify-between lg:space-x-20 lg:px-36">

      <div class="flex justify-center min-w-full md:min-w-full xl:min-w-max">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-3xl lg:max-w-4xl">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <div class="min-w-max relative">
              <img class="h-96" src="{{ url('image/web/succes-story/foto-1.jpg') }}" alt="Poster Urban Athletes">
              <div class="absolute top-0 -right-8 bottom-0 flex items-center">
                <img class="bg-neutral-800 p-2 w-16" src="{{ url('image/web/home/Mask-Group_21.svg') }}" alt="Success story Urban Athletes">
              </div>
            </div>
          </div>
          <div class="grid content-center md:w-max px-4 my-4 md:pr-0 md:pl-16">
            <p class="font-black">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <P class="text-center">“Setelah mengambil program Personal Trainer saya meraskaan perubahan yaitu badan lebih fit, ringan, tidak mudah capek, makan lebih teratur sampai-2 saya harus cek berapa kalori yang saya makan. Berat badan pasti turun karna latihan yang cukup keras dan rutin, karna latihan dengan Personal Trainer kita akan merasakan capek dan hasil 2x lipat.”</P>
            <p class="text-center py-4 font-black"><span>Natalia Arishandi</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="flex justify-center min-w-full md:min-w-full xl:min-w-max md:pl-56 xl:p-0 ">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-3xl lg:max-w-4xl">
          <div class="flex justify-center md:justify-end md:min-w-max">
            <div class="min-w-max relative">
              <img class="h-96" src="{{ url('image/web/succes-story/foto-3.jpg') }}" alt="Poster Urban Athletes">
              <div class="absolute top-0 -right-8 bottom-0 flex items-center">
                <img class="bg-neutral-800 p-2 w-16" src="{{ url('image/web/home/Mask-Group_21.svg') }}" alt="Success story Urban Athletes">
              </div>
            </div>
          </div>
          <div class="grid content-center md:w-max px-4 my-4 md:pr-0 md:pl-16">
            <p class="font-black">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <P class="text-center">“Sebelum mengambil program fitness, berbagai macam metode diet telah saya lakukan untuk menurunkan berat badan dan tidak ada yang berhasil mencapai berat badan yang diinginkan. Saat ambil program fitness, saya mendapatkan 2x free dengan Personal Trainer dengan Ma Fuazi. Akhirnya saya memutuskan lanjut mengambil program Personal Trainer karna saya cocok dengan gaya dan ....”</P>
            <p class="text-center py-4 font-black"><span>Benny</span> - Surabaya</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  {{-- <div class="container text-center py-8 mt-6">
    <h2 class="font-FuturaBold text-4xl">SUCCESS STORY</h2>
    <p class="text-xl font-FuturaBold">WHAT OUR CLIENT SAY</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 overflow-hidden py-4">
      <div class="flex justify-center items-center relative">
        <video class="object-cover object-right h-full min-w-min lg:min-w-full" autoplay muted loop>
          <source src="{{ url('video/Testimoni1.mp4') }}" type="video/mp4">
        </video>
      </div>
      <div class="grid grid-cols-1 gap-4">
        <div class="flex justify-center items-center relative h-56 lg:h-72 overflow-hidden">
          <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
            <source src="{{ url('video/Testimoni3.mp4') }}" type="video/mp4">
          </video>
        </div>
        <div class="flex justify-center items-center relative h-56 lg:h-72 overflow-hidden">
          <video class="object-cover object-right min-w-min lg:min-w-full" autoplay muted loop>
            <source src="{{ url('video/Testimoni4.mp4') }}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="container text-center pb-8">
    <h2 class="font-FuturaBold text-4xl">ARTICLE UPDATE</h2>
    <p>Eksplor hal-hal baru mengenai kesehatan dan kebugaran.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 overflow-hidden py-4">
      <div class="flex justify-center items-center relative">
        <a class="h-full" href="{{ url('news/news5') }}">
          <img class="h-full w-full object-cover object-center" src="{{ url('image/web/news/circuit.jpg') }}" alt="Urban Athletes">
          <div class="absolute top-0 right-0 bg-black bg-opacity-50 py-1 px-4 m-4">
            <p class="text-yellow-primary">Article</p>
          </div>
          <div class="absolute bottom-0 top-0 right-0 left-0 text-left bg-gradient-to-t from-black bg-opacity-90">
            <div class="h-fit px-4 pb-6 absolute bottom-0 right-0 left-0 max-w-lg">
              <p class="font-PoppinsSemiBold text-xl text-white">Berganti Nama, Urban Athletes Targetkan Buka Lima Cabang di Surabaya</p>
              <p class="text-yellow-primary text-sm">suarakawan.com</p>
            </div>
          </div>
        </a>
      </div>
      <div class="grid grid-cols-1 gap-4">
        <div class="flex justify-center items-center relative h-56 lg:h-72 overflow-hidden">
          <a class="h-full" href="{{ url('news/news6') }}">
            <img class="w-full object-cover object-center" src="{{ url('image/web/news/ekonomi3.jpg') }}" alt="Urban Athletes">
            <div class="absolute top-0 right-0 bg-black bg-opacity-50 py-1 px-4 m-4">
              <p class="text-yellow-primary">Article</p>
            </div>
            <div class="absolute bottom-0 top-0 right-0 left-0 text-left bg-gradient-to-t from-black bg-opacity-90">
              <div class="h-fit px-4 pb-6 absolute bottom-0 right-0 left-0 max-w-lg">
                <p class="font-PoppinsSemiBold text-xl text-white">Verawaty Budiyanto, Pendiri Urban Athletes: Membuat Orang Ketagihan Hidup Sehat</p>
                <p class="text-yellow-primary text-sm">Menorandum.id</p>
              </div>
            </div>
          </a>
        </div>
        <div class="flex justify-center items-center relative h-56 lg:h-72 overflow-hidden">
          <a class="h-full" href="{{ url('news/news3') }}">
            <img class="w-full object-cover object-center"  src="{{ url('image/web/news/brt247716752.jpg') }}" alt="Urban Athletes">
            <div class="absolute top-0 right-0 bg-black bg-opacity-50 py-1 px-4 m-4">
              <p class="text-yellow-primary">Article</p>
            </div>
            <div class="absolute bottom-0 top-0 right-0 left-0 text-left bg-gradient-to-t from-black bg-opacity-90">
              <div class="h-fit px-4 pb-6 absolute bottom-0 right-0 left-0 max-w-lg">
                <p class="font-PoppinsSemiBold text-xl text-white">Urban Athletes Akan Buka 5 Cabang Lagi Tahun Depan</p>
                <p class="text-yellow-primary text-sm">beritajatim.com</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container px-4">
    <div class="bg-[url('/image/web/home/BackgroundUAAcademy.png')] bg-cover bg-center grid grid-cols-1 md:grid-cols-3 md:gap-8 place-items-center px-4 py-8 relative">
      <div class="absolute top-0 bottom-0 left-0 right-0 bg-black/80"></div>
      <div class="pb-8 md:pb-0 max-h-max xl:h-44 flex justify-center items-center rounded-md overflow-hidden z-10">
        <img class="w-full h-full aspect-video object-cover object-top" src="{{ url('image/web/UaAcademy.jpg') }}" alt="Urban Athletes">
      </div>
      <div class="col-span-2 px-4 py-4 flex items-center z-10">
        <div class="flex flex-col space-y-4">
          <h2 class="text-white font-FuturaBold">JOIN URBAN ATHLETES ACADEMY,<br> DAPATAKAN BANYAK KEMUDAHAN DAN BENEFIT SEGERA!!</h2>
          <span class="my-2">
            {{-- <a class="bg-yellow-500 py-1 px-4 font-PoppinsSemiBold drop-shadow-md shadow-black" href="https://api.whatsapp.com/send?phone=628179188880&text=*3%20DAY%20TRIAL*%0AHi!%0AThank%20you%20for%20your%20interest%20in%20Urban%20Athletes%0APlease%20leave%20your%20contact%20details%20below%20and%20we%20will%20be%20in%20touch%20shortly%3A%0A%0A%E2%96%ABFull%20Name%3A%0A%E2%96%ABE-mail%3A%0A%E2%96%ABLocation%20of%203%20Day%20Trial%3A%20(Gunawangsa%20Merr%2F%20Marvell%20City%2F%20Gunawangsa%20Tidar%2FLenmarc)">GET FREE TRIAL</a> --}}
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
      <img class="h-20 m-4" src="{{ url('image/web/logo/URBAN-LOGO_JR_HIRES.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/URBAN-FALCON FINAL-TM.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo/Valor_TM.png') }}" alt="Mitra Urban Athletes">
      {{-- <img class="h-20 m-4" src="{{ url('image/web/logo/urbanfit.png') }}" alt="Mitra Urban Athletes"> --}}
      {{-- <img class="h-20 m-4" src="{{ url('image/web/logo/fitness_work-02.png') }}" alt="Mitra Urban Athletes"> --}}
      <img class="m-4 max-w-xs" src="{{ url('image/web/logo/LogoFitnessworkPanjang.png') }}" alt="Mitra Urban Athletes">
      <img class="h-20 m-4" src="{{ url('image/web/logo_kelas/CIRCUIT.png') }}" alt="Mitra Urban Athletes">
    </div>
  </div>
{{--   
  <div class="container">
    
  </div>

  <div class="min-h-screen">

    <h1>ini halaman web</h1>
  </div> --}}
  @push('style')
    <meta name="facebook-domain-verification" content="a0dt3ukj4j8vy6cec4h2x5r4s83mg7" />
  @endpush
</x-main_web_loading>