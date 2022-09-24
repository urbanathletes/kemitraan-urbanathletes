<thead>
  <tr class="">
    <th colspan="7">
      <div class="m-2 h-1"></div>
    </th>
  </tr>
  <tr class="text-yellow-primary">
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">MONDAY</p></th>
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">TUESDAY</p></th>
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">WEDNESDAY</p></th>
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">THURSDAY</p></th>
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">FRIDAY</p></th>
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">SATURDAY</p></th>
    <th class="w-44"><p class="m-1 py-1 bg-neutral-700">SUNDAY</p></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td colspan="7">
      <div class="grid grid-cols-7">
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 1 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 2 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 3 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 4 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 5 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 6 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
        <div>
          @foreach ($classes as $class)
              @if ($class['classes_days_id'] == 7 && $class['studio_id'] != 3)
                <div class="py-2 bg-white m-1">
                  @if(empty($class['classes_time']))
                    @dump($times)
                  @else
                    <p class="bg-yellow-primary mx-1 rounded-sm">{{ substr($class['classes_time']['time_start'], 0, -3) . ' - ' . substr($class['classes_time']['time_end'], 0, -3) }} WIB</p>
                  @endif
                  <img class="h-20 p-2 mx-auto" src="{{ $class['class']['thumbnail'] }}" alt="Class">
                  <p>{{ $class['coach']['name'] }} | {{ $class['studio']['name'] }}</p>
                  <p>{{ $class['branch']['name'] }}</p>
                </div>
              @endif
          @endforeach
        </div>
      </div>
    </td>
  </tr>
  {{-- <tr class="py-5 my-10 h-10">
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
  </tr> --}}

  {{-- <tr class="py-5 my-10 h-10">
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
  </tr> --}}
</tbody>
