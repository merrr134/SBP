@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-black flex items-center justify-center bg-primary-light" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
      <!-- Overlay -->
      <div class="absolute inset-0 "></div>
  
      <!-- Content -->
      <div class="relative z-10 w-full">
          <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
              <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">TENTANG-SITE</h1>
          </div>
          <nav class="flex lg:px-36 px-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
              <li class="inline-flex items-center">
                <a href="/" class="inline-flex items-center text-sm font-medium text-black dark:text-black ">
                  <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="#" class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black ">Tentang Kami</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black">Tentang-Site</span>
                </div>
              </li>
            </ol>
          </nav>
      </div>
</section>
<section id="about-us" class="max-w-screen-xl mx-auto py-8 px-4 md:px-8 lg:mb-36">
    <!-- Judul Tentang Kami -->
    <div class="w-full mb-8">
        <h2 class="text-3xl font-bold dark:text-black text-start mb-4">
            Tentang-Site PT Sumber <br/> Bumi Putera
        </h2>
    </div>

    <!-- Content Section: Text and Image -->
    <div class="flex flex-col md:flex-row items-center justify-between">
        <!-- Text Content -->
        <div class="w-full md:w-1/2 text-left mb-8 md:mb-0">
            <p class="text-lg mb-6">
                Site PT.Sumber Bumi Putera Berajarak 128KM dari <br/> kendari atau kurang lebih memakan waktu sekitar 3 <br/> jam dengan menempuh jalur darat. <br/><br/>Luas Wilayah Izin Usaha Pertambangan SBP <br/> adalah 2 18,21 Ha.Terletak di desa Pusukuli,<br/> kelurahan Tapunggea, Kecamatan Molowe,<br/> Kabupaten Konawe Utara provinsi Sulawesi<br/>Tenggara.<br/><br/>Jarak hauling road PT.Sumber Bumi Putera dari PIT ke<br/>stockpile adalah 3,5 KM, jarak dari PIT ke jetty cinta <br/> jaya adalah 9,5 KM 
            </p>
        </div>

        <!-- Image Content -->
        <div class="w-full md:w-1/3">
            <img
                src="{{ asset('images/tentangsite.svg') }}"
                alt="About Us"
                class="w-full h-auto object-cover rounded-lg shadow-lg"
            />
        </div>
    </div>
</section>

@endsection
