<x-app-layout>

    <!--card start-->
    <div class="overflow-hidden bg-emerald-900 sm:rounded-xl relative w-5/6 ml-28 mt-10 drop-shadow-2xl">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-base font-semibold leading-6 text-gray-100">Informasi Tagihan</h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-200">Iuran Tagihan Details</p>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Name</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ Auth::user()->name }}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Phone</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ Auth::user()->phone }}</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Address</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ Auth::user()->address }}</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Email</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ Auth::user()->email }}</dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Total Tagihan</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Rp 30.000,-</dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Terbilang</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 italic">Tiga Puluh Ribu Rupiah</dd>
          </div>
          <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">Status</dt>
            <dd class="mt-1 text-sm text-red-600 sm:col-span-2 sm:mt-0 ">Belum Bayar</dd>
          </div>
      </dl>
    </div>
  </div>
  <!--card end-->

  <!--poput start-->
      
  <!-- Modal toggle -->
  <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="drop-shadow-xl ml-28 mt-10 mb-10 block text-white bg-[#65806D] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Bayar Sekarang
  </button>

  <!-- Main modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true" class=" fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
      <div class="relative w-full h-full max-w-2xl md:h-auto">
          <!-- Modal content -->
          <div class="relative bg-gray-100 rounded-lg shadow">
              <!-- Modal header -->
              <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600 bg-emerald-900">
                  <h3 class="text-xl font-semibold text-gray-900 text-white">
                      Payment
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <a href="#">
                <img class="rounded-t-lg h-56 m-auto mt-5" src="{{ asset('qrcode.png') }}" alt="" />
            </a>
              <div class="p-6 space-y-6">
                  <p class="text-base leading-relaxed text-gray-900 ">
                      Pembayaran bisa menggunakan QR code diatas atau menggunakan rekening bank bsi dan bank aceh
                  </p>
                  <p class="text-base leading-relaxed text-gray-900 ">
                      No rek bank bsi : 434353535 an DLH
                </p>
                <p class="text-base leading-relaxed text-gray-900">
                  No rek bank aceh : 434353535 an DLH
            </p>
              </div>
              <!-- Modal footer -->
              <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="mx-6 my-6 w-24 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Done
              </button>
              <button data-modal-hide="defaultModal" type="button" class="w-24 text-gray-900 bg-red-900 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 text-white dark:border-gray-500 dark:hover:text-white dark:hover:bg-red-950 dark:focus:ring-gray-600">Close</button>

<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <div class="relative bg-emerald-900 rounded-lg shadow ">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="mb-5 text-lg font-normal text-gray-100 dark:text-gray-100">Terimakasih Telah Melakukan Pembayaran</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-50 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:border-gray-500 . dark:focus:ring-gray-600">Close</button>
            </div>
        </div>
    </div>
</div>

          </div>
      </div>
  </div>
      <!--popup end-->
</x-app-layout>