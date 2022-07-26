<x-main_web menu='ABOUT' subMenu="FAQS">
  <div class="container lg:px-12 min-h-screen">
    <form action="">
      <div class="flex justify-center items-center my-4">
        <table class="border-collapse border border-slate-500">
          <tr>
            <td class="border border-slate-500">
              <input class="outline-none h-8 md:w-80 px-4" type="text" name="search" id="search" placeholder="Have a Question">
            </td>
            <td class="border border-slate-500">
              <button class="w-12 h-8" type="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </td>
          </tr>
        </table>
      </div>
    </form>

    <div class="flex flex-wrap justify-center items-center space-x-4">
      <button class="menu-active">MEMBERSHIP</button>
      <button>CLUB</button>
      <button>PAYMENT</button>
      <button>SERVICE</button>
      <button>CONTACT</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 text-sm mt-4">
      <div>
        <div class="border border-black m-1 p-2">
          <h2 class="font-FuturaBold">Apa saga tipe keanggotaan / Membership di Urban Athletes ?</h2>
          <div>
            <div class="border-t border-neutral-700 my-2"></div>
            <p>Keanggotaan URBAN ATHLETES mulai dari 3 hingga 12 bulan sudah mendapatkan akses gym tanpa batas ke seluruh Cabang club dan dapat mengikuti kelas setiap harinya.</p>
          </div>
        </div>
      </div>
      <div>
        <div class="border border-black m-1 p-2 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-FuturaBold">Bagaimana cara mendapatkan Personal Trainer di Urban Athletes ?</h2>
            <span class="font-FuturaBold text-xl rotate-90">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>Untuk mendapatkan bantuan PT, Anda harus menjadi member Urban Athletes terlebih dahulu. Kemudian Anda dapat memilih paket PT mulai dari 4 sampai 48 sesi.</p>
          </div>
        </div>
        <div class="border border-black m-1 p-2 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-FuturaBold">Apakah keanggotaan saya bisa Diberhentikan sementara ?</h2>
            <span class="font-FuturaBold text-xl rotate-90">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>Tentu saja, ada 2 syarat untuk bisa melakukan freeze / berhenti sementara yaitu karena alasan medis atau pindah tugas ke luar negeri/luar kota selama lebih dari 2 minggu. Silahkan hubungi CS untuk info lebih lanjut.</p>
          </div>
        </div>
      </div>
      <div>
        <div class="border border-black m-1 p-2 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-FuturaBold">Dapatkah saya dastar keanggotaan Secara online ?</h2>
            <span class="font-FuturaBold text-xl rotate-90">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>Iya, Anda dapat mendaftar sebagai member dan booking personal trainer melalui aplikasi Urban Athletes.</p>
          </div>
        </div>
        <div class="border border-black m-1 p-2 cursor-pointer">
          <div class="flex justify-between items-center space-x-4" id="card-faq">
            <h2 class="font-FuturaBold">Apakah keanggotaan saya bisa Diberhentikan sementara ?</h2>
            <span class="font-FuturaBold text-xl rotate-90">&#8711;</span>
          </div>
          <div id="card-detail" class="hidden">
            <div class="border-t border-neutral-700 my-2"></div>
            <p>Tentu saja, ada 2 syarat untuk bisa melakukan freeze / berhenti sementara yaitu karena alasan medis atau pindah tugas ke luar negeri/luar kota selama lebih dari 2 minggu. Silahkan hubungi CS untuk info lebih lanjut.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @push('script')
    <script>
      let cardFaqs = document.querySelectorAll("#card-faq")
      let cardDetails = document.querySelectorAll("#card-detail")
      cardFaqs.forEach(cardFaq => {
        cardFaq.addEventListener('click', () => {
          cardFaqs.forEach(cardFaq => {
            cardFaq.querySelector("span").classList.add('rotate-90');
          });
          cardDetails.forEach(cardDetail => {
            cardDetail.classList.add('hidden');
          });
          cardFaq.querySelector("span").classList.remove('rotate-90');
          cardFaq.nextElementSibling.classList.remove('hidden');

        })
      });
    </script>
  @endpush
</x-main_web>