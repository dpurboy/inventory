<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5" />
                    </svg>
                    <h2 class="ms-3 text-lg font-semibold text-gray-900">
                        Summary
                    </h2>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8 px-6 lg:px-8">
                <div class="bg-white text-center text-sm font-semibold text-green-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-5xl font-normal text-gray-800 pb-3">{{ $jml_barang_b }}</div>
                    Baru
                </div>
                <div class="bg-white text-center text-sm font-semibold text-red-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-5xl font-normal text-gray-800 pb-3">{{ $jml_barang_r }}</div>
                        Rusak
                    </div>
                <div class="bg-white text-center text-sm font-semibold text-yellow-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-5xl font-normal text-gray-800 pb-3">{{ $jml_barang_p }}</div>
                        Perlu Perbaikan
                    </div>
                <div class="bg-white text-center text-sm font-semibold text-blue-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-5xl font-normal text-gray-800 pb-3">{{ $jml_barang_d }}</div>
                        Dalam Perbaikan
                    </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                    </svg>
                    <h2 class="ms-3 text-lg font-semibold text-gray-900">
                        Chart
                    </h2>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 px-6 lg:px-8">
                <div class="bg-white text-left text-md font-semibold text-green-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-gray-800 pb-3 pl-5">
                        Baru
                    </div>
                    <div id="chart1" style="width: auto; height: 300px;"></div>
                </div>
                <div class="bg-white text-left text-md font-semibold text-red-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-gray-800 pb-3 pl-5">
                        Rusak
                    </div>
                    <div id="chart2" style="width: auto; height: 300px;"></div>
                </div>
                <div class="bg-white text-left text-md font-semibold text-yellow-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-gray-800 pb-3 pl-5">
                        Perlu Perbaikan
                    </div>
                    <div id="chart3" style="width: auto; height: 300px;"></div>
                </div>
                <div class="bg-white text-left text-md font-semibold text-blue-700 overflow-hidden shadow-xl sm:rounded-lg p-4 py-5">
                    <div class="text-gray-800 pb-3 pl-5">
                        Dalam Perbaikan
                    </div>
                    <div id="chart4" style="width: auto; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Data untuk pie chart
        var data1 = {
            chart: {
                type: 'pie'
            },
            series: {!! json_encode($result['series_b']) !!},
            labels: {!! json_encode($result['labels_b']) !!}
        };

        var data2 = {
            chart: {
                type: 'pie'
            },
            series: {!! json_encode($result['series_r']) !!},
            labels: {!! json_encode($result['labels_r']) !!}
        };

        var data3 = {
            chart: {
                type: 'pie'
            },
            series: {!! json_encode($result['series_p']) !!},
            labels: {!! json_encode($result['labels_p']) !!}
        };

        var data4 = {
            chart: {
                type: 'pie'
            },
            series: {!! json_encode($result['series_d']) !!},
            labels: {!! json_encode($result['labels_d']) !!}
        };

        // Inisialisasi dan gambar pie chart
        var chart1 = new ApexCharts(document.querySelector("#chart1"), data1);
        chart1.render();

        var chart2 = new ApexCharts(document.querySelector("#chart2"), data2);
        chart2.render();

        var chart3 = new ApexCharts(document.querySelector("#chart3"), data3);
        chart3.render();

        var chart4 = new ApexCharts(document.querySelector("#chart4"), data4);
        chart4.render();
    </script>

</x-app-layout>

