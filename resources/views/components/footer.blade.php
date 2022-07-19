<footer>
  <div class="bg-[url('/image/UA-footer-bg.jpg')] py-6 lg:px-24 text-center">
    <div class="md:flex md:justify-around">
      <div class="flex justify-center">
        <img class="h-28" src="{{ url('/image/logo-urban-athletes.png') }}" alt="Logo Urban Athletes">
      </div>
      <div class="text-white font-bold my-4 md:text-left">
        <h5 class="text-lg">WHY URBAN ATHLETES</h5>
        <ul class="text-sm">
          <li><a class="hover:border-b hover:border-white" href="#">About Us</a></li>
          <li><a class="hover:border-b hover:border-white" href="#">Our Philosophy</a></li>
          <li><a class="hover:border-b hover:border-white" href="#">Our Team</a></li>
          <li><a class="hover:border-b hover:border-white" href="#">Support Structure</a></li>
        </ul>
      </div>
      <div class="text-white font-bold my-4 md:text-left">
        <h5 class="text-lg">CONTACT US</h5>
        <ul class="text-sm">
          <li><a class="hover:border-b hover:border-white" href="#">Hubungi Kami</a></li>
        </ul>
      </div>
      <div class="text-white font-bold">
        <h5 class="text-lg">FIND US ON</h5>
        <div class="flex justify-center gap-8 md:gap-2 md:grid md:grid-cols-3 text-black py-2">
          <a class="flex justify-center place-items-center rounded-md shadow-sm shadow-facebook bg-white w-10 h-1w-10 text-facebook hover:text-white hover:bg-facebook transition-all duration-300"
          href="https://www.facebook.com/urbanathletesindo/" target="_blank" rel="Facebook">
            <i class="fa-brands fa-facebook-f text-2xl"></i>
          </a>
          <a class="flex justify-center place-items-center rounded-md shadow-sm shadow-instagram bg-white w-10 h-1w-10 text-instagram hover:text-white hover:bg-instagram transition-all duration-300"
          href="https://www.instagram.com/urban.athletes/" target="_blank" rel="instagram">
            <i class="fa-brands fa-instagram text-3xl"></i>
          </a>
          <a class="flex justify-center place-items-center rounded-md shadow-sm shadow-youtube bg-white w-10 h-1w-10 text-youtube hover:text-white hover:bg-youtube transition-all duration-300"
          href="https://www.youtube.com/channel/UCLV--bH8TFFYEf3Nz7Hv2vA" target="_blank" rel="youtube">
            <i class="fa-brands fa-youtube text-3xl"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="text-yellow-500 font-bold my-2 md:flex md:justify-center md:gap-4 md:items-center">
      <h5 class="text-lg">DOWNLOAD OUR MOBILE APP</h5>
      <div class="flex justify-around items-center">
        <div>
          <a href="https://play.google.com/store/apps/details?id=id.co.urbanathletes" target="_blank">
            <img class="h-16 md:h-10 lg:h-12" src="{{ url('image/button-google-play.png') }}" alt="Urban Athletes google play">
          </a>
        </div>
        <div>
          <a href="https://apps.apple.com/id/app/urban-athletes/id1557162190" target="_blank">
            <img class="h-16 md:h-10 lg:h-12" src="{{ url('image/button-app-store.png') }}" alt="Urban Athletes App Store">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-[url('/image/UA-footer-copyright-bg.jpg')] py-6 text-center">
    <p>Copyright &copy; {{date('Y')}} Urban Athletes. All Rights Reserved.</p>
  </div>
</footer>