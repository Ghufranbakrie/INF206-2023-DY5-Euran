<x-app-layout>
 <!-- Form upload bukti -->
 <div class="overflow-hidden bg-white sm:rounded-xl relative mx-auto mt-28 shadow-lg max-w-md">
  <div class="bg-white px-4 py-5 sm:px-6">
  <div class="overflow-hidden bg-gray-100 sm:rounded-xl relative mx-auto mt-28 shadow-lg max-w-md">
  <div class="bg-white px-4 py-5 sm:px-6">
    <form action="{{ route ('upload.bukti')}}" method="post" enctype="multipart/form-data">
      @csrf
      @foreach($user as $list)
      <input type="hidden" name="email" value={{$list->email}}>
    <div>
      <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
      <label type="text" name="alamat" id="alamat" required
      class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$list->name}}</label>
    </div>
    <div>
      <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
      <label type="text" name="alamat" id="alamat" required
      class="mt-1 focus:ring-green-500 focus:border-green-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$list->address}}</label>
    </div>    
    @endforeach    
    <div class="flex items-center justify-center w-full mt-7">
      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-100 border-solid border-solid rounded-lg cursor-pointer bg-gray-300 hover:bg-gray-200 text-gray-200 hover:text-gray-600 transition-colors duration-300">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
          <p class="mb-2 text-sm text-black-500 dark:text-gray-500"><span class="font-semibold">Pilih Berkas</span></p>
        </div>
        <input id="bukti" name="image" type="file" class="form-control rounded-md" required>
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