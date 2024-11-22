@extends('layouts.app')

@section('content')
<section class="relative bg-cover bg-center h-[300px] md:h-[400px] text-white flex items-center justify-center bg-blue-400" style="background-image: url('{{ asset('images/struktur-bg.jpg') }}');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <!-- Content -->
    <div class="relative z-10 w-full">
        <div class="container mx-auto text-staart px-8 md:px-16 lg:px-36">
            <h1 class="text-3xl md:text-5xl font-bold mb-4 italic">Berita Terkini</h1>
        </div>
    </div>
</section>

<div class="bg-white py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">Berita Terbaru</h2>
        
        <!-- Grid untuk berita -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Berita 1 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/gambar1.png') }}" 
                         alt="Judul Berita 1" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-300 z-0">
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition duration-300">
                        Ini adalah judul berita dengan teks yang lebih panjang untuk menguji responsivitas desain.
                    </h3>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-300 relative group">
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-300">
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/gambar2.png') }}" 
                         alt="Judul Berita 2" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-300 z-0">
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition duration-300">
                        Judul berita kedua yang didesain modern agar menarik perhatian pembaca.
                    </h3>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-300 relative group">
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-300">
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

            <!-- Berita 3 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/gambar3.png') }}" 
                         alt="Judul Berita 3" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-300 z-0">
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition duration-300">
                        Judul berita ketiga yang tetap menarik perhatian meskipun teksnya panjang.
                    </h3>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-300 relative group">
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-300">
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

            <!-- Berita 4 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/gambar4.png') }}" 
                         alt="Judul Berita 4" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-300 z-0">
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition duration-300">
                        Judul berita keempat yang akan menarik pembaca lebih lanjut.
                    </h3>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-300 relative group">
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-300">
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

            <!-- Berita 5 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/gambar5.png') }}" 
                         alt="Judul Berita 5" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-300 z-0">
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition duration-300">
                        Judul berita kelima yang menarik untuk dibaca.
                    </h3>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-300 relative group">
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-300">
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

            <!-- Berita 6 -->
            <div class="relative bg-gray-100 rounded-xl shadow-lg overflow-hidden">
                <a href="#" class="block group relative">
                    <!-- Gambar -->
                    <img src="{{ asset('images/gambar6.png') }}" 
                         alt="Judul Berita 6" 
                         class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-300 z-0">
                </a>
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-3">12 November 2024</p>
                    <h3 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition duration-300">
                        Judul berita keenam yang memberikan pembaca informasi lebih lengkap.
                    </h3>
                    <!-- Tombol dengan animasi teks -->
                    <a href="#" 
                       class="mt-4 flex items-center text-blue-500 font-semibold transition-all duration-300 relative group">
                        <!-- Teks animasi masuk dari kiri (dimulai tersembunyi di kiri) -->
                        <span 
                            class="ml-2 opacity-0 transform translate-x-[-100%] group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                            Selengkapnya
                        </span>
                        <!-- Panah dengan animasi -->
                        <span 
                            class="arrow text-2xl absolute left-0 opacity-100 ml-2 transform group-hover:left-20 group-hover:ml-8 transition-all duration-300">
                            &#8594;
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="max-w-7xl mx-auto mb-36">
    <nav aria-label="Page navigation example ">
        <ul class="flex items-center -space-x-px h-10 text-base">
          <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-black bg-white border border-e-0 border-white rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-white dark:border-white dark:text-black dark:hover:text-blue-500">
              <span class="sr-only">Previous</span>
              <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
              </svg>
            </a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-black bg-white border border-white hover:bg-white hover:text-blue-500 dark:bg-white dark:border-white dark:text-black dark:hover:bg-white dark:hover:text-blue-500 ">1</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-black bg-white border border-white hover:bg-white hover:text-white dark:bg-white dark:border-white dark:text-black dark:hover:bg-white dark:hover:text-blue-500">2</a>
          </li>
          <li>
            <a href="#" aria-current="page" class="z-10 flex items-center justify-center px-4 h-10 leading-tight text-black bg-white border border-white hover:bg-white hover:text-white dark:bg-white dark:border-white dark:text-black dark:hover:bg-white dark:hover:text-blue-500">3</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-black bg-white border border-white hover:bg-white hover:text-white dark:bg-white dark:border-white dark:text-black dark:hover:bg-white dark:hover:text-blue-500">4</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-black bg-white border border-white hover:bg-white hover:text-white dark:bg-white dark:border-white dark:text-black dark:hover:bg-white dark:hover:text-blue-500">5</a>
          </li>
          <li>
            <a href="#" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 border-gray-300 rounded-e-lg  hover:text-gray-700 dark:text-black dark:hover:text-blue-500">
              <span class="sr-only">Next</span>
              <svg class="w-3 h-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
            </a>
          </li>
        </ul>
      </nav>
</section>
  
  
@endsection
