<x-app-layout>
    <div class="ms-[100px] mt-8">
        <p><strong>{{ Auth::user()->name }}</strong></p>
        <p>{{ Auth::user()->address }}</p>
    </div>

    
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-[#C8CBC0]">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        <strong>Bulan Tagihan</strong>
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        <strong>Rupiah</strong>
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        <strong>Keterangan</strong>
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