<nav class="absolute w-full z-50" id="navbar">
  <div class="relative bg-black w-full">
    <div class="
      flex justify-end
      lg:justify-center
    ">
      <div class="
        w-full flex justify-center 
        lg:justify-end lg:w-max lg:px-4 lg:mx-4 lg:py-2 lg:mb-2
      ">
        <img class="h-14 py-2 lg:py-0" src="{{ url('/image/logo-urban-athletes.png') }}" alt="Logo Urban Athletes">
      </div>
      <div class="
        px-4 relative 
        lg:hidden
      ">
        <button id="hamburger" name="hamburger" type="button" class="block right-4 top-3 absolute">
          <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>
      </div>
      <div class="
        bg-black text-white font-medium text-xs w-56 min-h-screen absolute top-14 transition-all duration-300 rounded-b-md menu-close
        lg:text-base lg:static lg:w-max lg:min-h-min lg:bg-transparent lg:flex lg:justify-center
      " id="nav-menu">
        <div class="font-RobotoMono">
          {{-- <div class="flex justify-end">
          </div> --}}
          <ul class="lg:py-3 lg:flex lg:w-max lg:uppercase">
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              lg:px-0 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-orange-500
              group
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                lg:overflow-visible lg:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center" id="klik">
                  <span class="py-3 px-4 justify-between" id="klik">WORKOUTS</span>
                  <p class="lg:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                lg:w-56 lg:absolute lg:mt-1 lg:bg-opacity-70 
                absolute 
                {{-- group-hover:static lg:group-hover:absolute --}}
                -top-44 -z-10 
                {{-- group-hover:-top-15 group-hover:z-0 --}}
              " id="list-subMenu">
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
            <li class="
              py-3 px-4 border-y-[1px] border-gray-600 hover:text-orange-500 
              lg:px-0 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="#"><span>TRAINER</span></a></li>
          
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              lg:px-0 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-orange-500
              group
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                lg:overflow-visible lg:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center" id="klik">
                  <span class="py-3 px-4 justify-between" id="klik">TIMETABLE</span>
                  <p class="lg:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                lg:w-56 lg:absolute lg:mt-1 lg:bg-opacity-70 
                absolute 
                {{-- group-hover:static lg:group-hover:absolute --}}
                -top-44 -z-10 
                {{-- group-hover:-top-15 group-hover:z-0 --}}
              " id="list-subMenu">
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
            
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              lg:px-0 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-orange-500
              group
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                lg:overflow-visible lg:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center" id="klik">
                  <span class="py-3 px-4 justify-between" id="klik">ABOUT US</span>
                  <p class="lg:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                lg:w-56 lg:absolute lg:mt-1 lg:bg-opacity-70 
                absolute 
                {{-- group-hover:static lg:group-hover:absolute --}}
                -top-44 -z-10 
                {{-- group-hover:-top-15 group-hover:z-0 --}}
              " id="list-subMenu">
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
            <li class="
              py-3 px-4 border-y-[1px] border-gray-600 hover:text-orange-500
              lg:px-0 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="#"><span>NEWS</span></a></li>
          
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              lg:px-0 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-orange-500
              group
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                lg:overflow-visible lg:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center" id="klik">
                  <span class="py-3 px-4 justify-between" id="klik">STORE</span>
                  <p class="lg:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                lg:w-56 lg:absolute lg:mt-1 lg:bg-opacity-70 
                absolute 
                {{-- group-hover:static lg:group-hover:absolute --}}
                -top-44 -z-10 
                {{-- group-hover:-top-15 group-hover:z-0 --}}
              " id="list-subMenu">
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 lg:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="flex justify-center my-4 py-2">
          <a class="py-2 px-4 border border-yellow-500" href="#">BUILD YOU OWN GYM</a>
        </div>
      </div>
    </div>
  </div>
  @push('script')
    <script src="{{ url('/js/script_navbar_web.js') }}"></script>
  @endpush
</nav>