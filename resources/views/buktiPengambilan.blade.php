<x-app-layout>
    <div
    class="max-w-[1000px] p-6 mx-auto mt-[100px] bg-white border border-gray-200 rounded-lg shadow  ">
    <h1 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">From driver</h1>
    @if ($Gambar)
    @if ($Gambar->image)
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">sampah dari rumah anda Sudah di ambil</p>
    @endif
    @else
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 ">sampah dari rumah anda Belum di ambil</p>
    @endif
   

    <div class=" items-center max-w-[300px] mx-auto justify-center w-full pt-[80px]" style="max-height:350px;  overflow:hidden;">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 ">
            <img src="" alt="" style="padding-top: 10px">
            @if ($Gambar)
            @if ($Gambar->image)
            <img src="{{ asset('/storage/' . $Gambar->image)}}" alt="">
            @endif
            @else
            <img src="" alt="">
            @endif
            
        </label>
    </div> 
</div>
</x-app-layout>