<nav id="navbar" class="bg-transparent fixed top-0 left-0 w-full z-50 transition-all duration-300">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="{{ asset('images/logo.png') }}" class="h-16" alt="Company Logo" />
          </a>
          <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
              <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                  <li><a href="#" class="block py-2 px-3 text-white rounded hover:text-blue-500">Home</a></li>
                  <li><a href="#" class="block py-2 px-3 text-white">Services</a></li>
                  <li><a href="#" class="block py-2 px-3 text-white">Pricing</a></li>
                  <li><a href="#" class="block py-2 px-3 text-white">Contact</a></li>
              </ul>
          </div>
      </div>
  </nav>
  
  

  <script>
      // Ambil elemen navbar
      const navbar = document.getElementById('navbar');
      const navbarLinks = document.querySelectorAll('#navbar-dropdown a'); // Ambil semua link dalam navbar
  
      // Fungsi untuk menambahkan/menghapus kelas pada scroll
      window.onscroll = function() {
          if (window.innerWidth >= 768) { // Hanya berlaku untuk tampilan desktop (ukuran >= 768px)
              if (window.scrollY > 50) { // Saat scroll lebih dari 50px
                  navbar.classList.add('bg-white', 'shadow-xl'); // Menambahkan background putih dan shadow
                  navbar.classList.remove('bg-transparent'); // Menghapus background transparan
                  
                  // Ubah warna teks menjadi hitam
                  navbarLinks.forEach(link => {
                      link.classList.remove('text-white'); // Hapus warna teks putih
                      link.classList.add('text-black'); // Tambahkan warna teks hitam
                  });
              } else {
                  navbar.classList.remove('bg-white', 'shadow-xl'); // Menghapus background putih dan shadow
                  navbar.classList.add('bg-transparent'); // Mengembalikan background transparan
                  
                  // Kembalikan warna teks ke putih
                  navbarLinks.forEach(link => {
                      link.classList.remove('text-black'); // Hapus warna teks hitam
                      link.classList.add('text-white'); // Tambahkan warna teks putih
                  });
              }
          } else {
              // Pada tampilan ponsel, biarkan navbar tetap transparan tanpa perubahan
              navbar.classList.remove('bg-white', 'shadow-xl'); 
              navbar.classList.add('bg-transparent');
              navbarLinks.forEach(link => {
                  link.classList.remove('text-black'); // Hapus warna teks hitam
                  link.classList.add('text-white'); // Tambahkan warna teks putih
              });
          }
      };
  </script>
  