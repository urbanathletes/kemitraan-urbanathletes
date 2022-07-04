<x-main menu='HOME'>
  <div>
    <img src="{{ url('/image/home/Urban-Athletes-Banner-Home.jpg') }}" alt="Urban Athletes">
  </div>
  <div class="bg-[url('/image/home/Support-Structure-UA-bg.jpg')] bg-repeat-y bg-center py-6 lg:py-10">
    <h1 class="text-3xl font-bold text-stone-900 text-center">FRANCHISE CATEGORIES</h1>

    <div class="sm:grid md:grid-cols-2 lg:grid-cols-4 lg:px-4">
      {{-- BOX --}}
      <div class="mx-4 lg:mx-0 my-8 text-white overflow-hidden">
        <div class="bg-black-ua rounded-[44px] mx-4 pt-6">
          <h3 class="text-center font-bold text-lg">URBAN ATHLETES</h3>
          <div class="flex justify-center">
            <img src="{{ url('/image/home/box.png') }}" alt="Urban Athletes">
          </div>
          <div class="bg-[url('/image/home/ua-bg-profit.jpg')] bg-cover bg-no-repeat bg-center scale-x-[1.1] text-black text-center font-FuturaBold py-4 mt-8 sm:mx-2">
            <h4>PROFIT</h4>
            <h1 class="text-3xl my-4">50-100 JUTA</h1>
            <h4>RUPIAH/BULAN</h4>
          </div>
          <ul class=" mt-4 px-8 py-4 text-sm font-light list-disc bg-[#282828] rounded-b-[44px] pb-6 leading-loose">
            <li>Modal < 2.5 Miliar Rupiah</li>
            <li>Balik modal dalam waktu 12-24 bulan</li>
            <li class="relative">Luas bangunan < 1000 m<span class="align-text-top ordinal text-[8px] absolute top-0">2</span></li>
          </ul>
        </div>
      </div>
      {{-- BOUTIQUE --}}
      <div class="mx-4 lg:mx-0 my-8 text-white overflow-hidden">
        <div class="bg-black-ua rounded-[44px] mx-4 pt-6">
          <h3 class="text-center font-bold text-lg">URBAN ATHLETES</h3>
          <div class="flex justify-center">
            <img src="{{ url('/image/home/boutique.png') }}" alt="Urban Athletes">
          </div>
          <div class="bg-[url('/image/home/ua-bg-profit.jpg')] bg-cover bg-no-repeat bg-center scale-x-[1.1] text-black text-center font-FuturaBold py-4 mt-8 sm:mx-2">
            <h4>PROFIT</h4>
            <h1 class="text-3xl my-4">100-200 JUTA</h1>
            <h4>RUPIAH/BULAN</h4>
          </div>
          <ul class=" mt-4 px-8 py-4 text-sm font-light list-disc bg-[#282828] rounded-b-[44px] pb-6 leading-loose">
            <li>Modal mulai dari 3.5 Miliar Rupiah</li>
            <li>Balik modal sebelum 24 bulan</li>
            <li class="relative">Luas bangunan < 1.000 m<span class="align-text-top ordinal text-[8px] absolute top-0">2</span></li>
          </ul>
        </div>
      </div>
      {{-- REGULAR --}}
      <div class="mx-4 lg:mx-0 my-8 text-white overflow-hidden">
        <div class="bg-black-ua rounded-[44px] mx-4 pt-6">
          <h3 class="text-center font-bold text-lg">URBAN ATHLETES</h3>
          <div class="flex justify-center">
            <img src="{{ url('/image/home/regular.png') }}" alt="Urban Athletes">
          </div>
          <div class="bg-[url('/image/home/ua-bg-profit.jpg')] bg-cover bg-no-repeat bg-center scale-x-[1.1] text-black text-center font-FuturaBold py-4 mt-8 sm:mx-2">
            <h4>PROFIT UP TO</h4>
            <h1 class="text-3xl my-4">100-200 JUTA</h1>
            <h4>RUPIAH/BULAN</h4>
          </div>
          <ul class=" mt-4 px-8 py-4 text-sm font-light list-disc bg-[#282828] rounded-b-[44px] pb-6 leading-loose">
            <li>Modal 4-5 Miliar Rupiah</li>
            <li>Balik modal dalam waktu 36-48 bulan</li>
            <li class="relative">Luas bangunan > 1.000 m<span class="align-text-top ordinal text-[8px] absolute top-0">2</span></li>
          </ul>
        </div>
      </div>
      {{-- PREMIUM --}}
      <div class="mx-4 lg:mx-0 my-8 text-white overflow-hidden">
        <div class="bg-black-ua rounded-[44px] mx-4 pt-6">
          <h3 class="text-center font-bold text-lg">URBAN ATHLETES</h3>
          <div class="flex justify-center">
            <img src="{{ url('/image/home/premium.png') }}" alt="Urban Athletes">
          </div>
          <div class="bg-[url('/image/home/ua-bg-profit.jpg')] bg-cover bg-no-repeat bg-center scale-x-[1.1] text-black text-center font-FuturaBold py-4 mt-8 sm:mx-2">
            <h4>PROFIT UP TO</h4>
            <h1 class="text-3xl my-4">100-200 JUTA</h1>
            <h4>RUPIAH/BULAN</h4>
          </div>
          <ul class=" mt-4 px-8 py-4 text-sm font-light list-disc bg-[#282828] rounded-b-[44px] pb-6 leading-loose">
            <li>Modal 5-6 Miliar Rupiah</li>
            <li>Balik modal dalam waktu 36-48 bulan</li>
            <li class="relative">Luas bangunan > 1.000 m<span class="align-text-top ordinal text-[8px] absolute top-0">2</span></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="flex justify-center items-center text-center font-extrabold">
      <i class="fa-brands fa-whatsapp text-3xl mx-2"></i>
      <a class="py-2 px-6 bg-[#282828] text-white" href="#">CONTACT US</a>
    </div>

  </div>

  {{-- Proses Join Franchise --}}
  <div class="
    py-8 text-white bg-[url('/image/home/bg-franchise-mobile-scaled.jpg')] bg-cover bg-center
    lg:bg-[url('/image/home/proses-join-bg.jpg')] lg:bg-cover lg:bg-center
  ">
    <h3 class="text-xl text-center py-4">PROSES JOIN FRANCHISE</h3>
    <div class="lg:flex lg:justify-center">
      <div class="flex justify-center lg:block pt-8">
        <div class="relative hidden lg:block py-4 border border-b-0 border-white">
          <p class="absolute -top-10 right-0 left-0 text-center whitespace-nowrap">1 - 2 MONTH</p>
        </div>
        <div class="grid grid-cols-1 text-center
          lg:flex lg:justify-center
        ">
          <div>
            <div class="flex justify-center">
              <img class="w-32 z-10" src="{{ url('/image/home/Asset-2-8.png') }}" alt="Urban Athletes">
            </div>
            <div class="py-4">
              <p class="text-xl font-semibold">Proses <br>Administrasi</p>
              <p class="py-4">Presentasi lanjutan <br>proses Q&A.</p>
            </div>
          </div>
          <div>
            <div class="lg:flex lg:justify-center lg:items-center">
              <div class="flex justify-center">
                <img class="rotate-90 py-6 w-16
                  lg:rotate-0 lg:py-0 lg:h-4 lg:scale-x-[1.5]" src="{{ url('/image/home/white-line.png') }}" alt="Urban Athletes">
              </div>
              <div class="flex justify-center">
                <img class="w-32 z-10" src="{{ url('/image/home/Asset-5-8.png') }}" alt="Urban Athletes">
              </div>
            </div>
            <div class="py-4 lg:py-0 lg:text-sm 2xl:text-base lg:ml-4 lg:pl-8">
              <p class="text-xl lg:text-base 2xl:text-lx font-semibold">
                Pembayaran <br>Commitment fee
              </p>
              <p class="py-4">
                Pembayaran <br>
                commitment fee <br>
                sebesar 100 juta.
              </p>
              {{-- <p>proses Q&A.</p> --}}
            </div>
          </div>
          <div>
            <div class="lg:flex lg:justify-center lg:items-center">
              <div class="flex justify-center">
                <img class="rotate-90 py-6 w-16
                lg:rotate-0 lg:py-0 lg:h-4 lg:scale-x-[1.5]" src="{{ url('/image/home/white-line.png') }}" alt="Urban Athletes">
              </div>
              <div class="flex justify-center">
                <img class="w-32 z-10" src="{{ url('/image/home/Asset-4-8.png') }}" alt="Urban Athletes">
              </div>
            </div>
            <div class="py-4 lg:py-0 lg:text-sm 2xl:text-base lg:ml-4 lg:pl-8">
              <p class="text-xl lg:text-base 2xl:text-lx font-semibold">
                Survey dan <br>
                Pemilihan Lokasi <br>
                Design Lokasi
              </p>
              <p class="py-4">
                Lokasi adalah segalanya. <br>
                Kami membantu Anda <br>
                untuk menentukan lokasi <br>
                yang tepat melalui survey <br>
                dan analisa.
              </p>
              <p>
                Dilanjudkan dengan proses <br>
                design sesuai dengan <br>
                kebutuhan pasar.
              </p>
            </div>
          </div>
          <div>
            <div class="lg:flex lg:justify-center lg:items-center">
              <div class="flex justify-center">
                <img class="rotate-90 py-6 w-16
                lg:rotate-0 lg:py-0 lg:h-4 lg:scale-x-[1.5]" src="{{ url('/image/home/white-line.png') }}" alt="Urban Athletes">
              </div>
              <div class="flex justify-center">
                <img class="w-32 z-10" src="{{ url('/image/home/Asset-5-8.png') }}" alt="Urban Athletes">
              </div>
            </div>
            <div class="py-4 lg:py-0 lg:text-sm 2xl:text-base lg:ml-4 lg:pl-8">
              <p class="text-xl lg:text-base 2xl:text-lx font-semibold">
                Pelunasan <br>
                frinchise fee
              </p>
              <p class="py-4">
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
        <div class="lg:hidden relative pl-4 ml-4 mb-8 border-y-2 border-r-2 border-white w-4 min-h-max flex justify-center items-center">
          <p class="absolute -left-5 rotate-90 whitespace-nowrap">1 - 2 MONTH</p>
        </div>
      </div>
      
      <div class="flex justify-center lg:block pt-8">
        <div class="relative hidden lg:block py-4 ml-16 border border-b-0 border-white">
          <p class="absolute -top-10 right-0 left-0 text-center whitespace-nowrap">2 - 3 MONTH</p>
        </div>
        <div class="grid grid-cols-1 text-center">
          <div class="mx-1">
            <div class="lg:flex lg:justify-center lg:items-center">
              <div class="flex justify-center">
                <img class="rotate-90 py-6 w-16
                lg:rotate-0 lg:py-0 lg:h-4 lg:scale-x-[1.5]" src="{{ url('/image/home/white-line.png') }}" alt="Urban Athletes">
              </div>
              <div class="flex justify-center">
                <img class="w-32 z-10" src="{{ url('/image/home/Asset-6-8.png') }}" alt="Urban Athletes">
              </div>
            </div>
            <div class="py-4 lg:py-0 lg:text-sm 2xl:text-base lg:ml-4 lg:pl-8">
              <p class="text-xl lg:text-base 2xl:text-lx font-semibold">
                Pre-Sales dan <br>
                Grand Openign
              </p>
              <p class="py-4">
                Recruit dan pelatihan staff <br>
                serta pelaksanaan <br>
                Pre-Sale untuk <br>
                membership <br>
              </p>
              <p>
                Grand Opening concept
              </p>
            </div>
          </div>
        </div>
        <div class="lg:hidden relative pl-4 ml-4 my-6 border-y-2 border-r-2 border-white w-4 min-h-max flex justify-center items-center">
          <p class="absolute -left-5 rotate-90 whitespace-nowrap">2 - 3 MONTH</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container ">
    <div class="text-center px-8">
      <h2 class="text-2xl font-bold font-FuturaBold py-4">WHY URBAN ATHLETES?</h2>
      <P class="font-FuturaBold mb-8">
        LEADING WITH 17 YEARS EXPERIENCE IN PROFESSIONAL FITNESS INDUSTRY
      </P>
      <a class="py-2 px-6 bg-neutral-900 font-sans-serif text-white hover:underline" href="#">MORE DETAILS</a>
    </div>
  </div>

  <div class="pt-8">
    <img class="" src="{{ url('/image/home/mobile-apps-urban-athletes.jpg') }}" alt="Urban Athletes Mobile">
  </div>

</x-main>