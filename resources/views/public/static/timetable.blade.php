<x-main_web menu='TIMETABLE'>
  <div class="text-white pb-8">
    <div class="flex justify-center max-h-[30vh] lg:max-h-[40vh] relative">
      <img class="object-cover object-center w-full mx-auto" src="{{ url('image/web/Header_Timetable.jpg') }}" alt="Timetable Urban Athletes">
      <div class="absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center bg-black bg-opacity-80">
        <div class="absolute bottom-0 max-w-max text-center pb-8">
          <h2 class="text-4xl font-FuturaBold pb-2 lg:pb-4">TIMETABLE</h2>
        </div>
      </div>
    </div>

    <div class="xl:containe relative">
      <div class="-z-10 absolute top-0 bottom-0 left-0 right-0 bg-[url('/image/web/Header_Timetable.jpg')] bg-cover bg-center object-cover object-center">
        <div class="-z-10 absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center bg-black/80"></div>
      </div>
      <div class="md:grid md:grid-cols-2 py-4">
        <label class="block mx-4 py-2 md:w-96 md:mx-auto">
          <select name="clubs-select" id="clubs-select" data-url="{{ url('timetable-select') }}"
            class="p-2 block w-full border border-gray-200 bg-neutral-700 outline-none focus:ring-0 focus:border-black
          " onchange="selectClub(this)">
            <option value="NULL">Select Our Club</option>
            @foreach ($clubs as $club)
            @if($club['id'] != 1 && $club['id'] != 6 && $club['id'] != 3)
              <option value="{{$club['id']}}">{{$club['name']}}</option>
            @endif
            @endforeach
          </select>
        </label>
        <label class="block mx-4 py-2 md:w-96 md:mx-auto">
          <select name="studio-select" id="studio-select" data-url="{{ url('timetable-select') }}"
            class="p-2 block w-full border border-gray-200 bg-neutral-700 outline-none focus:ring-0 focus:border-black
          " onchange="selectStudio(this)">
          </select>
        </label>
      </div>
      
      <div class="relative min-h-screen pb-24">
        <div class="px-4 md:px-0 flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar text-black font-AmpleSoft font-bold">
          <table class="table-fixed min-w-max mx-auto text-center" id="table-body">
            <div class="absolute top-0 bottom-0 left-0 right-0 text-white bg-neutral-900 bg-opacity-80
              flex justify-center items-start py-8
            " id='loadingDiv'>
              Please wait . . . 
              {{-- <img src="{{ url('image/web/LoadingWeb.gif') }}" alt="Loading Urban Athletes"> --}}
            </div>
          </table>
        </div>
      </div>

    </div>

  </div>

  @push('script')
    <script src="{{ url('js/ajax.js') }}"></script>
  @endpush
</x-main_web>