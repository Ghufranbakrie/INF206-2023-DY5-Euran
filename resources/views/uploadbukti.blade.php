<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-URAN | Upload Bukti</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-[#fafafa]">

    <!--Navbar Start-->
  <nav class="bg-[#fafafa] md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center">
        <a href="landingpage.html"><img class="h-28 inline pl-10 cursor-pointer" src="logo.jpg" alt="logo"> </a><!--logo-->

    <span class="text-3xl cursor-pointer md:hidden block mx-2">
      <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
    </span>
    </div>

    <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#fafafa] w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-5 my-6 md:my-0">
        <a href="ListRumah.html" class="text-xl hover:text-[#426A4E] duration-500">List Rumah</a>
      </li>
      <li class="mx-5 my-6 md:my-0">
        <a href="UploadBukti.html" class="text-xl hover:text-[#426A4E] duration-500">Upload Bukti</a>
      </li>

      <!--dropdown start-->
      <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="mx-12 my-6 md:my-0 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button"> 
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path></svg>
      </button>
      
      <!-- Dropdown menu -->
      <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
            <li>
              <a href="biodata.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-center">Biodata</a>
            </li>
            <li>
              <a href="index.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-center">Logout</a>
            </li>
          </ul>
      </div>
      <!--dropdown end-->
    </ul>
  </nav>
  <!--Navbar End-->

=======
<x-app-layout>
>>>>>>> db119ea9d477484b33abfc18008b6b8010d8b679
 <!-- Form upload bukti -->
 <div class="overflow-hidden bg-white sm:rounded-xl relative mx-auto mt-28 shadow-lg max-w-md">
  <div class="bg-white px-4 py-5 sm:px-6">
    <form>
    <div>
      <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
      <input type="text" name="nama" id="nama" autocomplete="given-name" required
             class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
    <div>
      <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
      <input type="text" name="alamat" id="alamat" required
             class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>     
    <div class="flex items-center justify-center w-full mt-7">
      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-100 border-solid border-solid rounded-lg cursor-pointer bg-gray-300 hover:bg-gray-200 text-gray-200 hover:text-gray-600 transition-colors duration-300">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
          <p class="mb-2 text-sm text-black-500 dark:text-gray-500"><span class="font-semibold">Pilih Berkas</span></p>
        </div>
        <input id="dropzone-file" type="file" class="hidden" />
      </label>
    </div>
    
    <div class="mt-4">
      <button type="submit" class="py-2 px-4 bg-green-500 hover:bg-green-600 text-white rounded-lg">Upload</button>
    </div>
  </form>
</div>

  
    <script>
        function Menu(e){
          let list = document.querySelector('ul');
    
          e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) :( e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        }
      </script>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </x-app-layout>