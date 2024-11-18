<div class="w-full text-center">
      <h2 class="text-base md:text-base lg:text-lg lg:-mt-20 italic mt-9 md:mt-12">
          Kami telah bekerjasama dengan Industri terbaik di bidangnya
      </h2>
  
      <div class="relative w-full overflow-hidden py-12 px-6">
          <div id="scrolling-logos" class="flex space-x-4">
              <!-- Duplikasi gambar untuk animasi tanpa henti -->
              @foreach (['logo.png', 'logo.png', 'logo.png', 'logo.png', 'logo.png'] as $image)
                  <img src="{{ asset('images/'.$image) }}" alt="logo" class="object-contain h-[100px] sm:h-[150px] md:h-[200px] lg:h-[150px] w-[200px] sm:w-[250px] md:w-[300px] lg:w-[350px] flex-shrink-0">
              @endforeach
              <!-- Gambar duplikat untuk menghindari jeda -->
              @foreach (['logo.png', 'logo.png', 'logo.png', 'logo.png', 'logo.png'] as $image)
                  <img src="{{ asset('images/'.$image) }}" alt="logo" class="object-contain h-[100px] sm:h-[150px] md:h-[200px] lg:h-[150px] w-[200px] sm:w-[250px] md:w-[300px] lg:w-[350px] flex-shrink-0">
              @endforeach
          </div>
      </div>
  </div>
  