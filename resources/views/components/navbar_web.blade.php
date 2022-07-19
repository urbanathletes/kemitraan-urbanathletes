<nav class="absolute w-full z-50" id="navbar">
  <div class="relative bg-black w-full">
    <div class="
      flex justify-end
      md:justify-center
    ">
      <div class="
        w-full flex justify-center 
        md:justify-end md:w-max md:px-4 md:mx-4 md:py-2 md:mb-2
      ">
        <img class="h-14 py-2 md:py-0" src="{{ url('/image/logo-urban-athletes.png') }}" alt="Logo Urban Athletes">
      </div>
      <div class="
        px-4 relative 
        md:hidden
      ">
        <button id="hamburger" name="hamburger" type="button" class="block right-4 top-3 absolute">
          <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>
      </div>
      <div class="
        bg-black text-white font-medium text-xs w-56 min-h-screen absolute top-14 transition-all duration-300 rounded-b-md menu-close
        md:text-base md:static md:w-max md:min-h-min md:bg-transparent
      " id="nav-menu">
        <div class="font-RobotoMono tracking-widest">
          {{-- <div class="flex justify-end">
          </div> --}}
          <ul class="md:py-3 md:flex md:w-max md:uppercase">
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              md:px-4 md:border-y-0 md:hover:border-b-2 md:hover:border-orange-500
              group
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                md:overflow-visible md:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center" id="klik">
                  <span class="py-3 px-4 justify-between" id="klik">WORKOUTS</span>
                  <p class="md:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                md:w-56 md:absolute md:mt-1 md:bg-opacity-70 
                absolute 
                {{-- group-hover:static md:group-hover:absolute --}}
                -top-44 -z-10 
                {{-- group-hover:-top-15 group-hover:z-0 --}}
              " id="list-subMenu">
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
            <li class="
              py-3 px-4 border-y-[1px] border-gray-600 hover:text-orange-500 
              md:px-4 md:border-y-0 md:border-t-0 md:hover:border-b-2 md:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="#"><span>TRAINER</span></a></li>
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              md:px-4 md:border-y-0 md:hover:border-b-2 md:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                md:overflow-visible md:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center">
                  <span class="py-3 px-4 justify-between">TIMETABLE</span>
                  <p class="md:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                absolute
                md:w-56 md:absolute md:mt-1 md:bg-opacity-70 
                -top-44 -z-10
                {{-- absolute text-left -right-full opacity-0 group-focus:top-0 group-focus:opacity-100 group-focus:static transition-all duration-300
                md:rounded-lg md:p-2 md:-top-44 md:-left-5 md:group-focus:absolute md:group-focus:top-7 md:bg-neutral-700 md:group-focus:opacity-80 md:shadow-md md:shadow-black  md:px-4 md:group-focus:block --}}
              ">
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              md:px-4 md:border-y-0 md:hover:border-b-2 md:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                md:overflow-visible md:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center">
                  <span class="py-3 px-4 justify-between">ABOUT US</span>
                  <p class="md:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                absolute
                md:w-56 md:absolute md:mt-1 md:bg-opacity-70 
                -top-44 -z-10
              ">
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
            <li class="
              py-3 px-4 border-y-[1px] border-gray-600 hover:text-orange-500
              md:px-4 md:border-y-0 md:border-t-0 md:hover:border-b-2 md:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="#"><span>NEWS</span></a></li>
            <li class="
              border-b-[1px] border-gray-600 hover:text-orange-500
              md:px-4 md:border-y-0 md:hover:border-b-2 md:hover:border-orange-500
            " id="menu" data-menu="{{$menu ?? ''}}">
              <button class="
                group w-full relative overflow-hidden
                md:overflow-visible md:uppercase
              " id="sub-menu">
                <div class="flex justify-between items-center">
                  <span class="py-3 px-4 justify-between">STORY</span>
                  <p class="md:hidden px-4" id="sub-menu-icon">+</p>
                </div>
              </button>
              <ul class="bg-[#181720] transition-all duration-300
                text-left w-full rounded-lg
                absolute
                md:w-56 md:absolute md:mt-1 md:bg-opacity-70 
                -top-44 -z-10
                {{-- absolute text-left -right-full opacity-0 group-focus:top-0 group-focus:opacity-100 group-focus:static transition-all duration-300
                md:rounded-lg md:p-2 md:-top-44 md:-left-5 md:group-focus:absolute md:group-focus:top-7 md:bg-neutral-700 md:group-focus:opacity-80 md:shadow-md md:shadow-black  md:px-4 md:group-focus:block --}}
              ">
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}" class="text-white hover:text-orange-500">About US</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}" class="text-white hover:text-orange-500">Our Philosophy</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}" class="text-white hover:text-orange-500">Out Team</a></li>
                <li class="py-2 pl-8 md:pl-4 border-t border-gray-600" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}" class="text-white hover:text-orange-500">Support Structure</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  @push('script')
    <script src="{{ url('/js/script_navbar_web.js') }}"></script>
  @endpush
</nav>