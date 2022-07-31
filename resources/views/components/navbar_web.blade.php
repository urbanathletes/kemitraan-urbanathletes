<nav class="absolute w-full z-50 lg:overflow-visible" id="navbar">
  <div class="relative bg-black w-full">
    <div class="font-PoppinsSemiBold 
      flex justify-end
      lg:justify-between
    ">
      <div class="
        w-full flex justify-center items-center md:py-2
        lg:justify-end lg:w-max lg:px-4 lg:mx-4 lg:py-2 lg:mb-2 lg:min-w-max
      ">
        <a href="{{ url('/') }}">
          <img class="h-16 md:h-14 py-2 lg:py-0" src="{{ url('/image/logo-UA.png') }}" alt="Logo Urban Athletes">
        </a>
      </div>
      <div class="
        px-4 relative md:order-last
        lg:hidden
      ">
        <button id="hamburger" name="hamburger" type="button" class="block right-4 top-3 absolute">
          <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
          <span class="hamburger-line transition duration-300 ease-in-out"></span>
          <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
        </button>
      </div>
      <div class="
        bg-black text-white font-medium text-xs w-56 min-h-screen absolute top-14 md:top-16 transition-all duration-300 border-t lg:border-t-0 border-gray-600 menu-close
        lg:text-base lg:static lg:w-full lg:min-h-min lg:bg-transparent lg:flex lg:justify-center mt-2 lg:mt-0
      " id="nav-menu">
        <div class="lg:tracking-widest lg:w-full">
          <ul class="lg:py-3 lg:flex lg:w-max lg:uppercase">
            {{-- <li class="
              border-b-[1px] border-gray-600 hover:text-yellow-primary
              xl:px-4 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-white
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
                text-left w-full
                lg:w-max lg:absolute lg:mt-1 lg:bg-white
                absolute 
                -top-44 -z-10 
              " id="list-subMenu">
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/workout/weight-loss') }}">Weight Loss</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}">Flexibility</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}">Tone Muscle</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}">Endurance</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="#">Strength</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="#">Kids Gym</a></li>
              </ul>
            </li> --}}
            <li class="
              py-3 px-4 border-b-[1px] border-gray-600 hover:text-yellow-primary 
              xl:px-4 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-white
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="{{ url('/workout') }}"><span>WORKOUTS</span></a></li>
            <li class="
              py-3 px-4 border-b-[1px] border-gray-600 hover:text-yellow-primary 
              xl:px-4 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-white
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="{{ url('trainer') }}"><span>TRAINER</span></a></li>
            <li class="
              py-3 px-4 border-b-[1px] border-gray-600 hover:text-yellow-primary 
              xl:px-4 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-white
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="{{ url('/timetable') }}"><span>TIMETABLE</span></a></li>
          
            {{-- <li class="
              border-b-[1px] border-gray-600 hover:text-yellow-primary
              xl:px-4 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-white
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
                text-left w-full
                lg:w-max lg:absolute lg:mt-1 lg:bg-white
                absolute
                -top-44 -z-10 
              " id="list-subMenu">
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}">Gunawangsa Merr</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}">Gunawangsa Tidar</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}">Marvell City</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/support-structure') }}">Lenmarc Mall</a></li>
              </ul>
            </li> --}}
            
            <li class="
              border-b-[1px] border-gray-600 hover:text-yellow-primary
              xl:px-4 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-white
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
                text-left w-full
                lg:w-max lg:absolute lg:mt-1 lg:bg-white
                absolute
                -top-44 -z-10 
              " id="list-subMenu">
              {{-- <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}">Profile</a></li> --}}
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/about/about-us') }}">Profile</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="#">Club</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/about/faqs') }}">Faqs</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/about/terms-conditions') }}">TERMS & CONDITIONS</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/about/succes-story') }}">Succes Story</a></li>
              </ul>
            </li>
            <li class="
              py-3 px-4 border-b-[1px] border-gray-600 hover:text-yellow-primary
              xl:px-4 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-white
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="#"><span>NEWS</span></a></li>
            <li class="
              py-3 px-4 border-b-[1px] border-gray-600 hover:text-yellow-primary
              xl:px-4 lg:border-y-0 lg:border-t-0 lg:hover:border-b-2 lg:hover:border-white
            " id="menu" data-menu="{{$menu ?? ''}}"><a href="{{ url('/store') }}"><span>STORE</span></a></li>
          
            {{-- <li class="
              border-b-[1px] border-gray-600 hover:text-yellow-primary
              xl:px-4 lg:border-y-0 lg:hover:border-b-2 lg:hover:border-white
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
                text-left w-full
                lg:w-max lg:absolute lg:mt-1 lg:bg-white
                absolute
                -top-44 -z-10 
              " id="list-subMenu">
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/about-us') }}">Membership</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-philosophy') }}">Digital Product</a></li>
                <li class="uppercase py-2 lg:py-1 lg:my-2 pl-8 lg:pl-2 lg:pr-2 lg:mx-2 border-t lg:border-0 border-gray-600 text-white lg:text-black hover:text-yellow-primary hover:bg-black" menu-sub="{{ $subMenu ?? '' }}"><a href="{{ url('/franchise/our-team') }}">Marchandise</a></li>
              </ul>
            </li> --}}
          </ul>
        </div>
        <div class="flex md:hidden justify-center my-4 py-2">
          <a class="py-2 px-4 border border-yellow-primary hover:bg-yellow-primary hover:text-black transition-all duration-300" href="{{ url('/franchise/home') }}">START YOU OWN GYM</a>
        </div>
      </div>
      <div class="hidden md:flex justify-center items-center py-2 px-4 lg:pr-8 text-white min-w-max absolute right-16 top-2 lg:static">
        <a class="py-2 px-4 border border-yellow-primary hover:bg-yellow-primary hover:text-black transition-all duration-300 block" href="{{ url('/franchise/home') }}">START YOU OWN GYM</a>
      </div>
    </div>
  </div>
  @push('script')
    <script src="{{ url('/js/script_navbar_web.js') }}"></script>
  @endpush
</nav>