<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-URAN</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

</head>
<body class="bg-[#fafafa]">

  <!--Navbar Start-->
  <nav class="bg-[#fafafa] md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center">
      <a href="/landingpage"><img class="h-28 inline pl-10 cursor-pointer" src="{{ asset('logo.jpg') }}" alt="logo"></a><!--logo-->

    <span class="text-3xl cursor-pointer md:hidden block mx-2">
      <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
    </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#fafafa] w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-5 my-6 md:my-0">
        <a href="/informasitagihan" class="text-xl hover:text-[#426A4E] duration-500">Informasi Tagihan</a>
      </li>
      <li class="mx-5 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-[#426A4E] duration-500">Riwayat Pembayaran</a>
      </li>
      <li class="mx-5 my-6 md:my-0">
        <a href="#" class="text-xl hover:text-[#426A4E] duration-500">Bukti Pengambilan Sampah</a>
      </li>

      <!--dropdown start-->
      <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="mx-12 my-6 md:my-0 text-sm font-medium text-center text-white bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
      </button>
      
      <!-- Dropdown menu -->
      <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-800 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-800 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            <li>
            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>
            </li>
            <li>
            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-center" href="{{ route('logout') }}">Logout</a>       
            </li>

          </ul>
      </div>
      <!--dropdown end-->
    </ul>
   
  </nav>
  <!--Navbar End-->

  <!--carousel start-->
<div id="default-carousel" class="relative w-4/5 ml-36 pt-20 drop-shadow-2xl" data-carousel="slide">
  <!-- Carousel wrapper -->
  <div class="relative  h-56 overflow-hidden rounded-lg md:h-96">
       <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('images/carousel1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('images/carousel2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ url('images/carousel3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
      </div>
      
  </div>
  <!-- Slider indicators -->
  <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-3 left-1/2">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      
  </div>
  <!-- Slider controls -->
  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          <span class="sr-only">Previous</span>
      </span>
  </button>
  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
      <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span class="sr-only">Next</span>
      </span>
  </button>
</div>
  <!--carousel end-->

  <!--card start-->
  <div class="pt-20 pl-64">
    <a href="/informasitagihan" class="relative w-3/4 h-56 block w-sm bg-white border border-gray-200 rounded-lg drop-shadow-2xl hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <h5 class="mt-6 ml-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Informasi Tagihan : </h5>
      <p class=" mt-6 ml-6 font-normal text-gray-700 dark:text-gray-400">Anda belum membayar iuran tagihan sampah, lakukan pembayaran di menu Bayar</p>
      <button type="button" class="mt-14 ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg aria-hidden="true" class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path></svg>
        Pay Now
      </button>
    </a>
   
  </div>
  <!--card end-->

  <!--footer start-->
<footer class="bg-[#fafafa] rounded-lg mt-28 dark:bg m-4">
  <div class="w-full container mx-auto p-4 md:px-6 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
          <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
              <img src="{{ asset('images/logo.jpg') }}" class="h-36 mr-3" alt="Flowbite Logo" />
          </a>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">E-URAN™</a>. All Rights Reserved.</span>
  </div>
</footer>
  <!--footer end-->


  <script>
    function Menu(e){
      let list = document.querySelector('ul');

      e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) :( e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>