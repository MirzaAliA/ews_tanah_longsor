<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8" />
    <title>Early Warning System</title>
    <link rel="icon" href="../assets/logo-fix.png" type="image/png" />
    <link href="/public/css/output.css" rel="stylesheet" />
    <!-- PENTING!!!! -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/charts.css/dist/charts.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="font-ews bg-[#F6F4EB]">

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

    <nav class="bg-[#63B578] w-full py-3 flex">
        <div class="flex md:w-2/5 lg:w-1/3 font-nav ml-2 sm:ml-3 md:ml-10 lg:ml-12 xl:ml-16 mr-2">
            <img class="w-[70px]" src="../assets/logo-fix.png" />
            <div class="">
                <h1 class="text-2xl font-semibold">Early Warning System</h1>
                <p class="text-lg font-medium">Tanah Longsor</p>
            </div>
        </div>
        <!-- Khusus navigasi-->
        <div class="md:w-3/5 lg:w-2/3 my-auto ml-auto">
            <!-- button hamburger -->
            <div id="hamburger" class="block md:hidden bg-[#F6F4EB] px-2 py-2 ml-auto mr-5 h-fit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5" fill="#000">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
            </div>
            <!-- TAMPILAN LAPTOP -->
            <div id="menu" class="hidden md:block w-full">
                <div class="flex justify-evenly">
                    <a class="" href="/">
                        <p
                            class="text-sm font-regular lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                            Beranda
                        </p>
                    </a>
                    <a class="" href="monitoring">
                        <p
                            class="text-sm font-semibold lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                            Monitoring
                        </p>
                    </a>
                    <a class="" href="mitigasi">
                        <p class="text-sm font-regular-[#DDF1E1] hover:underline hover:underline-offset-8">
                            Langkah Mitigasi
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tampilan HP -->
        <div id="hpMenu" class="hidden md:hidden bg-[#F6F4EB] px-2 py-2 ml-auto mr-5 w-full">
            <div class="flex flex-col items-center">
                <a class="" href="/">
                    <p
                        class="text-sm font-regular lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                        Beranda
                    </p>
                </a>
                <a class="" href="monitoring">
                    <p
                        class="text-sm font-semibold lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                        Monitoring
                    </p>
                </a>
                <a class="" href="mitigasi">
                    <p class="text-sm font-regular-[#DDF1E1] hover:underline hover:underline-offset-8">
                        Langkah Mitigasi
                    </p>
                </a>
            </div>
        </div>
    </nav>



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
            <div class="bg-[#D31919] bg-opacity-90 rounded-lg px-5 py-4 w-fit">
                <div class="text-[15px] sm:text-base md:text-[17px] lg:text-lg xl:text-xl flex">
                    <p class="mr-2 mt-1 lg:mt-1.5">Status: </p>
                    <p class="font-semibold mr-5 mt-1 lg:mt-1.5">BAHAYA</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]"
                        viewBox="0 0 512 512">
                        <path
                            d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="my-10 lg:my-12 xl:my-16">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-10 flex">
            <div class="w-1/2">
                <div>
                    <p class="text-sm sm:text-[15px] md:text-base lg:text-[17px] xl:text-lg font-semibold text-center">
                        Kemiringan Tanah</p>
                </div>
                <div class="flex justify-center">
                    <canvas id="myChart" style="width:100%;max-width:500px"></canvas>
                </div>

                <script>
                    const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
                    const yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "#FFA1A1",
                                borderColor: "#D31919",
                                data: yValues,
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        min: 6,
                                        max: 16
                                    }
                                }],
                            }
                        }
                    });
                </script>
            </div>
            <div class="w-1/2">
                <div>
                    <p class="text-sm sm:text-[15px] md:text-base lg:text-[17px] xl:text-lg font-semibold text-center">
                        Curah Hujan</p>
                </div>
                <div class="flex justify-center">
                    <canvas id="myChart2" style="width:100%;max-width:500px"></canvas>
                </div>

                <script>
                    const xValues2 = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
                    const yValues2 = [5, 7, 7, 8, 8, 7, 8, 9, 12, 13, 14];

                    new Chart("myChart2", {
                        type: "line",
                        data: {
                            labels: xValues2,
                            datasets: [{
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "#00BEDE",
                                borderColor: "#004F81",
                                data: yValues2,
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        min: 4,
                                        max: 14
                                    }
                                }],
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </section>

    <section class="my-10 lg:my-12 xl:my-16">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-10">
            <table class="w-full border border-black">
                <thead class="border border-black">
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Waktu</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Curah Hujan (mL)</th>
                    <th
                        class="py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                        Kemiringan Tanah (derajat)</th>
                </thead>
                <tbody>
                    <tr class="border border-black">
                        <td class="border border-black">
                            <div>
                                <p
                                    class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                    Jumat, 3 Mei 2024</p>
                            </div>
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>19.00 WIB</p>
                            </div>
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            50
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            60
                        </td>
                    </tr>
                    <tr class="border border-black">
                        <td class="border border-black">
                            <div>
                                <p
                                    class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                    Jumat, 3 Mei 2024</p>
                            </div>
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>20.00 WIB</p>
                            </div>
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            50
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            70
                        </td>
                    </tr>
                    <tr class="border border-black">
                        <td class="border border-black">
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>Jumat, 3 Mei 2024</p>
                            </div>
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>21.00 WIB</p>
                            </div>
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            70
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            100
                        </td>
                    </tr>
                    <tr class="border border-black">
                        <td class="border border-black">
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>Jumat, 3 Mei 2024</p>
                            </div>
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>22.00 WIB</p>
                            </div>
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            80
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            120
                        </td>
                    </tr>
                    <tr class="border border-black">
                        <td class="border border-black">
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>Jumat, 3 Mei 2024</p>
                            </div>
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>23.00 WIB</p>
                            </div>
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            50
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            120
                        </td>
                    </tr>
                    <tr class="border border-black">
                        <td class="border border-black">
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>Jumat, 3 Mei 2024</p>
                            </div>
                            <div class="text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                                <p>00.00 WIB</p>
                            </div>
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            40
                        </td>
                        <td
                            class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">
                            120
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- FOOTER -->
    <div class="bg-[#63B578] w-full py-10 md:flex">
        <div class="flex md:w-3/5 lg:w-1/3 font-nav ml-2 sm:ml-3 md:ml-10 lg:ml-12 xl:ml-16 mr-2">
            <img class="w-[70px]" src="../assets/logo-fix.png" alt="Logo">
            <div>
                <h1 class="text-2xl font-semibold">Early Warning System</h1>
                <p class="text-lg font-medium">Tanah Longsor</p>
            </div>
        </div>
        <div class="md:w-1/5 lg:w-1/3 mt-2 ml-5 sm:ml-7 md:ml-0 md:mt-0">
            <div class="flex ">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5 mr-1.5" viewBox="0 0 512 512">
                    <path
                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                </svg>
                <p class="text-xs sm:text-[13px] lg:text-sm">
                    capstone20@gmail.com
                </p>
            </div>
            <div class="flex mt-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-1 mr-1.5" viewBox="0 0 512 512">
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <p class="text-xs sm:text-[13px] lg:text-sm mt-0.5">
                    0878-4487-7658
                </p>
            </div>
        </div>

        <div class="md:w-1/5 lg:w-1/3 ml-5 sm:ml-7 mt-5 md:ml-0 md:mt-0">
            <div>
                <a href="/">
                    <p class="text-xs sm:text-[13px] lg:text-sm hover:text-white hover:font-semibold">
                        Beranda
                    </p>
                </a>
            </div>
            <div>
                <a href="monitoring">
                    <p class="text-xs sm:text-[13px] lg:text-sm hover:text-white hover:font-semibold">
                        Monitoring
                    </p>
                </a>
            </div>
            <div>
                <a href="mitigasi">
                    <p class="text-xs sm:text-[13px] lg:text-sm hover:text-white hover:font-semibold">
                        Langkah Mitigasi
                    </p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>

</body>

</html>
