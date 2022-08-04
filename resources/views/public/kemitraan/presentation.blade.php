<x-main_kemitraan>
  <div class="flex justify-center max-h-[30vh] lg:max-h-[40vh] relative">
    <img class="object-cover object-center w-full mx-auto" src="{{ url('image/web/bg_page/BGAboutUsDeskripsi.jpg') }}" alt="Store Urban Athletes">
    <div class="absolute top-0 bottom-0 right-0 left-0 bg-black opacity-80"></div>
    <div class="absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center text-white">
      <div class="absolute bottom-0 max-w-max text-center pb-6">
        <h2 class="text-4xl font-FuturaBold pb-2 lg:pb-4">PRESENTATION</h2>
      </div>
    </div>
  </div>

  <div class="container my-8">
    <div class="my-4 pl-4">
      <h2 class="font-FuturaBold text-2xl px-4 max-w-max bg-yellow-primary mb-2">PRESENTATION</h2>
      {{-- <p class="max-w-5xl tracking-widest">At Urban Athletes we have made it simple, affordable and convenient for everyone to achieve their personal health goals. Whether you’re a beginner or a pro, young or old, everybody is welcome.</p> --}}
    </div>

    <div class="mt-8 grid lg:grid-cols-2">
      <div class="pl-4 space-y-12">
        <div class="flex justify-start relative">
          <div class="pl-4 py-1 border-l-4 border-yellow-primary flex items-center">
            <div class="mx-4">
              <img class="w-24" src="{{ url('image/web/logo/LOGO_UA_HITAM_TM.png') }}" alt="Urban Athletes">
            </div>
            <div>
              <h3 class="font-FuturaBold text-lg">URBAN ATHLETES INVESTOR</h3>
              <h3 class="font-FuturaBold text-lg">PRESENTATION</h3>
              <div class="text-blue-500 tracking-widest space-x-4">
                <button onclick="priview(this)" data-preview="ua"><i class="fa-solid fa-file-powerpoint"></i> Presentation</button>
                {{-- <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-start relative">
          <div class="pl-4 py-1 border-l-4 border-yellow-primary flex items-center">
            <div class="mx-4">
              <img class="w-24" src="{{ url('image/web/logo/fitness_work-02.png') }}" alt="Urban Athletes">
            </div>
            <div>
              <h3 class="font-FuturaBold text-lg">FITNESS WORKS INVESTOR</h3>
              <h3 class="font-FuturaBold text-lg">PRESENTATION</h3>
              <div class="text-blue-500 tracking-widest space-x-4">
                <button onclick="priview(this)" data-preview="fw"><i class="fa-solid fa-file-powerpoint"></i> Presentation</button>
                {{-- <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a> --}}
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="pt-2 pb-8 space-y-4 relative">
          <div class="absolute top-0 bottom-0 left-4 border-r-4 border-dashed border-black"></div>
          <div class="ml-16 pl-6 py-1 border-l-2 border-yellow-primary">
            <h3 class="font-FuturaBold text-lg">FITNESSWORKS, July 19<span class="ordinal text-sm inline-block align-top">th</span></h3>
            <div class="text-blue-500 tracking-widest space-x-4">
              <a href=""><i class="fa-solid fa-file-powerpoint"></i> Presentation</a>
              <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a>
            </div>
          </div>
          <div class="ml-16 pl-6 py-1 border-l-2 border-yellow-primary">
            <h3 class="font-FuturaBold text-lg">Document Name, July 10<span class="ordinal text-sm inline-block align-top">th</span></h3>
            <div class="text-blue-500 tracking-widest space-x-4">
              <a href=""><i class="fa-solid fa-file-powerpoint"></i> Presentation</a>
              <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a>
            </div>
          </div>
        </div>
        <div class="flex justify-start relative">
          <div class="absolute top-0 bottom-0 left-0 w-8 h-8 bg-black border-8 border-yellow-primary z-10"></div>
          <h2 class="font-FuturaBold text-xl ml-16">JUNE, 2022</h2>
        </div>
        <div class="pt-2 pb-8 space-y-4 relative">
          <div class="absolute top-0 bottom-0 left-4 border-r-4 border-dashed border-black"></div>
          <div class="tracking-widest ml-16 pl-6 py-1 border-l-2 border-yellow-primary">
            <h3 class="font-FuturaBold text-lg">Document Name, June 19<span class="ordinal text-sm inline-block align-top">th</span></h3>
            <div class="text-blue-500 space-x-4">
              <a href=""><i class="fa-solid fa-file-powerpoint"></i> Presentation</a>
              <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a>
            </div>
          </div>
          <div class="tracking-widest ml-16 pl-6 py-1 border-l-2 border-yellow-primary">
            <h3 class="font-FuturaBold text-lg">Document Name, June 10<span class="ordinal text-sm inline-block align-top">th</span></h3>
            <div class="text-blue-500 space-x-4">
              <a href=""><i class="fa-solid fa-file-powerpoint"></i> Presentation</a>
              <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a>
            </div>
          </div>
        </div>
        <div class="flex justify-start relative">
          <div class="absolute top-0 bottom-0 left-0 w-8 h-8 bg-black border-8 border-yellow-primary z-10"></div>
          <h2 class="font-FuturaBold text-xl ml-16">MAY, 2022</h2>
        </div>
        <div class="pt-2 pb-8 space-y-4 relative">
          <div class="absolute top-0 bottom-0 left-4 border-r-4 border-dashed border-black"></div>
          <div class="tracking-widest ml-16 pl-6 py-1 border-l-2 border-yellow-primary">
            <h3 class="font-FuturaBold text-lg">Document Name, May 24<span class="ordinal text-sm inline-block align-top">th</span></h3>
            <div class="text-blue-500 space-x-4">
              <a href=""><i class="fa-solid fa-file-powerpoint"></i> Presentation</a>
              <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a>
            </div>
          </div>
          <div class="tracking-widest ml-16 pl-6 py-1 border-l-2 border-yellow-primary">
            <h3 class="font-FuturaBold text-lg">Document Name, May 9<span class="ordinal text-sm inline-block align-top">th</span></h3>
            <div class="text-blue-500 space-x-4">
              <a href=""><i class="fa-solid fa-file-powerpoint"></i> Presentation</a>
              <a href=""><i class="fa-solid fa-file-pdf"></i> Report</a>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="my-6 lg:my-0">
        <h3 class="font-FuturaBold text-xl border-l-8 border-yellow-primary px-4">PREVIEW</h3>
        <div class="hidden" data-preview="ua" id="preview">
          <div class="max-w-2xl bg-blue-300 mx-auto my-4">
            <iframe src="https://drive.google.com/file/d/1ONu2lQkA2g5pnlz-3JwIGmCyV20CLsZw/preview" width="100%" height="540" allow="autoplay"></iframe>
          </div>
        </div>
        <div class="hidden" data-preview="fw" id="preview">
          <div class="max-w-2xl bg-blue-300 mx-auto my-4">
            <iframe src="https://drive.google.com/file/d/1RlsRsmaMo0YEmFHyL0BRdojGTlRKpiFw/preview" width="100%" height="540" allow="autoplay"></iframe>
          </div>
        </div>
      </div>
    </div>

  </div>
  @push('script')
    <script>
      let preview = document.querySelectorAll('#preview');
      function priview(dt) {
        previewHidden()
        preview.forEach(pre => {
          if (dt.getAttribute('data-preview') == pre.getAttribute('data-preview')) {
            pre.classList.remove('hidden');
          }
        });
      }

      function previewHidden() {
        preview.forEach(view => {
          view.classList.add('hidden');
        });
      }
    </script>
  @endpush
</x-main_kemitraan>