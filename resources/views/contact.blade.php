@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center text-black flex items-center justify-center bg-primary-light min-h-[80vh]" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
      <!-- Overlay -->
      <div class="absolute inset-0 "></div>
  
      <!-- Content -->
      <div class="relative z-10 w-full">
          <div class="container mx-auto text-start px-8 md:px-16 lg:px-36">
              <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">CONTACT</h1>
          </div>
          

<nav class="flex lg:px-36 px-8" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="#" class="inline-flex items-center text-sm font-medium text-black hover:text-blue-600 dark:text-black ">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
          </svg>
          Home
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-black-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
          <a href="#" class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black ">Contact</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </div>
      </li>
    </ol>
  </nav>
  
      </div>
  </section>
  
  <div class="relative z-20 max-w-screen-xl mx-auto bg-white  mb-36 -mt-36 rounded-lg">
      <div class="container mx-auto px-4 lg:px-0">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <!-- Bagian Map -->
              <div class="w-full">
                  <iframe 
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.696272158311!2d106.8060391!3d-6.207662399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f703a8b21b4f%3A0x6190051c939344fb!2sPT.%20Sumber%20Bumi%20Putera!5e0!3m2!1sid!2sid!4v1732170669802!5m2!1sid!2sid" 
                      width="100%" 
                      height="600" 
                      style="border:0;" 
                      allowfullscreen="" 
                      loading="lazy" 
                      class="w-full h-[400px] rounded-md">
                  </iframe>
              </div>
  
              <!-- Bagian Informasi Kontak -->
              <div class="p-6 rounded-lg ">
                  <h2 class="text-2xl font-semibold text-gray-800 lg:mt-8">Alamat</h2>
                  <p class="text-gray-600 mb-6">
                      Grand Slipi Tower, Jl. Letjen S. Parman No.1, <br> RT.1/RW.4, Palmerah, Kec. Palmerah, Kota Jakarta Barat, <br/> Daerah Khusus Ibukota Jakarta 11480
                  </p>
                  <div class="mb-4">
                      <h3 class="text-xl font-semibold text-gray-800">Phone</h3>
                      <p class="text-gray-600">+6221 29022227</p>
                  </div>
                  <div class="mt-8">
                      <h3 class="text-xl font-semibold text-gray-800">E-mail</h3>
                      <p class="text-gray-600">legalsbp028@gmail.com</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  
@endsection
