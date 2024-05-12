@extends('layouts.layout')

@section('container')


    <section class="my-12 lg:my-16 xl:my-20">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12">
            <h1 class="text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-3xl font-semibold text-center">
                DATA RIWAYAT MONITORING WILAYAH RAWAN TANAH LONGSOR</h1>
            <p class="text-sm sm:text-[15px] md:text-base lg:text-[17px] xl:text-lg mt-2 text-center">KELURAHAN
                TINJOMOYO</p>
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
                    const xValues = {!! json_encode($datachart->pluck('created_at')) !!};
                    const yValues1 = {!! json_encode($datachart->pluck('mpus_gyrox')) !!};
                    const yValues2 = {!! json_encode($datachart->pluck('mpus_gyroy')) !!};
                    const yValues3 = {!! json_encode($datachart->pluck('mpus_gyroz')) !!};

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                label: 'Data 1',
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "#FFA1A1",
                                borderColor: "#D31919",
                                data: yValues1,
                            }, {
                                label: 'Data 2',
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "#A1FFA1",
                                borderColor: "#19D319",
                                data: yValues2,
                            }, {
                                label: 'Data 3',
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "#A1CDFF",
                                borderColor: "#1995D3",
                                data: yValues3,
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        min: 0,
                                        max: 10
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
                    const xValues2 = {!! json_encode($datachart->pluck('updated_at')) !!};
                    const yValues4 = {!! json_encode($datachart->pluck('rains_curah')) !!};

                    new Chart("myChart2", {
                        type: "line",
                        data: {
                            labels: xValues2,
                            datasets: [{
                                fill: true,
                                lineTension: 0,
                                backgroundColor: "#00BEDE",
                                borderColor: "#004F81",
                                data: yValues4,
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        min: 0,
                                        max: 10
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
                    <tr>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">No</th>
                        {{-- <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Status Siaga</th> --}}
                        {{-- <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Status Tanah</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Status Hujan</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Kecepatan Sumbu X</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Kecepatan Sumbu Y</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Kecepatan Sumbu Z</th> --}}
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Gyro Sumbu X</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Gyro Sumbu Y</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Gyro Sumbu Z</th>
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Curah Hujan</th>
                        {{-- <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Tip Hujan</th> --}}
                        <th class="border border-black py-2 bg-[#DDD8BC] font-semibold text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datachart as $key => $item)
                        <tr>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $key + 1 }}</td>
                            {{-- <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->statuss_siaga }}</td> --}}
                            {{-- <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->statuss_mpu }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->statuss_hujan }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->mpus_accelerationx }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->mpus_accelerationy }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->mpus_accelerationz }}</td> --}}
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->mpus_gyrox }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->mpus_gyroy }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->mpus_gyroz }}</td>
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->rains_curah }}</td>
                            {{-- <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->rains_tip }}</td> --}}
                            <td class="border border-black text-center text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px]">{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
