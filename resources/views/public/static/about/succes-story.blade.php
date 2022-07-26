<x-main_web menu='ABOUT' subMenu="succes-story">
  <div class="flex justify-center max-h-[30vh] lg:max-h-[40vh] relative">
    <img class="object-cover object-top w-full mx-auto lg:-mt-20" src="{{ url('image/web/about/UA-Banner_Global.jpg') }}" alt="About Us Urban Athletes">
    <div class="absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center text-white bg-gradient-to-t from-black">
      <div class="absolute bottom-0 max-w-max text-center pb-8">
        <h2 class="text-2xl font-FuturaBold pb-2 lg:pb-4">SUCCES STORY</h2>
        <P>
          HOME <span class="text-yellow-primary">|</span> SUCCES STORY
        </P>
      </div>
    </div>
  </div>
  <div class="container mt-12" id="click-detail">
    <div class="mb-8 max-w-max relative">
      <h2 class="text-4xl font-FuturaBold">WHAT OUR CLIENT SAY</h2>
      <span class="absolute left-0 -bottom-2 w-36 pb-1.5 bg-yellow-primary"></span>
    </div>

    <div id="view-detail">
      {{-- Ini untuk menampilkan detail dari card --}}
      <div class="flex justify-center">
        <div class="flex flex-col md:justify-center md:flex-row md:max-w-3xl lg:max-w-4xl">
          <div class="flex justify-center md:justify-end">
            <div class="relative">
              <span class="" id="img-view"> {{-- =========== id ===========--}}
                {{-- <img class="h-96" src="{{ url('image/web/home/Image-Poster-1.png') }}" alt="Poster Urban Athletes"> --}}
              </span>
              <div class="hidden absolute top-0 -right-8 bottom-0 items-center">
                <img class="bg-neutral-800 p-2 w-16" src="{{ url('image/web/home/Mask-Group_21.svg') }}" alt="Success story Urban Athletes">
              </div>
            </div>
          </div>
          <div class="grid content-center md:w-max mt-4 px-4 md:pr-0 md:pl-16" id="description-view"> {{-- =========== id ===========--}}
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="py-8 flex flex-wrap justify-around text-center text-xs font-Futura text-yellow-primary">
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-2x3.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Robertus Prayoga</p>
            <p class="pb-2">Male, 34 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <h2 class="font-FuturaBold text-xl mb-8">OKE GANTI</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-3x2.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Maulana Achmat</p>
            <p class="pb-2">Male, 36 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <h2 class="font-FuturaBold text-xl mb-8">OKE GANTI</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-2x3.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Robertus Prayoga</p>
            <p class="pb-2">Male, 34 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <h2 class="font-FuturaBold text-xl mb-8">OKE GANTI</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-3x2.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Maulana Achmat</p>
            <p class="pb-2">Male, 36 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <h2 class="font-FuturaBold text-xl mb-8">OKE GANTI</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-2x3.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Robertus Prayoga</p>
            <p class="pb-2">Male, 34 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <h2 class="font-FuturaBold text-xl mb-8">OKE GANTI</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-3x2.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Maulana Achmat</p>
            <p class="pb-2">Male, 36 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <h2 class="font-FuturaBold text-xl mb-8">OKE GANTI</h2>
            <P class="text-center">“Awalnya saya berkeinginan untuk fitness adalah dari perasaan saya yang merasa mudah lelah. Padahal dari segi usia, seharusnya saya masih muda. Di sisi lain, pekerjaan saya lagi banyak-banyaknya. Jadi, saya membutuhkan solusi yang hemat waktu dan tenaga. Di saat itulah saya menemukan Urban Athletes dan saya merasa cukup beruntung saya menemukan Urban Athletes”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">Maulana</span> - Surabaya</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @push('script')
    <script>
      let viewDetail = document.getElementById("view-detail")
      let cardBtn = document.querySelectorAll('#card-btn')
      cardBtn.forEach(btn => {
        btn.addEventListener('click', () => {
          document.querySelector('HTML').classList.add('scroll-html')
          let cardThis = btn.parentElement.parentElement.parentElement.parentElement
          let imgOri = cardThis.querySelector('#img-ori')
          let descriptionOri = cardThis.querySelector('#description-ori')
          let imgView = viewDetail.querySelector('#img-view')
          let descriptionView = viewDetail.querySelector('#description-view')
          imgView.innerHTML = imgOri.innerHTML
          descriptionView.innerHTML = descriptionOri.innerHTML
          // console.log(imgView.nextElementSibling);
          let ziseImgView = imgView.parentElement;
          imgView.nextElementSibling.classList.remove('hidden')
          imgView.nextElementSibling.classList.add('flex')
          ziseImgView.classList.add('w-64');
          ziseImgView.classList.add('h-96');
          location.href = "#click-detail";
        })
      });
    </script>
  @endpush
</x-main_web>