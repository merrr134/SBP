@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-black flex items-center justify-center bg-blue-200" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 "></div>

    <!-- Content -->
    <div class="relative z-10 w-full">
        <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">TENTANG KAMI</h1>
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
                <span class="ms-1 text-sm font-medium text-black md:ms-2 dark:text-black">Visi & Misi</span>
              </div>
            </li>
          </ol>
        </nav>
    </div>
</section>

<section id="about-us" class="flex flex-col md:flex-row items-center justify-between py-8 px-4 md:px-8 max-w-screen-xl mx-auto lg:mb-36 ">
      <!-- Text Content -->
      <div class="w-full md:w-1/2 text-left md:text-left mb-8 md:mb-0">
          <h2 class="text-3xl font-bold dark:text-black mb-4">
              Tentang Kami PT Sumber <br/> Bumi Putera
          </h2>
          <p class="text-lg mb-6">
            PT Sumber Bumi Putera  (PT SBP) adalah sebuah perusahaan yang <br/> bergerak di industri pertambangan Bijih Nikel dengan Nomor Izin <br/> Usaha pertambangan operasi  Produksi (IUP OP) 259/DPM-PTSP/ <br/> III/2018 yang didirikan pada tahun 2018. Lokasi tambang PT SBP <br/>berada  di Blok Mandiodo, tepatnya di Desa puusili, kel. Tappunggaya,<br/> Kec.Molowale, Provinsi Sulawesi Tenggara. <br/><br/> 

            PT Sumber Bumi Putera berdiri dengan komitmen kuat terhadap <br/>kualitas dan keberlanjutan, kami berfokus pada eksplorasi,<br/> penambangan, dan pemasaran nikel yang berkualitas tinggi. Dalam <br/> industri yang dinamis ini, kami senantiasa mengedapankan inovasi dan <br/>teknologi modern untuk memastikan efisiensi operational serta <br/>keselamatan kerja yang optimal
                         
          </p>
      </div>
  
      <!-- Image Content -->
      <div class="w-full md:w-1/2">
          <img
              src="{{ asset('images/tentangkami.svg') }}"
              alt="About Us"
              class="w-full h-auto object-cover rounded-lg shadow-lg"
          />
          <!-- Additional Text Below Image -->
          <p class="mt-4 text-center text-sm md:text-base text-gray-600">
              Sulawesi Tenggara terkenal sebagai daerah penghasil Bijih Nikel terbesar di Indonesia, dan Indonesia merupakan negara dengan cadangan Nikel terbesar di Dunia (Goostats.id, 2024).
          </p>
      </div>
</section>
@endsection
