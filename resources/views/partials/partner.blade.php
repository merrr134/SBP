<div class="w-full text-start mt-8 max-w-screen-xl mx-auto lg:px-0 md:px-8 pl-6 pr-6">
    <h2 class="text-lg md:text-lg lg:text-xl lg:-mt-20 mt-9 md:mt-12 font-bold">
        Partner Kami
    </h2>

    <div class="relative w-full overflow-hidden py-12 px-6">
        <div id="scrolling-logos" class="flex space-x-4 sm:pl-6 sm:pr-6 md:pl-0 md:pr-0">
            <!-- Duplikasi gambar untuk animasi tanpa henti -->
            @foreach (['wita.svg', 'trisaya.svg', 'surveyor.svg', 'petro.svg', 'oss.svg', 'imip.svg', 'huadi.svg','hino.svg', 'hc.svg'] as $image)
                <img src="{{ asset('images/'.$image) }}" alt="logo" class="object-contain h-[100px] sm:h-[150px] md:h-[200px] lg:h-[150px] w-[200px] sm:w-[250px] md:w-[300px] lg:w-[350px] flex-shrink-0">
            @endforeach
            <!-- Gambar duplikat untuk menghindari jeda -->
            @foreach (['wita.svg', 'trisaya.svg', 'surveyor.svg', 'petro.svg', 'oss.svg', 'imip.svg', 'huadi.svg','hino.svg', 'hc.svg'] as $image)
                <img src="{{ asset('images/'.$image) }}" alt="logo" class="object-contain h-[100px] sm:h-[150px] md:h-[200px] lg:h-[150px] w-[200px] sm:w-[250px] md:w-[300px] lg:w-[350px] flex-shrink-0">
            @endforeach
        </div>
    </div>
</div>
