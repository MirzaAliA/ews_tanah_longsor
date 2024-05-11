@extends('layouts.layout')

@section('container')
    <section class="my-12 lg:my-16 xl:my-20">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12">
            <h1 class="text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-3xl font-semibold text-center">LANGKAH
                MITIGASI TANDA-TANDA UTAMA BENCANA TANAH LONGSOR</h1>
            <p class="text-sm sm:text-[15px] md:text-base lg:text-[17px] xl:text-lg mt-2 text-center">Untuk Masyarakat
                Sekitar Kejadian Tanah Longsor</p>
        </div>
    </section>

    <section class="my-6 lg:my-10 xl:my-12">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 flex">
            <a href="aman">
                <div class="py-2 px-3 bg-[#0D747E] w-fit rounded-md  hover:scale-105 duration-300 mr-5">
                    <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base text-white">Aman</p>
                </div>
            </a>
            <a href="siaga">
                <div class="py-2 px-3 bg-[#0D747E] w-fit rounded-md  hover:scale-105 duration-300 mr-5">
                    <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base text-white">Siaga</p>
                </div>
            </a>
            <a href="bahaya">
                <div class="py-2 px-3 bg-[#0D747E] w-fit rounded-md  hover:scale-105 duration-300 mr-5">
                    <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base text-white">Bahaya</p>
                </div>
            </a>
        </div>
    </section>

    <section class="my-5 lg:my-6 xl:my-8">
        <div class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 md:grid md:grid-cols-2 gap-5 md:gap-8 xl:gap-10">
            <div class="bg-[#B0D9B1] rounded-lg flex h-[90px] sm:h-[110px] border border-black border-opacity-30">
                <div class="bg-white px-2 py-2 rounded-lg mr-5 w-[100px]">
                    <img src="../assets/siaga 1.png"
                        class=" h-[50px] mt-3 sm:mt-0 sm:h-[90px] sm:w-[90px] mx-auto object-center object-cover">
                </div>
                <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base mt-5 sm:mt-9">Munculnya
                    retakan vertikal pada tebing. </p>
            </div>
            <div class="bg-[#B0D9B1] rounded-lg flex h-[90px] sm:h-[110px] border border-black border-opacity-30">
                <div class="bg-white px-2 py-2 rounded-lg mr-5 lg:w-[100px]">
                    <img src="../assets/siaga 2.png"
                        class=" h-[120px] mt-3 sm:mt-0 sm:h-[90px] sm:w-full mx-auto object-center object-cover">
                </div>
                <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base mt-1 sm:mt-5 lg:mt-10">
                    Munculnya air tanah secara tiba-tiba.
                </p>
            </div>
            <div class="bg-[#B0D9B1] rounded-lg flex h-[90px] sm:h-[110px] border border-black border-opacity-30">
                <div class="bg-white px-2 py-2 rounded-lg mr-5 lg:w-[100px]">
                    <img src="../assets/siaga 3.png"
                        class=" h-[80px] mt-3 sm:mt-0 sm:h-[90px] sm:w-full mx-auto object-center object-cover">
                </div>
                <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base mt-1 sm:mt-5 lg:mt-10">Air
                    sumur di sekitar tebing menjadi keruh.</p>
            </div>
            <div class="bg-[#B0D9B1] rounded-lg flex h-[90px] sm:h-[110px] border border-black border-opacity-30">
                <div class="bg-white px-2 py-2 rounded-lg mr-5 lg:w-[100px]">
                    <img src="../assets/siaga 4.png"
                        class=" h-[150px] mt-3 sm:mt-0 sm:h-[90px] sm:w-full mx-auto object-center object-cover">
                </div>
                <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base mt-1 sm:mt-5 lg:mt-10">
                    Adanya longsoran batu-batu kecil.</p>
            </div>
        </div>
    </section>

@endsection
