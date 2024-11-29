<nav id="navbar" class="bg-transparent fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between p-4 container mx-auto">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.png') }}" class="h-16" alt="Company Logo" />
        </a>
        <!-- Hamburger Button -->
        <button data-collapse-toggle="navbar-dropdown" type="button" id="hamburger-btn" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg id="hamburger-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
            <svg id="close-icon" class="w-5 h-5 hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <!-- Navbar Dropdown -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent md:dark:bg-transparent">
                <li><a href="/" class="block py-2 px-3 text-gray-500 rounded hover:text-green-500">Home</a></li>
                <li class="relative group">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-500 md:hover:text-green-500">
                        Tentang Kami 
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="absolute left-0 hidden mt-2 font-normal bg-white divide-y rounded-lg shadow w-44 group-hover:block">
                        <ul class="py-2 text-sm text-gray-500 dark:text-black">
                            <li>
                                <a href="{{ url('/about-us/tentang-kami') }}" class="block px-4 py-2  text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Tentang Kami
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us/visi-misi') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Visi & Misi
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us/sejarah') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Sejarah Singkat
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us/tentang-site') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Tentang Site
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us/struktur') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Struktur
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us/laporan-penjualan') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Laporan Penjualan
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-us/aset-perusahaan') }}" class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-200 dark:text-black dark:hover:text-green-500 font-semibold">
                                    Aset Perusahaan
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </li>
                {{-- <li><a href="" class="block py-2 px-3 text-white hover:text-green-500">Gallery</a></li> --}}
                {{-- <li><a href="{{ url('/news') }}" class="block py-2 px-3 text-white hover:text-green-500">News</a></li> --}}
                <li><a href="{{ url('/contact') }}" class="block py-2 px-3 text-gray-500 hover:text-green-500">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // Hamburger icon toggle
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    const navbarDropdown = document.getElementById('navbar-dropdown');

    hamburgerBtn.addEventListener('click', () => {
        // Toggle visibility of dropdown menu
        navbarDropdown.classList.toggle('hidden');
        // Toggle icons
        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    // Navbar dan warna teks
    const navbar = document.getElementById('navbar');
    const navbarLinks = document.querySelectorAll('#navbar-dropdown a'); // Link utama
    const dropdownButton = document.getElementById('dropdownNavbarLink'); // Button dropdown
    const dropdownLinks = document.querySelectorAll('#dropdownNavbar a'); // Link dalam dropdown

    // Fungsi untuk mengatur warna teks dan background navbar
    function updateNavbarColors(scrollY) {
        if (scrollY > 50) {
            navbar.classList.add('bg-white', 'shadow-xl');
            navbar.classList.remove('bg-transparent');
            navbarLinks.forEach(link => {
                link.classList.remove('text-black');
                link.classList.add('text-black');
                link.classList.add('border-b-2');
                link.classList.add('border-transparent');
                link.classList.add('hover:border-white');
            });
            dropdownButton.classList.remove('text-black');
            dropdownButton.classList.add('text-black');
            dropdownLinks.forEach(link => {
                link.classList.remove('text-black');
                link.classList.add('text-black');
            });
        } else {
            navbar.classList.remove('bg-white', 'shadow-xl');
            navbar.classList.add('bg-transparent');
            navbarLinks.forEach(link => {
                link.classList.remove('text-black');
                link.classList.add('text-black');
                link.classList.remove('border-b-2');
            });
            dropdownButton.classList.remove('text-black');
            dropdownButton.classList.add('text-black');
            dropdownLinks.forEach(link => {
                link.classList.remove('text-black');
                link.classList.add('text-black');
            });
        }
    }

    // Event listener pada scroll
    window.onscroll = function() {
        updateNavbarColors(window.scrollY);
    };
</script>
