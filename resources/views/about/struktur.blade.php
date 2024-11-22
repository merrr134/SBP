@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-black flex items-center justify-center bg-primary-light" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
      <!-- Overlay -->
      <div class="absolute inset-0 "></div>
  
      <!-- Content -->
      <div class="relative z-10 w-full">
            <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
                  <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">STRUKTUR ORGANISASI</h1>
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
                        <span class="ms-1 text-sm font-medium text-whitblacke md:ms-2 dark:text-black">Struktur Organisasi</span>
                      </div>
                    </li>
                  </ol>
                </nav>
      </div>
</section>
<section id="struktur" class="py-8 px-4 md:px-8 max-w-screen-xl mx-auto">
      <!-- Judul Struktur -->
      <div class="text-left mb-8">
          <h2 class="text-3xl font-bold dark:text-black mb-4">Struktur Organisasi</h2>
      </div>
  
      <!-- Gambar Struktur -->
      <div class="w-full mb-8">
          <img src="{{ asset('images/struktur.svg') }}" alt="Struktur Organisasi" class="w-full h-auto object-cover rounded-lg shadow-lg">
      </div>
  </section>
  
@endsection
