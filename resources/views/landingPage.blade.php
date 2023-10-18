@extends('layout')


@section('content')

<!-- start of hero section -->
<section class="relative min-h-screen flex flex-col pt-24 max-lg:px-4 max-w-[1440px] mx-auto" data-aos="fade-up"
    data-aos-duration="1000">
    <div class="flex max-lg:flex-col justify-between">
        <div class="flex flex-col max-lg:items-center">
            <div
                class="bg-[#50D890] flex items-center justify-center px-[10px] py-[5px] md:px-[20px] md:py-[10px] rounded-[20px] text-white text-[12px] md:text-[20px] font-[500] w-fit">
                <p>Selamat datang di Puri Medika</p>
            </div>
            <h1 class="lg:mt-[34px] mt-4 font-[700] text-[28px] md:text-[48px] lg:text-[61px] text-[#272727]">Yang
                berarti
            </h1>
            <h1 class="font-[700] text-[28px] lg:text-[61px] md:text-[48px] text-[#272727] max-lg:mb-4">akan segera
                kembali</h1>
        </div>
        <img src=" {{asset('images/hero-image1.png')}}" alt="hero-1">
    </div>
    <div class="relative" data-aos="fade-up" data-aos-duration="3000">
        <img src=" {{asset('images/hero-image2.png')}}" class="mt-4 w-full" alt=" hero-2">
        <p
            class="sm:absolute sm:max-w-[200px] lg:max-w-[298px] text-[#868585] font-[700] lg:right-12 sm:right-0 sm:top-5 lg:top-10 text-[12px] lg:text-[20px] max-sm:mt-4 max-sm:text-center">
            Kami
            akan
            selalu
            memastikan
            penanganan
            yang
            terbaik bagi
            orang yang
            berarti untuk anda.
        </p>
    </div>
</section>
<!-- end of hero section -->

<!-- start of service section -->
<section class="mt-12 min-h-screen max-w-[1440px] mx-auto" data-aos="fade-up" data-aos-duration="3000">
    <div class="flex flex-col bg-[#EDF5FA] rounded-[100px] p-12">
        <div class="w-[100px] h-[10px] bg-[#4F98CA] self-center"></div>
        <h2 class="text-[48px] text-center text-black font-[700] mt-[11px]">Pelayanan <span
                class="text-[#50D890]">Unggulan</span>
        </h2>
        <h1 class="font-[700] text-center text-[61px]">Puri Medika Akan Selalu Memberikan</h1>
        <h1 class="font-[700] text-center text-[61px]">Pelayanan Terbaik</h1>
        <div class="flex justify-center gap-8 mt-[47px]">
            <div class="flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="1000">
                <p class="text-[31px] font-[700] mb-[20px]">Poli Jantung</p>
                <a href="/">
                    <img src="{{asset('images/service-1.png')}}" alt="service-1">
                </a>
                <img src="{{asset('icons/service-1.png')}}" class="mt-[-4rem]" alt="service-icons1">
            </div>
            <div class="flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="2000">
                <p class="text-[31px] font-[700] mb-[20px]">Poli Gigi</p>
                <a href="/">
                    <img src="{{asset('images/service-2.png')}}" alt="service-2">
                </a>
                <img src="{{asset('icons/service-2.png')}}" class="mt-[-4rem]" alt="service-icons2">
            </div>
            <div class="flex flex-col justify-center items-center" data-aos="fade-up" data-aos-duration="3000">
                <p class="text-[31px] font-[700] mb-[20px]">Poli Mata</p>
                <a href="/">
                    <img src="{{asset('images/service-3.png')}}" alt="service-3">
                </a>
                <img src="{{asset('icons/service-3.png')}}" class="mt-[-4rem]" alt="service-icons3">
            </div>
        </div>
    </div>
</section>
<!-- end of service section -->

<!-- start of about section -->
<section class="mt-12 min-h-screen max-w-[1440px] mx-auto">
    <div class="flex flex-col">
        <div class="w-[100px] h-[10px] bg-[#4F98CA] self-center"></div>
        <h2 class="text-[48px] text-center text-black font-[700] mt-[11px]">Tentang <span class="text-[#50D890]">Kami
            </span>
        </h2>
        <div class="flex justify-between items-center mt-[64px]">
            <div class="grid grid-cols-2 gap-4 w-[620px]">
                <div class="col-span-2 rounded-[40px] py-[43px] bg-[#E5F0F7] px-12 shadow" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h4 class="text-[31px] font-[700] text-center">Mengapa Memilih Kami ?</h4>
                    <p class="text-center text-[16px] mt-2">
                        Memilih kami berarti memilih kualitas perawatan yang tak
                        tertandingi, empati sejati, dan kepedulian yang mendalam. Kami tidak hanya menyediakan layanan
                        medis terbaik, tetapi juga menciptakan pengalaman perawatan yang unik dan personal.</p>
                </div>

                <div class="rounded-[40px] py-[43px] bg-[#E5F9EE] px-12 shadow" data-aos="fade-up"
                    data-aos-duration="2000">
                    <h4 class="text-[31px] font-[700] text-center">Visi Kami</h4>
                    <p class="text-center text-[16px] mt-2">
                        Memberikan pelayanan kesehatan berkualitas tinggi dengan kepedulian, inovasi, dan
                        keberlanjutan untuk meningkatkan kesejahteraan masyarakat.</p>
                </div>
                <div class="rounded-[40px] py-[43px] bg-[#E5F9EE] px-12 shadow" data-aos="fade-up"
                    data-aos-duration="3000">
                    <h4 class="text-[31px] font-[700] text-center">Misi Kami</h4>
                    <p class="text-center text-[16px] mt-2">
                        Memberikan pelayanan kesehatan berkualitas tinggi dengan kepedulian, inovasi, dan
                        keberlanjutan untuk meningkatkan kesejahteraan masyarakat.</p>
                </div>
            </div>
            <img src="{{asset('images/about.png')}}" alt="about" data-aos="fade-up" data-aos-duration="3000">
        </div>
    </div>
</section>
<!-- end of about section -->

<!-- start of achivement section -->
<section class="flex justify-between items-center bg-[#2F5B79] px-[80px] mt-12 py-[60px]" data-aos="fade-up"
    data-aos-duration="3000">
    <div class=" flex flex-col">
        <h2 class="text-[39px] font-[700] text-white">Kami akan selalu siap</h2>
        <h2 class="text-[39px] font-[700] text-white">melayani Anda</h2>
        <a href="/"
            class="bg-[#50D890] flex items-center justify-center py-3 px-4 text-white rounded-[10px] font-bold text-[20px] w-fit mt-8">Lebih
            lanjut</a>
    </div>
    <div class="grid grid-cols-2 gap-12">
        <div class="flex flex-col">
            <h1 class="text-[40px] font-[700] text-white">8K+</h1>
            <p class="text-[20px] text-white font-[700]">Pasien Puas</p>
        </div>
        <div class="flex flex-col">
            <h1 class="text-[40px] font-[700] text-white">67</h1>
            <p class="text-[20px] text-white font-[700]">Total Penghargaan</p>
        </div>
        <div class="flex flex-col">
            <h1 class="text-[40px] font-[700] text-white">920</h1>
            <p class="text-[20px] text-white font-[700]">Masalah Selesai</p>
        </div>
        <div class="flex flex-col">
            <h1 class="text-[40px] font-[700] text-white">72+</h1>
            <p class="text-[20px] text-white font-[700]">Konferensi Diadakan</p>
        </div>
    </div>
</section>
<!-- end of achivement section -->

<!-- start of customer section -->
<section data-aos="fade-up" data-aos-duration="1000">
    <div class="flex flex-col mt-12 mx-auto max-w-[1440px]">
        <h2 class="text-[48px] text-center text-black font-[700] mt-[11px]">Apa yang dikatakan <span
                class="text-[#50D890]">
                Pasien ?
            </span>
        </h2>
        <div class="flex justify-between items-center mt-[30px]">
            <div data-aos="fade-up" data-aos-duration="2000">
                <p class="max-w-[515px] text-[#868585] font-[700] text-[20px]">"Pelayanan medis yang diberikan sangat
                    memuaskan. Staf kami berempati, memahami kekhawatiran kami, dan memberikan dukungan luar biasa
                    sepanjang
                    perjalanan pengobatan kami."</p>
                <div class="flex gap-4 mt-[30px] items-center">
                    <img src="{{asset('images/pasien-1.png')}}" alt="pasien-1">
                    <p class="text-[20px] font-[700]">Jane Cooper</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="3000">
                <p class="max-w-[515px] text-[#868585] font-[700] text-[20px]">"Kami sangat berterima kasih atas
                    perawatan
                    yang telaten dan penuh kepedulian yang kami terima di sini. Rumah sakit ini bukan hanya tempat
                    pengobatan, tetapi juga tempat di mana harapan pulih dan kenyamanan ditemukan."</p>
                <div class="flex gap-4 mt-[30px] items-center">
                    <img src="{{asset('images/pasien-2.png')}}" alt="pasien-2">
                    <p class="text-[20px] font-[700]">Esther Howard</p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('images/happy-customer.png')}}" class="w-full mt-12" alt="happy-pasien" data-aos="fade-up"
        data-aos-duration="3000">
</section>
<!-- end of customer section -->

<!-- start of location section -->
<section class="flex flex-col mt-12 mx-auto max-w-[1440px]" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-[48px] text-center text-black font-[700] mt-[11px]">Lokasi</h2>
    <div class="flex justify-evenly gap-8 mt-12 relative">
        <img src="{{asset('images/lokasi-1.png')}}" class="max-h-[444px]" alt="lokasi-1" data-aos="fade-up"
            data-aos-duration="1000">
        <img src="{{asset('images/lokasi-2.png')}}" class="mt-24" alt=" lokasi-2" data-aos="fade-up"
            data-aos-duration="2000">
        <img src="{{asset('images/lokasi-3.png')}}" class="max-h-[444px]" alt="lokasi-3" data-aos="fade-up"
            data-aos-duration="3000">
    </div>
</section>
<!-- end of location section -->
@endsection