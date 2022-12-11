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
      <div class="md:grid md:grid-cols-2 my-4 pb-8">

        {{-- <label class="block mx-4 py-2 md:w-72 md:ml-auto">
          <select name="investment" id="investment" 
            class="p-2 block w-full border border-gray-200 bg-neutral-700 outline-none focus:ring-0 focus:border-black
          ">
            <option value="">City</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Gresek">Gresik</option>
          </select>
        </label>
        <label class="block mx-4 py-2 md:w-96 md:mr-auto">
          <select name="investment" id="investment" 
            class="p-2 block w-full border border-gray-200 bg-neutral-700 outline-none focus:ring-0 focus:border-black
          ">
            <option value="">Select Our Club</option>
            <option value="Merr">UA Merr</option>
            <option value="Marvell">UA Marvell</option>
            <option value="Tidar">UA Tidar</option>
            <option value="Lenmarc">UA Lenmarc</option>
          </select>
        </label> --}}
      </div>

      <div class="min-h-screen pb-24">
        <div class="px-4 md:px-0 flex flex-nowrap overflow-visible overflow-x-auto no-scrollbar text-black font-AmpleSoft font-bold">
          <table class="table-fixed min-w-max text-center">
            <thead class="">
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
              <tr class="py-5 mb-10 h-10">
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
                <td>
                  <div class="py-2 bg-gradient-to-t from-neutral-700 m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">08.10 - 09.00 WIB</p>
                  <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/BODYPUMPColour.png') }}" alt="Class">
                    <p>David | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white bg-gradient-to-t from-neutral-700 m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/BODYCOMBATColour.png') }}" alt="Class">
                    <p>Yudha | UAX Studio</p>
                  </div>
                </td>
                <td>
                  {{-- <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">08.10 - 09.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>nama | Nama Studio</p>
                  </div> --}}
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/BODYPUMPColour.png') }}" alt="Class">
                    <p>Grace | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">08.10 - 09.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Trigerpoinblackt.png') }}" alt="Class">
                    <p>Rory | SOUL Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">08.10 - 09.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/TRX.png') }}" alt="Class">
                    <p>Garry | SOUL Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">08.10 - 09.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/VinyasaYoga.png') }}" alt="Class">
                    <p>Sherly | SOUL Studio</p>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>Bagja | Valor Studio</p>
                  </div>
                </td>
                <td>
                  {{-- <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>nama | Nama Studio</p>
                  </div> --}}
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/MuayThai.png') }}" alt="Class">
                    <p>Adi | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/CIRCUIT.png') }}" alt="Class">
                    <p>David | Circuit Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/VinyasaYoga.png') }}" alt="Class">
                    <p>Sherly | SOUL Studio</p>
                  </div>
                </td>>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">08.10 - 09.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/CIRCUIT.png') }}" alt="Class">
                    <p>Jonathan | Circuit Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">09.10 - 10.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/logoUrbanPowerFix.png') }}" alt="Class">
                    <p>Adri | UAX Studio</p>
                  </div>
                </td>
              </tr>
              <tr class="py-5 mb-10 h-10">
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
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/TRX.png') }}" alt="Class">
                    <p>Nisfu | TRX Area</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/FlyHigh.png') }}" alt="Class">
                    <p>Sherly | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/BODYCOMBATColour.png') }}" alt="Class">
                    <p>Martha | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/TRX.png') }}" alt="Class">
                    <p>Rory | TRX Area</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/New-Rejuve-Pilates.png') }}" alt="Class">
                    <p>Rory | UAX Studio</p>
                  </div>
                </td>
                <td>
                  {{-- <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>nama | Nama Studio</p>
                  </div> --}}
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">18.10 - 19.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Zumba_Fitness_logo.png') }}" alt="Class">
                    <p>Maulani | UAX Studio</p>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>Ian | Valor Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/BODYPUMPColour.png') }}" alt="Class">
                    <p>David | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/CIRCUIT.png') }}" alt="Class">
                    <p>Martha | Circuit Studio</p>
                  </div>
                </td>
                <td>
                  {{-- <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>nama | Nama Studio</p>
                  </div> --}}
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                  <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor_TM.png') }}" alt="Class">
                    <p>Bagja | Valor Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/BODYCOMBATColour.png') }}" alt="Class">
                    <p>Martha | UAX Studio</p>
                  </div>
                </td>
                <td>
                  <div class="py-2 bg-white m-1">
                    <p class="bg-yellow-primary mx-1 rounded-sm">19.30 - 21.00 WIB</p>
                    <img class="h-20 p-2 mx-auto" src="{{ url('image/web/logo_kelas/Valor.png') }}" alt="Class">
                    <p>Anton | Valor Studio</p>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>
</x-main_web>