<x-main menu='WHY URBAN ATHLETES' subMenu='ABOUT US'>
  @push('style')   
    @stack('style')
  @endpush
  
  <div>
    <img src="{{ url('/image/about_us/urban-athletes-about-us-banner.jpg') }}" alt="Urban Athletes About US">
  </div>
  <div class="bg-[url('/image/about_us/urban-athletes-about-us-bg.jpg')] bg-cover bg-center px-4 py-4
    {{-- md:flex md:justify-center md:items-center --}}
    md:grid md:grid-cols-2 md:px-8 lg:px-24
  ">
    <div class="md:flex md:justify-center md:items-center md:min-h-max md:px-8 md:mx-8">
      <h1 class="text-3xl md:text-5xl pl-4 pr-16 md:pr-0 leading-normal md:leading-relaxed">LEADING WITH 17 YEARS EXPERIENCE IN PROFESSIONAL FITNESS INDUSTRY</h1>
    </div>
    <div class="text-white py-6">
      <div class="flex items-center bg-neutral-800 rounded-full py-6 px-4 my-4 mx-4">
        <h1 class="text-4xl px-2 mr-4">01</h1>
        <p class="text-sm font-sans-serif">4 Gym Concept (Based on SWOT Analysis)</p>
      </div>
      <div class="flex items-center bg-neutral-800 rounded-full py-6 px-4 my-4 mx-4">
        <h1 class="text-4xl px-2 mr-4">02</h1>
        <p class="text-sm font-sans-serif">Urban Athletes Academy Integrated Coaching, Training & Certification</p>
      </div>
      <div class="flex items-center bg-neutral-800 rounded-full py-6 px-4 my-4 mx-4">
        <h1 class="text-4xl px-2 mr-4">03</h1>
        <p class="text-sm font-sans-serif">Customized Integrated Operational Gym Software and mobile apps (realtime revenue report)</p>
      </div>
      <div class="flex items-center bg-neutral-800 rounded-full py-6 px-4 my-4 mx-4">
        <h1 class="text-4xl px-2 mr-4">04</h1>
        <p class="text-sm font-sans-serif">All Club Access Membership</p>
      </div>
      <div class="flex items-center bg-neutral-800 rounded-full py-6 px-4 my-4 mx-4">
        <h1 class="text-4xl px-2 mr-4">05</h1>
        <p class="text-sm font-sans-serif">Hustle Free Investment, Realtime Online Revenue Report</p>
      </div>
    </div>
  </div>
  <div class="bg-[url('/image/about_us/A-Z-Gym-Management-bg.jpg')] bg-cover bg-center px-8 py-8
    md:grid md:grid-cols-2
  ">
    <div class="flex justify-center items-center min-h-max">
      <img src="{{ url('/image/about_us/A-Z-Gym-Management.png') }}" alt="Urban Athletes About US">
    </div>
    <div class="ml-4 my-4 text-white">
      <div class="my-4">
        <h4 class="text-xl font-extrabold">SDM</h4>
        <p>Penyediaan & Training SDM</p>
      </div>
      <div class="my-4">
        <h4 class="text-xl font-extrabold">OPERASIONAL</h4>
        <p>Pengelolaan dan kontrol operasional dengan standard Mega Gym Internasional menggunakan software khusus yang online dan realtime</p>
      </div>
      <div class="my-4">
        <h4 class="text-xl font-extrabold">MARKETING</h4>
        <p>CRM Bekerja Sama dengan Partner Nasional Marketing Terintegrasi & GEO Marketing</p>
      </div>
      <div class="my-4">
        <h4 class="text-xl font-extrabold">KONTRUKSI</h4>
        <p>Interior Design, Fit Out Management and Equipment Supply</p>
      </div>
      <div class="my-4">
        <h4 class="text-xl font-extrabold">FINANCE</h4>
        <p>EBITDA Report, Purchasing, Laporan</p>
      </div>
    </div>
  </div>
  <div class="md:container md:my-8">
    <div class="text-center px-8 md:px-16 md:mx-16">
      <h1 class="py-4 text-2xl md:text-3xl font-FuturaBold">GALLERY</h1>
      <p>
        Inilah potret dari fasilitas, kegiatan kelas, hingga spot dengan latar belakang yang kekinian. Hal ini bertujuan untuk menunjang peningkatan kenyamanan dan kepercayaan diri terhadap perubahan gaya hidup yang lebih baik bersama Urban Athletes.
      </p>
    </div>
    <div class="my-8">
      <x-card_slider>
        {{-- Merr --}}
        <img src="{{url('/image/about_us/gallery-1.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-2.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-3.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-4.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-5.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-6.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-7.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-8.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-9.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-10.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-11.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-12.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-13.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-14.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-15.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-16.jpg')}}" alt="Class Urban" class="card object-cover object-center">
        <img src="{{url('/image/about_us/gallery-17.jpg')}}" alt="Class Urban" class="card object-cover object-center">
      </x-card_slider>
    </div>
  </div>
  <div class="container my-8 md:my-16 text-center">
    <div class="font-FuturaBold border-t border-black mx-8 py-8">
      <h1 class="text-2xl md:text-5xl">NEWS</h1>
    </div>
    <div class="font-FuturaBold mx-2 md:mx-8 md:py-8">
      <h1 class="text-2xl md:text-5xl">COLLABORATION & PROMOTION</h1>
      <img src="{{url('/image/about_us/urban-athletes-collaboration-and-promotion.png')}}" alt="Colaborasi and promotion" class="mx-auto">
      <p class="font-sans-serif mt-8">and many more….</p>
    </div>
  </div>
  <div class="bg-[url('/image/about_us/urban-athletes-about-us-cerification-bg.jpg')] bg-cover bg-center text-center text-white font-FuturaBold py-8">
    <h1 class="text-2xl md:text-5xl">CERTIFICATION</h1>
    <p class="font-sans-serif mx-auto my-4 px-8 text-sm md:text-base md:px-0 md:w-3/4">Sebagai bentuk komitmen dan untuk meningkatkan kualitas dan fasilitas Urban Athletes, berikut terlampir beberapa sertifikasi yang telah kami peroleh.</p>
    <img src="{{url('/image/about_us/urban-athletes-certification.png')}}" alt="Colaborasi and promotion" class="mx-auto mb-8 px-8 md:px-0 md:w-3/4">
  </div>

  @push('script')
  @stack('script')
  @endpush
</x-main>