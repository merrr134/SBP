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
                    <p class="text-sm text-gray-600 mt-3">
                        Deskripsi singkat dari berita untuk memberikan gambaran kepada pembaca tentang kontennya.
                    </p>
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
                    <p class="text-sm text-gray-600 mt-3">
                        Deskripsi berita ini dirancang untuk tetap singkat namun informatif, menjaga estetika desain.
                    </p>
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
                    <p class="text-sm text-gray-600 mt-3">
                        Teks panjang ini memastikan desain tetap responsif di perangkat kecil maupun besar.
                    </p>
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
