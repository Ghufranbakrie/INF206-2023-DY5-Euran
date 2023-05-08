<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-URAN | List Rumah</title>
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
    <div class="mt-4">
      <label for="bukti" class="block text-sm font-medium text-gray-700">Upload Bukti Pembayaran</label>
      <div class="mt-1 flex items-center">
        <label for="bukti" class="px-3 py-2 bg-gray-100 text-sm font-medium text-gray-700 rounded-md cursor-pointer hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
          <span>Upload</span>
          <input id="bukti" name="bukti" type="file" class="sr-only">
        </label>
        <span class="ml-3" id="bukti-file-name"></span>
      </div>
    </div>
    <div class="mt-4">
      <button type="submit" class="py-2 px-4 bg-green-500 hover:bg-green-600 text-white rounded-lg">Submit</button>
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
</body>
</html>