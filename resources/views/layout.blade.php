<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puri Medika</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>



<body>
    <nav class="flex justify-between items-center mx-auto mt-[40px] max-w-[1440px] max-sm:px-5">
        <a href="/"> <img src="{{asset('images/logo.png')}}" alt="logo"></a>
        <ul class="flex items-center gap-[40px] text-[20px] text-[#868585] hidden sm:flex">
            <li><a href="/" class="hover:text-[#272727] transition-colors">Beranda</a></li>
            <li><a href=" /" class="hover:text-[#272727] transition-colors">Pasien/Pengunjung</a></li>
            <li><a href="/" class="hover:text-[#272727] transition-colors">Dokter</a></li>
            <li><a href="/" class="hover:text-[#272727] transition-colors">Layanan</a></li>
        </ul>
        <a href="/"
            class="bg-[#50D890] flex items-center justify-center py-3 px-4 text-white rounded-[10px] font-bold text-[20px] hidden sm:flex">Sign
            in</a>
    </nav>
    <main>@yield('content') </main>
    <footer class=" flex flex-col mt-12">
        <div class="flex justify-between bg-[#2F5B79] py-12 px-[80px] items-center"><img
                src="{{asset('images/logo.png')}}" alt="logo">
            <div class="flex items-center gap-8 text-white text-[20px]"><a href=" /">Pasien/Pengunjung</a><a
                    href="/">Dokter</a><a href="/">Layanan</a></div>
            <div class="flex items-center gap-2 text-white">
                <p class="mr-8">Ikuti Kami</p><img src=" {{asset('icons/Facebook.svg')}}" alt="facebook"><img
                    src="{{asset('icons/Instagram.png')}}" alt="instagram"><img src="{{asset('icons/Twitter.png')}}"
                    alt="twitter">
            </div>
        </div>
        <div class="bg-[#1C3547] flex justify-center items-center py-[40px] text-white text-[20px]">
            <p>© Puri Medika. All Rights Reserved</p>
        </div>
    </footer>
    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
    AOS.init();
    </script>
</body>

</html>