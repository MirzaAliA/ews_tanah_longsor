@extends('layouts.layout')

@section('container')

    <!--SELAMAT DATANG-->
    <section class="my-10 lg:my-12 xl:my-16 md:flex">
        <div class="md:w-1/2 mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16 mt-10 lg:mt-[52px] xl:mt-[68px]">
            <h1 class="text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-4xl font-semibold">
                Selamat Datang di Website Early Warning System Kami!
            </h1>
            <p class="text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-lg mt-3 lg:mt-4 xl:mt-6">
                Website ini memberikan informasi mengenai monitoring bencana alam
                tanah longsor khususnya di wilayah Kota Semarang yang berbasis
                Internet of Things.
            </p>
        </div>
        <div class="md:w-1/2 mx-5 md:mx-0 mt-5 md:mt-0 lg:ml-10 xl:ml-16">
            <img src="../assets/tanah%20hd.png"
                class="rounded-3xl md:rounded-r-none md:rounded-l-[50px] w-[350px] sm:w-[370px] md:w-full h-[230px] sm:h-[240px] lg:h-[280px] xl:h-[350px] mx-auto object-cover object-center" />
        </div>
    </section>

    <!--  DEFINISI-->
    <section class="my-12 lg:my-16 xl:my-20 md:flex">
        <div
            class="md:w-1/2 bg-[#EB8D37] bg-opacity-80 py-8 xl:py-10 px-5 sm:px-7 md:px-8 lg:px-12 xl:px-16 h-fit rounded-r-3xl">
            <h1 class="font-semibold text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-3xl">
                Apa itu Early Warning System Tanah Longsor?
            </h1>
            <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base mt-4 xl:mt-5">
                Early Warning System (EWS) Tanah Longsor adalah sistem yang dirancang
                untuk mendeteksi potensi terjadinya tanah longsor dan memberikan
                peringatan dini kepada masyarakat yang tinggal di daerah rawan
                longsor.
            </p>
            <p class="text-[13px] sm:text-sm md:text-[14.5px] lg:text-[15px] xl:text-base mt-3 xl:mt-3.5">
                Tujuan utama dari EWS Tanah Longsor adalah untuk meningkatkan
                kesiapsiagaan dan keselamatan masyarakat dalam menghadapi ancaman
                bencana tanah longsor. Dengan adanya peringatan dini, diharapkan
                masyarakat dapat melakukan langkah-langkah mitigasi seperti evakuasi
                atau pengurangan kerentanan struktural, sehingga dapat mengurangi
                dampak negatif dari tanah longsor yang terjadi.
            </p>
        </div>
        <div class="hidden md:block md:w-1/2 px-5 lg:px-16 xl:px-16">
            <img class="w-[400px] lg:w-[430px] xl:w-[450px] max-h-[360px] h-full xl:max-h-[400px] object-cover object-center justify-center mx-auto"
                src="../assets/bro.png" />
        </div>
    </section>

    <!--FUNGSI-->
    <section class="my-12 lg:my-16 xl:my-20 md:flex">
        <div class="md:w-1/2 hidden md:block">
            <img src="../assets/pana.png"
                class="w-[400px] lg:w-[430px] xl:w-[450px] max-h-[360px] h-full lg:max-h-[380px] xl:max-h-[400px] object-cover object-center justify-center mx-auto" />
        </div>
        <div class="md:ml-16 md:w-1/2 mx-5 sm:mx-7 md:mx-8 lg:mx-12 xl:mx-16">
            <h1 class="font-semibold text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-3xl md:text-right">
                Fungsi Early Warning System Tanah Longsor
            </h1>
            <div class="grid grid-cols-2 gap-8 lg:gap-10 mt-6 lg:mt-8 xl:mt-10">
                <div
                    class="bg-[#76C88A] rounded-2xl bg-opacity-40 border border-black border-opacity-30 px-3 py-3 md:py-5">
                    <img src="../assets/tdesign_radar.png" class="h-10 w-10 md:w-12 md:h-12 lg:h-16 lg:w-16 mx-auto" />
                    <p
                        class="text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] font-medium mt-2 lg:mt-3 text-center">
                        Deteksi Cepat
                    </p>
                </div>
                <div
                    class="bg-[#76C88A] rounded-2xl bg-opacity-40 border border-black border-opacity-30 px-3 py-3 md:py-5">
                    <img src="../assets/pajamas_warning-solid.png"
                        class="h-10 w-10 md:w-12 md:h-12 lg:h-16 lg:w-16 mx-auto" />
                    <p
                        class="text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] font-medium mt-2 lg:mt-3 text-center">
                        Peringatan Dini
                    </p>
                </div>
                <div
                    class="bg-[#76C88A] rounded-2xl bg-opacity-40 border border-black border-opacity-30 px-3 py-3 md:py-5">
                    <img src="../assets/Vector.png" class="h-10 w-10 md:w-12 md:h-12 lg:h-16 lg:w-16 mx-auto" />
                    <p
                        class="text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] font-medium mt-2 lg:mt-3 text-center">
                        Mitigasi Risiko
                    </p>
                </div>
                <div
                    class="bg-[#76C88A] rounded-2xl bg-opacity-40 border border-black border-opacity-30 px-3 py-3 md:py-5">
                    <img src="../assets/mdi_human-greeting.png"
                        class="h-10 w-10 md:w-12 md:h-12 lg:h-16 lg:w-16 mx-auto" />
                    <p
                        class="text-[13px] sm:text-sm md:text-[15px] lg:text-base xl:text-[17px] font-medium mt-2 lg:mt-3 text-center">
                        Keselamatan Masyarakat
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- PETA LOKASI -->
    <section class="my-12 lg:my-16 xl:my-20 md:flex">
        <h1
            class="mx-5 sm:mx-7 md:mx-8 lg:mx-12 md:w-1/3 mb-5 md:mt-28 font-semibold text-xl sm:text-[21px] md:text-[22px] lg:text-2xl xl:text-3xl">
            Peta Lokasi Alat Monitoring EWS Tanah Longsor
        </h1>
        <div class="mx-5 sm:mx-7 md:mr-8 lg:mr-12 w-2/3">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.121649506487!2d110.40182924394135!3d-7.035075437468642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b92ef75d6a7%3A0x5a1acbf1ddb91d13!2sTinjomoyo%2C%20Kec.%20Banyumanik%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1714624135851!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" class="w-full h-[300px]"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div></div>
    </section>

@endsection
