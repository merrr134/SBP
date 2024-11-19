<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumber Bumi Putera</title>
    <link rel="stylesheet" href="{{ asset('images/logo.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/scroll-into-view-if-needed@1.0.0/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Hero Section -->
    @yield('hero')

    <div class="">
        @include('partials.about')  <!-- This will include the about us section from the new location -->
    </div>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    @include('partials.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const logosContainer = document.getElementById('scrolling-logos');
            const totalWidth = logosContainer.scrollWidth / 2; // Total lebar setelah duplikasi gambar
            const duration = 10; // Durasi animasi dalam detik
    
            // GSAP animation untuk terus bergerak tanpa henti
            gsap.to(logosContainer, {
                x: -totalWidth, // Geser ke kiri sampai akhir
                ease: "linear",
                duration: duration,
                repeat: -1, // Looping tak terbatas
                modifiers: {
                    x: function(x) {
                        // Setelah mencapai ujung, reset ke awal tanpa jeda
                        if (parseFloat(x) <= -totalWidth) {
                            return '0px'; // Reset posisi ke awal
                        }
                        return x;
                    }
                }
            });
        });
    </script>
    
    
    
    

    
</body>
</html>
