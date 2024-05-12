@extends('layouts.layout')

@section('container')

    <script type="text/javascript" src="{{ 'jquery/jquery.min.js' }}"></script>

    <!-- ajax untuk realtime -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#accelerationx").load("{{ url('bacampu_accx') }}");
                $("#accelerationy").load("{{ url('bacampu_accy') }}");
                $("#accelerationz").load("{{ url('bacampu_accz') }}");
                $("#gyrox").load("{{ url('bacampu_gyrox') }}");
                $("#gyroy").load("{{ url('bacampu_gyroy') }}");
                $("#gyroz").load("{{ url('bacampu_gyroz') }}");
                $("#rain_curah").load("{{ url('bacarain_curah') }}");
                $("#rain_tip").load("{{ url('bacarain_tip') }}");
                $("#statussiaga").load("{{ url('statussiaga') }}");
                $("#statusmpu").load("{{ url('statusmpu') }}");
                $("#statushujan").load("{{ url('statushujan') }}");
            }, 1000);
        });
    </script>


    <section class="my-12 lg:my-16 xl:my-20">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12">
            <h1 class="text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-3xl font-semibold text-center">
                MONITORING WILAYAH RAWAN BENCANA ALAM TANAH LONGSOR</h1>
            <p class="text-sm sm:text-[15px] md:text-base lg:text-[17px] xl:text-lg mt-2 text-center">KELURAHAN
                TINJOMOYO</p>
        </div>
    </section>

    <section class="my-10 lg:my-12 xl:my-16">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-10">
            <div class="bg-[#1988d3] bg-opacity-90 rounded-lg px-5 py-4 w-fit border-2">
                <div class="text-[15px] sm:text-base md:text-[17px] lg:text-lg xl:text-xl flex">
                    <p class="mr-1 mt-1 lg:mt-1">Status: </p>
                    <p id="statussiaga" class="font-semibold mr-2 mt-1 lg:mt-1">No Data</p>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]"
                        viewBox="0 0 512 512"> --}}
                        <path
                            d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </section>


    <section class="my-10 lg:my-12 xl:my-16">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-10">
            <p class="text-sm sm:text-[15px] md:text-base lg:text-[17px] xl:text-lg mt-2 font-semibold text-center">
                REALTIME SENSOR</p>
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-3">
            <table class="w-full border border-black">
                <thead class="border border-black">
                    <th
                        class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Gyro X</th>
                    <th
                        class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Gyro Y</th>
                    <th
                        class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Gyro Z</th>
                    <th
                        class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Curah Hujan (mm)</th>
                </thead>
                <tbody>
                    <tr class="border border-black">
                        <td id="gyrox" class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            No Data
                        </td>
                        <td id="gyroy" class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            No Data
                        </td>
                        <td id="gyroz" class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            No Data
                        </td>
                        <td id="rain_curah" class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            No Data
                        </td>
                </tbody>
            </table>
        </div>
    </section>

    <a type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-5 mr-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-right" href="riwayat">
        Riwayat Bacaan
        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </a>

    @endsection
