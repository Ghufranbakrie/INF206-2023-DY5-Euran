<x-app-layout>
    
  <div class="overflow-hidden bg-white sm:rounded-xl relative w-3/6 mx-auto mt-28 shadow-lg">
    <div class="px-4 py-5 sm:px-6">
      <h2 class="text-base font-semibold leading-6 text-gray-900">List Rumah</h2>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Sudirman <br>Jl. Pahlawan No.123</br></dt>
          <div class="sm:col-span-2 sm:flex sm:justify-end">
            <a href="UploadBukti.html"><button type="button" class="py-2 px-4 bg-green-500 hover:bg-green-600 text-white rounded-lg">Ambil</button></a>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Sulastri <br>Jl. Kebun Sawit No.45</br></dt>
          <div class="sm:col-span-2 sm:flex sm:justify-end">
            <a href="UploadBukti.html"><button type="button" class="py-2 px-4 bg-green-500 hover:bg-green-600 text-white rounded-lg">Ambil</button></a>
          </div>
        </div>        
        <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Sukijan <br>Jl. Sukiman No. 67</br></dt>
          <div class="sm:col-span-2 sm:flex sm:justify-end">
            <a href="#"><button type="button" class="py-2 px-4 bg-orange-500 hover:bg-orange-600 text-white rounded-lg" onclick="if(!confirm('Belum melakukan pembayaran, tidak dapat mengambil barang.')) return false;">Belum Bayar</button></a>
          </div>
        </div>
      </dl>
    </div>
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