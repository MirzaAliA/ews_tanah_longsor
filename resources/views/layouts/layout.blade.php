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

<body>
    <!--  NAVIGASI-->
    <nav class="bg-[#63B578] w-full py-3 flex" href="/">
        <div class="flex md:w-2/5 lg:w-1/3 font-nav ml-2 sm:ml-3 md:ml-10 lg:ml-12 xl:ml-16 mr-2">
            <img class="w-[70px]" src="../assets/logo-fix.png" />
            <div class="" href="/">
                <h1 class="text-2xl font-semibold">Early Warning System</h1>
                <p class="text-lg font-medium">Tanah Longsor</p>
            </div>
        </div>
        <!--      Khusus navigasi-->
        <div class="md:w-3/5 lg:w-2/3 my-auto ml-auto">
            <div class="block md:hidden bg-[#F6F4EB] px-2 py-2 ml-auto mr-5 h-fit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5" fill="#000">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
            </div>
            <div class="hidden md:block">
                <div class="flex justify-evenly">
                    <a class="" href="/">
                        <p
                            class="text-sm font-regular lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                            Beranda
                        </p>
                    </a>
                    <a class="" href="monitoring">
                        <p
                            class="text-sm font-regular lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                            Monitoring
                        </p>
                    </a>
                    <a class="" href="mitigasi">
                        <p
                            class="text-sm font-semibold lg:text-[15px] xl:text-base hover:text-[#DDF1E1] hover:underline hover:underline-offset-8">
                            Langkah Mitigasi
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div>
        @yield('container')
    </div>

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