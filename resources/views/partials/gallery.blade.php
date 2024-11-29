<div class="bg-white py-4 px-4 mb-8 md:py-8 md:mb-12 lg:mb-16">
  <div class="max-w-screen-xl mx-auto">
    <h2 class="text-2xl font-semibold text-center mb-8">Gallery</h2>
    <div class="relative">
      <!-- Tombol Previous -->
      <button id="prevButton" type="button" class="absolute left-0 top-1/2 -translate-y-1/2 rounded-full p-2 shadow z-10">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full">
          <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
          </svg>
        </span>
      </button>

      <!-- Wrapper untuk slider -->
      <div class="overflow-hidden">
        <div id="gallerySlider" class="flex transition-transform duration-500 ease-in-out">
          <!-- Duplikat Gambar Terakhir -->
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar6.png') }}" alt="Gallery Image 6" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
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
          <!-- Duplikat Gambar Pertama -->
          <div class="w-full sm:w-full md:w-1/3 px-2 shrink-0">
            <img src="{{ asset('images/gambar1.png') }}" alt="Gallery Image 1" class="w-full h-auto md:h-48 rounded-lg object-cover">
          </div>
        </div>
      </div>

      <!-- Tombol Next -->
      <button id="nextButton" type="button" class="absolute right-0 top-1/2 -translate-y-1/2 rounded-full p-2 shadow z-10">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full">
          <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
          </svg>
        </span>
      </button>
    </div>

    <!-- Titik Navigasi -->
    <div id="dotsContainer" class="flex justify-center mt-4 space-x-2">
      <button class="w-3 h-3 rounded-full bg-gray-300" data-slide="0"></button>
      <button class="w-3 h-3 rounded-full bg-gray-300" data-slide="1"></button>
      <button class="w-3 h-3 rounded-full bg-gray-300" data-slide="2"></button>
      <button class="w-3 h-3 rounded-full bg-gray-300" data-slide="3"></button>
      <button class="w-3 h-3 rounded-full bg-gray-300" data-slide="4"></button>
      <button class="w-3 h-3 rounded-full bg-gray-300" data-slide="5"></button>
    </div>
  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const gallerySlider = document.getElementById("gallerySlider");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");
    const dots = document.querySelectorAll("#dotsContainer button");
    const slideCount = gallerySlider.children.length;
    const slideWidth = gallerySlider.children[0].offsetWidth;

    let currentIndex = 1;
    let isAnimating = false; // Tambahkan flag untuk mencegah spam klik

    const updateSliderPosition = () => {
        gallerySlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        gallerySlider.style.transition = "transform 0.5s ease-in-out";

        // Update dots (tanpa reset)
        dots.forEach((dot, index) => {
            if (index === (currentIndex - 1) % dots.length) {
                dot.classList.add("bg-black");
                dot.classList.remove("bg-gray-300");
            } else {
                dot.classList.remove("bg-black");
                dot.classList.add("bg-gray-300");
            }
        });
    };

    const resetPosition = () => {
        gallerySlider.style.transition = "none";
        gallerySlider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    };

    const handleNext = () => {
        if (isAnimating) return; // Jangan lakukan apapun jika animasi sedang berlangsung
        isAnimating = true; // Kunci animasi

        currentIndex++;
        updateSliderPosition();

        if (currentIndex === slideCount - 1) {
            setTimeout(() => {
                currentIndex = 1;
                resetPosition();
            }, 500);
        }

        setTimeout(() => {
            isAnimating = false; // Lepas kunci setelah animasi selesai
        }, 500);
    };

    const handlePrev = () => {
        if (isAnimating) return; // Jangan lakukan apapun jika animasi sedang berlangsung
        isAnimating = true; // Kunci animasi

        currentIndex--;
        updateSliderPosition();

        if (currentIndex === 0) {
            setTimeout(() => {
                currentIndex = slideCount - 2;
                resetPosition();
            }, 500);
        }

        setTimeout(() => {
            isAnimating = false; // Lepas kunci setelah animasi selesai
        }, 500);
    };

    nextButton.addEventListener("click", handleNext);
    prevButton.addEventListener("click", handlePrev);

    dots.forEach((dot, index) => {
        dot.addEventListener("click", () => {
            if (isAnimating) return; // Cegah spam klik dots
            isAnimating = true; // Kunci animasi

            currentIndex = index + 1;
            updateSliderPosition();

            setTimeout(() => {
                isAnimating = false; // Lepas kunci setelah animasi selesai
            }, 500);
        });
    });

    // Inisialisasi posisi awal
    resetPosition();
    updateSliderPosition();
});

</script>
