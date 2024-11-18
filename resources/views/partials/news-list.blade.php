<div class="bg-white py-8 px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-semibold text-center mb-6">Berita Terbaru</h2>
        
        <!-- Grid untuk menampilkan berita -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Berita 1 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-xl">
                <a href="#" class="relative block group overflow-hidden rounded-lg">
                    <img src="{{ asset('images/gambar1.png') }}" alt="Judul Berita 1" 
                         class="w-full h-48 object-cover rounded-lg mb-4 transform group-hover:scale-110 transition-transform duration-300 ease-in-out">
                    <!-- Overlay background hitam transparan dan teks -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-lg font-semibold">Selengkapnya</span>
                    </div>
                </a>
                <p class="text-sm text-gray-500 mb-2">12 November 2024</p>
                <h3 class="text-lg font-semibold mb-2">Judul Berita 1</h3>
                <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Baca Selengkapnya</a>
            </div>

            <!-- Berita 2 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-xl">
                <a href="#" class="relative block group overflow-hidden rounded-lg">
                    <img src="{{ asset('images/gambar1.png') }}" alt="Judul Berita 2" 
                         class="w-full h-48 object-cover rounded-lg mb-4 transform group-hover:scale-110 transition-transform duration-300 ease-in-out">
                    <!-- Overlay background hitam transparan dan teks -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-lg font-semibold">Selengkapnya</span>
                    </div>
                </a>
                <p class="text-sm text-gray-500 mb-2">12 November 2024</p>
                <h3 class="text-lg font-semibold mb-2">Judul Berita 2</h3>
                <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Baca Selengkapnya</a>
            </div>

            <!-- Berita 3 -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-xl">
                <a href="#" class="relative block group overflow-hidden rounded-lg">
                    <img src="{{ asset('images/gambar3.png') }}" alt="Judul Berita 3" 
                         class="w-full h-48 object-cover rounded-lg mb-4 transform group-hover:scale-110 transition-transform duration-300 ease-in-out">
                    <!-- Overlay background hitam transparan dan teks -->
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-white text-lg font-semibold">Selengkapnya</span>
                    </div>
                </a>
                <p class="text-sm text-gray-500 mb-2">12 November 2024</p>
                <h3 class="text-lg font-semibold mb-2">Judul Berita 3</h3>
                <a href="#" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
