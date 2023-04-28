<x-app-layout>
    <div class="ms-[100px] mt-8">
        <p><strong>{{ Auth::user()->name }}</strong></p>
        <p>{{ Auth::user()->address }}</p>
    </div>

    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10">
        <table class="w-full text-base text-left text-gray-500 dark:text-gray-400">
            <thead class="text-base text-white uppercase bg-emerald-900">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Bulan Tagihan
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Rupiah
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Keterangan
                    </th>

                </tr>
            </thead>
            <tbody>
            @foreach($pembayaran as $pembayaran)
                <tr class="bg-white border-b text-center text-black" >
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap" >
                        {{$pembayaran['bulan']}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{$pembayaran['Rupiah']}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{$pembayaran['Keterangan']}}
                    </td>
                    @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>