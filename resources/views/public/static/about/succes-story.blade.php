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
  <div class="container mt-12">
    <div class="mb-8 max-w-max relative">
      <h2 class="text-4xl font-FuturaBold">WHAT OUR CLIENT SAY</h2>
      <span class="absolute left-0 -bottom-2 w-36 pb-1.5 bg-yellow-primary"></span>
    </div>
    <div class="py-8 flex flex-wrap justify-around text-center text-xs font-Futura text-yellow-primary">
      <div class="w-64 h-96 my-4 overflow-hidden relative group">
        <img class="group-hover:scale-110 object-cover object-center h-full mx-auto transition-all duration-300" src="{{ url('image/web/example/example-2x3.jpg') }}" alt="fly high yoga Urban Athletes">
        <div class="absolute top-0 bottom-0 left-0 right-0 px-4 bg-black opacity-0 group-hover:bg-opacity-50 group-hover:opacity-100 flex justify-center items-center transition-all duration-300">
          <div>
            <p class="pb-2">Robertus Prayoga</p>
            <p class="pb-2">Male, 34 Th</p>
            <p class="text-white">Surabaya</p>
            <div class="border-b border-yellow-primary w-32 h-2 py-2"></div>
            <div class="mt-16">
              <button>View Detail <span class="font-sans-serif">&raquo;</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-main_web>