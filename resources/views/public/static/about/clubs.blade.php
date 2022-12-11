<x-main_web menu='ABOUT US' subMenu="CLUB">
  <div class="container">
    <div class="lg:flex lg:justify-between items-end">
      <div class="font-FuturaBold my-4">
        <h2 class="text-4xl">CLUB GALLERY</h2>
        <h2 class="text-4xl">OF URBAN ATHLETES</h2>
      </div>
      <div class="lg:text-xl font-black space-x-4 my-4">
        <button id="btnMenu-img" data-id="1" class="hover:text-yellow-primary">Merr</button>
        <button id="btnMenu-img" data-id="2" class="hover:text-yellow-primary">Tidar</button>
        {{-- <button id="btnMenu-img" data-id="3" class="hover:text-yellow-primary">Marvell</button> --}}
        <button id="btnMenu-img" data-id="4" class="hover:text-yellow-primary">Lenmarc</button>
      </div>
    </div>
    
    <div id='group-image' data-id="2">
      <div class="grid grid-cols-2 md:grid-cols-4 my-8">
        <div class="col-span-2 max-h-60 m-1 overflow-hidden">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center w-full" src="{{ url('image/web/about/clubs/tidar/Tidar_1.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full aspect-auto" src="{{ url('image/web/about/clubs/tidar/Tidar_2.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_3.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_4.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_5.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_6.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/tidar/Tidar_7.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
      </div>
    </div>
    <div id='group-image' data-id="1">
      <div class="grid grid-cols-2 md:grid-cols-4 my-8">
        <div class="col-span-2 max-h-60 m-1 overflow-hidden">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-bottom w-full" src="{{ url('image/web/about/clubs/merr/slider4.JPG') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full aspect-auto" src="{{ url('image/web/about/clubs/merr/slider2.JPG') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/merr/slider3.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/merr/slider1.JPG') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/merr/slider5.JPG') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        {{-- <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/merr/Tidar_6.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/merr/Tidar_7.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div> --}}
      </div>
    </div>

    {{-- Marvell --}}
    {{-- <div id='group-image' data-id="3">
      <div class="grid grid-cols-2 md:grid-cols-4 my-8">
        <div class="col-span-2 max-h-60 m-1 overflow-hidden">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center w-full" src="{{ url('image/web/about/clubs/marvell/marvell1.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full aspect-auto" src="{{ url('image/web/about/clubs/marvell/marvell2.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/marvell/marvell3.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/marvell/marvell4.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/marvell/marvell5.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/marvell/marvell6.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/marvell/marvell7.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
      </div>
    </div> --}}

    <div id='group-image' data-id="4">
      <div class="grid grid-cols-2 md:grid-cols-4 my-8">
        <div class="col-span-2 max-h-60 m-1 overflow-hidden">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center w-full" src="{{ url('image/web/about/clubs/lenmarc/lenmarc1.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full aspect-auto" src="{{ url('image/web/about/clubs/lenmarc/lenmarc2.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/lenmarc/lenmarc3.JPG') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/lenmarc/lenmarc4.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/lenmarc/lenmarc5.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/lenmarc/lenmarc6.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
        <div class="m-1">
          <button onclick="imageView(this)" class="h-full">
            <img class="object-cover object-center h-full" src="{{ url('image/web/about/clubs/lenmarc/lenmarc7.jpg') }}" alt="Clubs Urban Athletes">
          </button>
        </div>
      </div>
    </div>
  </div>
  @push('script')
    <script src="/js/coba.js"></script>
    <script>
      function imageView (e) {
        console.log(e);
        Swal.fire({
          html: e.innerHTML,
          width:'95%',
          // height:'100vh',
          color: '#000',
          background: '#E5E5E5',
          showConfirmButton: false,
          showCloseButton: true,
        })
      }
      let btnMenuImage = document.querySelectorAll('#btnMenu-img')
      let groupImage = document.querySelectorAll('#group-image')
      btnMenuImage.forEach(menu => {
        menu.addEventListener('click', function () {
          groupImage.forEach(image => {
            image.classList.add('hidden')
            btnMenuImage.forEach(color => {
              color.classList.remove('text-yellow-primary')
            });
          });
          groupImage.forEach(image => {
            if (image.getAttribute('data-id') == menu.getAttribute('data-id')) {
              menu.classList.add('text-yellow-primary')
              image.classList.remove('hidden')
            }
          });
        })
      });
      
    </script>
  @endpush
</x-main_web>