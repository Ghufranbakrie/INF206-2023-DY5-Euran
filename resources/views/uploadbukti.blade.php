<x-app-layout>
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
    </x-app-layout>