@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-black flex items-center justify-center bg-primary-light" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
      <!-- Overlay -->
      <div class="absolute inset-0 "></div>
  
      <!-- Content -->
      <div class="relative z-10 w-full">
          <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
              <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">SEJARAH SINGKAT</h1>
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
                  <span class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black">Sejarah Singkat</span>
                </div>
              </li>
            </ol>
          </nav>
      </div>
</section>
<section id="sejarah" class="py-8 px-4 md:px-8 max-w-screen-xl mx-auto">
    <!-- Sejarah Singkat -->
    <div class="text-left mb-8">
        <h2 class="text-3xl font-bold dark:text-black mb-4">Sejarah Singkat</h2>
    </div>

    <!-- Gambar Sejarah -->
    <div class="w-full mb-16">
        <img src="{{ asset('images/sejarah.svg') }}" alt="Sejarah" class="w-full h-auto object-cover rounded-lg">
    </div>

    <!-- Teks dan Pembatas Baris -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 lg:mb-36">
        <!-- Teks 1 dengan garis -->
        <div class="flex items-center justify-center">
            <p class="lg:text-center md:text-start text-sm md:text-base mx-4">SBP didirikan pada tahun 2018, dan memulai eksplorasi pada tahun
                2019. Dan mulai melakukan produksi pada tahun 2020 sampai dengan
                sekarang</p> <!-- Menambahkan margin horizontal -->
            <div class="border-l-2 h-36 mx-4 border-green-300"></div> <!-- Menambahkan margin horizontal di sini juga -->
        </div>

        <!-- Teks 2 dengan garis -->
        <div class="flex items-center justify-center">
            <p class="lg:text-center md:text-start text-sm md:text-base mx-4">PT. Sumber Bumi Putera telah memiliki
                izin usaha pertambangan / IUP dengan
                nomor 259/DPM-PTSP/III/2018.
                Dan memiliki luas lahan IUP sebesar
                218,21 Ha.</p>
            <div class="border-l-2 h-36 mx-4 border-green-300"></div>
        </div>

        <!-- Teks 3 dengan garis -->
        <div class="flex items-center justify-center">
            <p class="lg:text-center md:text-start text-sm md:text-base mx-4">PT. Sumber Bumi Putera
                Sudah terdaftar di DIRJEN Pajak
                Dengan Nomor Pokok Wajib Pajak
                83.802.002.2-811.000</p>
            <div class="border-l-2 h-36 mx-4 border-green-300"></div>
        </div>

        <!-- Teks 4 tanpa garis pembatas -->
        <div class="flex items-center justify-center">
            <p class="lg:text-center md:text-start text-sm md:text-base mx-4">PT. Sumber Bumi Putera
                Sudah Terdaftar di BKPM dengan Nomor Izin Berusaha 912010082003</p>
        </div>
    </div>
</section>

@endsection
