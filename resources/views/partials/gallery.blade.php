<div class="bg-white py-4 px-4 mb-8 md:py-8 md:mb-12">
      <div class="max-w-screen-xl mx-auto">
        <h2 class="text-2xl font-semibold text-center mb-8">Gallery</h2>
        <div class="relative">
          <!-- Tombol Previous -->
          <button id="prevButton" class="absolute left-0 top-1/2 -translate-y-1/2 bg-gray-200 hover:bg-gray-300 rounded-full p-2 shadow z-10">
            &#8592;
          </button>
    
          <!-- Wrapper untuk slider -->
          <div class="overflow-hidden">
            <div id="gallerySlider" class="flex transition-transform duration-500 ease-in-out">
              <!-- Gambar 1 -->
              <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
                <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
              </div>
              <!-- Gambar 2 -->
              <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
                <img src="{{ asset('images/gambar2.png') }}" alt="Gallery Image 2" class="w-full h-auto md:h-48 rounded-lg object-cover">
              </div>
              <!-- Gambar 3 -->
              <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
                <img src="{{ asset('images/gambar3.png') }}" alt="Gallery Image 3" class="w-full h-auto md:h-48 rounded-lg object-cover">
              </div>
              <!-- Gambar 4 -->
              <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
                <img src="{{ asset('images/gambar4.png') }}" alt="Gallery Image 4" class="w-full h-auto md:h-48 rounded-lg object-cover">
              </div>
              <!-- Gambar 5 -->
              <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
                <img src="{{ asset('images/gambar5.png') }}" alt="Gallery Image 5" class="w-full h-auto md:h-48 rounded-lg object-cover">
              </div>
              <!-- Gambar 6 -->
              <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
                <img src="{{ asset('images/gambar6.png') }}" alt="Gallery Image 6" class="w-full h-auto md:h-48 rounded-lg object-cover">
              </div>
            </div>
          </div>
    
          <!-- Tombol Next -->
          <button id="nextButton" class="absolute right-0 top-1/2 -translate-y-1/2 bg-gray-200 hover:bg-gray-300 rounded-full p-2 shadow z-10">
            &#8594;
          </button>
        </div>
    
        <!-- Titik Navigasi -->
        <div id="dotsContainer" class="flex justify-center mt-4 space-x-2">
          <!-- Titik navigasi dibuat secara dinamis -->
        </div>
      </div>
    </div>
    

    
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const gallerySlider = document.getElementById("gallerySlider");
        const prevButton = document.getElementById("prevButton");
        const nextButton = document.getElementById("nextButton");
        const dotsContainer = document.getElementById("dotsContainer");

        let currentIndex = 0; // Indeks slide aktif
        const slidesToShow = 3; // Jumlah gambar yang terlihat
        const slideCount = gallerySlider.children.length; // Total jumlah slide
        const slideWidth = gallerySlider.children[0].offsetWidth; // Lebar satu slide

        // Fungsi untuk memperbarui posisi slider
        const updateSliderPosition = () => {
            gallerySlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        };

        // Fungsi untuk memindahkan gambar ke kiri (Next)
        nextButton.addEventListener("click", () => {
            // Geser gambar ke kiri dan pindahkan gambar pertama ke belakang
            gallerySlider.appendChild(gallerySlider.children[0]); // Pindahkan gambar pertama ke belakang
            updateSliderPosition();
        });

        // Fungsi untuk memindahkan gambar ke kanan (Previous)
        prevButton.addEventListener("click", () => {
            // Geser gambar ke kanan dan pindahkan gambar terakhir ke depan
            gallerySlider.insertBefore(gallerySlider.children[slideCount - 1], gallerySlider.children[0]); // Pindahkan gambar terakhir ke depan
            updateSliderPosition();
        });
    });
</script>
