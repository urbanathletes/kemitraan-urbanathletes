<x-main_web menu='ABOUT US' subMenu="SUCCES STORY">
  <div class="flex justify-center max-h-[30vh] lg:max-h-[40vh] relative">
    <img class="object-cover object-top w-full mx-auto lg:-mt-20" src="{{ url('image/web/bg_page/BGHeaderSuccesStory.jpg') }}" alt="About Us Urban Athletes">
    <div class="absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center text-white bg-gradient-to-t from-black">
      <div class="absolute bottom-0 max-w-max text-center pb-8">
        <h2 class="text-4xl font-FuturaBold pb-2 lg:pb-4">SUCCES STORY</h2>
        {{-- <P>
          HOME <span class="text-yellow-primary">|</span> SUCCES STORY
        </P> --}}
      </div>
    </div>
  </div>
  <div class="container mt-12" id="click-detail">
    <div class="mb-8 md:mx-20 max-w-max relative">
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
    
    <div class="py-8 flex flex-wrap justify-around text-center font-PoppinsSemiBold text-yellow-primary">
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/IMG-20180508-WA0004.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">YOSEF AUDY</p>
            <p class="pb-2">Male</p>
            
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
            <P class="text-center">“Pertama kali saya mengambil program fitness bertujuan untuk mengurangi berat badan saya, karena saya mencoba berbagai macam cara dari mengurangi makan, minum suplemen, dan lain sebagianya namun tidak membuahkan hasil yang memuaskan. Ketika saya mengambil program Fitness, saya diberikan bonus Personal Trainer 2x . Pada saat itu mas Dymas sebgai trainer saya. Setelah itu saya di tawarkan untuk mengambil program Personal Trainer, awalnya saya tidak yakin apa bisa turun berat badan saya hanya dengan fitness??? . Namun, setelah saya menjalani program PT yang diajarkan oleh mas Dymas kurang lebih dalam kurun waktu 4-5 bulan hasilnya cukup memuaskan, berat badan saya turun 19 kg. Badan saya terasa lebih ringan dan tubuh saya lebih mengecil dari sebelumnya. Selain itu juga berat badan saya cenderung stabil tidak naik turun. Saya puas dengan hasil yang saya dapat”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">YOSEF AUDY</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/IMG-20180508-WA0019-1.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">NATALIA ARISHANDY</p>
            <p class="pb-2">Famale</p>
            {{--  --}}
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
            <P class="text-center">“Setelah mengambil program Personal Trainer saya meraskaan perubahan yaitu badan lebih fit, ringan, tidak mudah capek, makan lebih teratur sampai-2 saya harus cek berapa kalori yang saya makan. Berat badan pasti turun karna latihan yang cukup keras dan rutin, karna latihan dengan Personal Trainer kita akan merasakan capek dan hasil 2x lipat. Semua bilang pada kurusan yang pasti saya senang karna ukuran baju dan celana sudah mulai longgar semua. Pola tidur juga mulai berubah dulu saya selalu insomnia, tidur dini hari, sekarang sebelum jam 12 malam saya sudah tidur. Mbak Isma selama jadi PT saya sabar banget dan gak pernah capek kasih semangat dan dorongan untuk terus latihan. Mbak Isma memang mengarahkan untuk menjaga pola makan tapi dari saya sendiri memang niat untuk menjaga pola makan.”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">NATALIA ARISHANDY</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/IMG-20180511-WA0004.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">RANNY</p>
            <p class="pb-2">Female, 29th</p>
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
            <P class="text-center">“Awalnya saya iku Gym karna teman saya. Karena melihat kondisi berat badan saya setelah melahirkan, jadi saya putuskan dan bertekat bulat untuk menjadi member di Urban Athletes. Pertama saya hanya ikut trial selama 3 hari. Ternyata saya nyaman dan saya putuskan untuk ambil program Personal Trainer, karna saya fokuskan untuk menurunkan berat badan. Saat ini saya telat menjalani Program dengan Coach Riris, selama kurang lebih satu bulan dengan hasil yang cukup memuaskan. Walaupun berat badan saya belum turun drastis, setidaknya masa otot bertambah, dan badan tidak melar lagi. Berkat Coach Ririsyang konsisten kejamnya untuk mengajar 😊, tapi membuahkan hasil dengan badan semakin singset. Makasih untuk Trainer saya bersabar mengahadapi member-2nya demi mendapatkan hasil yang lebih , memuaskan dan berhasil. ”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">RANNY</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/IMG-20180511-WA0005.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">BENNY</p>
            <p class="pb-2">Male, 36 Th</p>
            
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
            <P class="text-center">“Sebelum mengambil program fitness, berbagai macam metode diet telah saya lakukan untuk menurunkan berat badan dan tidak ada yang berhasil mencapai berat badan yang diinginkan. Saat ambil program fitness, saya mendapatkan 2x free dengan Personal Trainer dengan Ma Fuazi. Akhirnya saya memutuskan lanjut mengambil program Personal Trainer karna saya cocok dengan gaya dan metode cara mengajarkanya. Progress yang saya jalani kurang lebih selama 7 bulan dengan hasil yang sangat memuaskan. Selain turun berat badan sebanyak 13kg sya juga mendapatkan body goals badan atletis menjadi kenyataan. Thanks to Urban Athletes dan Coach Fauzi.”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">BENNY</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/Screenshot-2018-05-17-12.29.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">RIDZKA</p>
            <p class="pb-2">Female, 38th</p>
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
            <P class="text-center">“Sebelum memutuskan untuk mengambil program fitness, saya mengkonsumsi produk nutrisi. Dari BB 97kg – 89kg. tapi setelah itu BB saya stuck ga ada penurunan lagi, jadi saya memutuskan mencari tempat gym, dan akhirnya saya putuskan untuk bergabug dengan Urban Athletes. Saya ditimbang di cek body fat % saya, dan dijelaskan kalua saya kelebihan BB, lalu saya disarankan untuk mengikjuti program personal trainer. Awalnya saya mikir-mikir, karena selama ini saya tidak tahu mengenai dunia Gym, saya hanya tau Serobic dan Yoga saja. Akhirnya saya mengambil program Personal Trainer 12 sesi dengan Free 2 sesi untuk awal latihan dasar mengenal alat dan cara latihan, dan yang ditunjuk adalah mas Fauzy. Sampai sekarang saya masih mengikuti Program Personat Training, dalam waktu 7 bulan saya merasakan hasilnya dengan turun berat badan sebanyak 22kg. Terima kasih untuk personal Trainer saya, Mas Fauzy yang selalu sabar, memberikan masukan yang positive dan memotivasi agar menjaga Berat badan secara stabil tidak naik turun seperti yoyo. Sekarang ini saya merasa badan saya lebih ringan, bugar dan fit. Yang paling oenting ukuran baju saya sudah tidak XXL lagi. Terima Kasih untuk Ma Fauzy dan Urban Athletes.”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">RIDZKA</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/Yen-Yen.jpeg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">RIDZKA</p>
            <p class="pb-2">Female, 38th</p>
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
            <P class="text-center">“Sebelum memutuskan untuk mengambil program fitness, saya mengkonsumsi produk nutrisi. Dari BB 97kg – 89kg. tapi setelah itu BB saya stuck ga ada penurunan lagi, jadi saya memutuskan mencari tempat gym, dan akhirnya saya putuskan untuk bergabug dengan Urban Athletes. Saya ditimbang di cek body fat % saya, dan dijelaskan kalua saya kelebihan BB, lalu saya disarankan untuk mengikjuti program personal trainer. Awalnya saya mikir-mikir, karena selama ini saya tidak tahu mengenai dunia Gym, saya hanya tau Serobic dan Yoga saja. Akhirnya saya mengambil program Personal Trainer 12 sesi dengan Free 2 sesi untuk awal latihan dasar mengenal alat dan cara latihan, dan yang ditunjuk adalah mas Fauzy. Sampai sekarang saya masih mengikuti Program Personat Training, dalam waktu 7 bulan saya merasakan hasilnya dengan turun berat badan sebanyak 22kg. Terima kasih untuk personal Trainer saya, Mas Fauzy yang selalu sabar, memberikan masukan yang positive dan memotivasi agar menjaga Berat badan secara stabil tidak naik turun seperti yoyo. Sekarang ini saya merasa badan saya lebih ringan, bugar dan fit. Yang paling oenting ukuran baju saya sudah tidak XXL lagi. Terima Kasih untuk Ma Fauzy dan Urban Athletes.”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">RIDZKA</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/Loreta.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">LORETA FLORENCIA SUSANTO</p>
            <p class="pb-2">Female</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2 mx-auto"></div>
            <div class="mt-16">
              <button id="card-btn">View Detail <span class="font-sans-serif">&#8811;</span></button>
            </div>
          </div>
        </div>
        <div class="hidden" id="detail">
          <div id="description-ori">
            <p class="text-yellow-primary">SUCCESS STORY</p>
            <h2 class="font-FuturaBold text-xl mb-8">WHAT OUR CLIENT SAY</h2>
            <P class="text-center">“Pertama kali saya mengambil program fitness bertujuan untuk mengurangi berat badan. Karena saya mencoba berbagai macam cara tapi banyak yang tidak membuahkan hasil yang memuaskan. Saat awal saya mengambil program fitness saya juga langsung mengambil program PT 6 bulan, karena saya memilki Goal untuk menurunkan berat badan. Hasilnya cukup memuaskan, berat badan saya berkurang sebanyak 6kg dan lebihnya lagi saya merasa banyak celana dan baju saya menjadi longgar. Memang tidak terlihat signifikan tapi untuk berpakaian saya merasa lebih longgar karna saya merasa otot-otot saya lebih kencang.”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">LORETA FLORENCIA SUSANTO</span></p>
          </div>
        </div>
      </div>
      <div class="w-64 h-96 my-4 overflow-hidden relative group" id="card">
        <span id="img-ori">
          <img class="group-hover:scale-110 object-cover object-center h-full w-full mx-auto transition-all duration-300" src="{{ url('image/web/succes-story/Purity.jpg') }}" alt="fly high yoga Urban Athletes">
        </span>
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">PURITY SAMBILAN AJI</p>
            <p class="pb-2">Female, 31th</p>
            
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
            <P class="text-center">“Setelah pakai [rogram personal trainer saya merasa badan tidak gampang capek, stamina lebih fit, tidak gampang loyo dan pola tidur juga lebih teratur. Meski berat badan belum turun signifikan karena pola makan belum terlalu maksimal atau belum diet ketat, tapi so far saya puas dengan ambil program ini, karena jadi lebih aktiv dan olah raga jadi teratur. Saya sekarang tidak takut berat badan akan naik banyak karena rutinya berolah raga dengan Personal Trainer”</P>
            <p class="text-center py-4"><span class="text-yellow-primary">PURITY SAMBILAN AJI</span></p>
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