<x-main_web menu='TIMETABLE'>
  <div class="bg-black text-white pb-8">
    <div class="flex justify-center max-h-[30vh] lg:max-h-[40vh] relative">
      <img class="object-cover object-center w-full mx-auto" src="{{ url('image/web/Header_Timetable.jpg') }}" alt="Timetable Urban Athletes">
        <div class="absolute top-0 bottom-0 left-0 right-0 flex flex-col justify-center items-center bg-black bg-opacity-80">
        <div class="absolute bottom-0 max-w-max text-center pb-8">
          <h2 class="text-4xl font-FuturaBold pb-2 lg:pb-4">TIMETABLE</h2>
          {{-- <P>
            HOME <span class="text-yellow-primary">|</span> TIMETABLE
          </P> --}}
        </div>
      </div>
    </div>

    <div class="xl:container">
      {{-- <div class="md:flex justify-center items-center my-4"> --}}
      <div class="md:grid md:grid-cols-2 my-4">

        {{-- <label class="block mx-4 py-2 md:w-72 md:ml-auto">
          <select name="investment" id="investment" 
            class="p-2 block w-full border border-gray-200 bg-neutral-700 outline-none focus:ring-0 focus:border-black
          ">
            <option value="">City</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Gresek">Gresik</option>
          </select>
        </label> --}}
        <label class="block mx-4 py-2 md:w-96 md:mr-auto">
          <select name="clubs-select" id="clubs-select" data-url="{{ url('timetable-select') }}"
            class="p-2 block w-full border border-gray-200 bg-neutral-700 outline-none focus:ring-0 focus:border-black
          ">
            <option value="NULL">Select Our Club</option>
            @foreach ($clubs as $club)
            @if($club['id'] != 1 && $club['id'] != 6)
              <option value="{{$club['id']}}">{{$club['name']}}</option>
            @endif
            @endforeach
          </select>
        </label>
      </div>

      
      <div class="relative min-h-screen pb-24">
        <div class="px-4 md:px-0 flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar text-black font-AmpleSoft font-bold">
          <table class="table-fixed text-center" id="table-body">
            <div class="absolute top-0 bottom-0 left-0 right-0 text-white bg-neutral-900 bg-opacity-80
              flex justify-center items-start py-8
            " id='loadingDiv'>
              Please wait . . . 
              {{-- <img src="{{ url('image/web/LoadingWeb.gif') }}" alt="Loading Urban Athletes"> --}}
            </div>
            {{-- <thead class="">
            </thead>
            <tbody>
              <tr class="py-5 my-10 h-10">
                <td colspan="7" class="mx-1 border-b-2 border-yellow-primary relative">
                  <div class="m-1 absolute -bottom-6 right-0 left-0 flex justify-center"><p class="py-1 w-36 text-center text-white bg-black">MORNING</p></div>
                </td>
              </tr>
              <tr class="py-5 mb-10 ">
                <td colspan="7">
                  <div class="m-2 h-10"></div>
                </td>
              </tr>
              <tr>
                <td colspan="7">
                  <div class="grid grid-cols-7 w-full">
                    @foreach ($classes as $class)
                      @if($class['studio_id'] != 3 && $class['classes_time']['time_start'] <= '13:00:00')
                        <div class="py-2 bg-white m-1">
                          <p class="bg-yellow-primary mx-1 rounded-sm">{{ $class['classes_time']['time_start'] . ' - ' . $class['classes_time']['time_end'] }} WIB</p>
                        <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                          <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                          <p>{{ $class['branch']['name'] }}</p>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </td>
              </tr>

              <tr class="py-5 my-10 h-10">
                <td colspan="7" class="mx-1 border-b-2 border-yellow-primary relative">
                  <div class="m-1 absolute -bottom-6 right-0 left-0 flex justify-center"><p class="py-1 w-36 text-center text-white bg-black">EVENING</p></div>
                </td>
              </tr>
              <tr class="py-5 mb-10 ">
                <td colspan="7">
                  <div class="m-2 h-10"></div>
                </td>
              </tr>
              <tr>
                <td colspan="7">
                  <div class="grid grid-cols-7">
                    @foreach ($classes as $class)
                      @if($class['studio_id'] != 3 && $class['classes_time']['time_start'] > '13:00:00')
                        <div class="py-2 bg-white m-1">
                          <p class="bg-yellow-primary mx-1 rounded-sm">{{ $class['classes_time']['time_start'] . ' - ' . $class['classes_time']['time_end'] }} WIB</p>
                        <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                          <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                          <p>{{ $class['branch']['name'] }}</p>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </td>
              </tr>
            </tbody> --}}
          </table>
        </div>
      </div>

    </div>

  </div>

  @push('script')
    <script src="{{ url('js/ajax.js') }}"></script>
  @endpush
</x-main_web>