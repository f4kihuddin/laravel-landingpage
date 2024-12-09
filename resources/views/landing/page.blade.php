<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Batik MY</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#b6895b',
              dark: '#010101',
            },
          },
        },
      }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body class="font-[Poppins] bg-dark text-white">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full flex items-center justify-between bg-opacity-80 bg-dark backdrop-blur-sm z-50 border-b border-[#513c28]">
      <div class="container mx-auto px-4 py-5 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold italic">
          Batik <span class="text-primary">MY</span>
        </a>

        <div class="hidden md:flex items-center space-x-8">
          <a href="#home" class="text-lg hover:text-primary relative after:content-[''] after:absolute after:w-[50%] after:h-0.5 after:bg-primary after:left-0 after:-bottom-1 after:scale-x-0 hover:after:scale-x-100 after:transition-transform">Home</a>
          <a href="#about" class="text-lg hover:text-primary relative after:content-[''] after:absolute after:w-[50%] after:h-0.5 after:bg-primary after:left-0 after:-bottom-1 after:scale-x-0 hover:after:scale-x-100 after:transition-transform">Tentang Kami</a>
          <a href="#menu" class="text-lg hover:text-primary relative after:content-[''] after:absolute after:w-[50%] after:h-0.5 after:bg-primary after:left-0 after:-bottom-1 after:scale-x-0 hover:after:scale-x-100 after:transition-transform">Koleksi</a>
          <a href="#contact" class="text-lg hover:text-primary relative after:content-[''] after:absolute after:w-[50%] after:h-0.5 after:bg-primary after:left-0 after:-bottom-1 after:scale-x-0 hover:after:scale-x-100 after:transition-transform">Kontak</a>
        </div>

        <div class="flex items-center space-x-4">
          <a href="#" class="text-white hover:text-primary"><i data-feather="search"></i></a>
          <a href="#" class="text-white hover:text-primary"><i data-feather="shopping-cart"></i></a>
          <button class="md:hidden text-white hover:text-primary" id="hamburger-menu">
            <i data-feather="menu"></i>
          </button>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center bg-center bg-cover bg-no-repeat" style="background-image: url('img/awal.jpg');">
      <div class="absolute inset-0 bg-gradient-to-t from-dark via-transparent to-transparent"></div>
      <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl">
          <h1 class="text-6xl font-bold leading-tight mb-4">
            Mari Berbelanja Di Toko <span class="text-primary">Kami</span>
          </h1>
          <p class="text-xl mb-8 font-light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dolores.
          </p>
          <a href="#" class="inline-block px-8 py-3 text-lg bg-primary text-white rounded-lg hover:opacity-80 transition duration-300">
            Beli Sekarang
          </a>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">
          <span class="text-primary">Tentang</span> Kami
        </h2>
        <div class="flex flex-wrap items-center gap-8">
          <div class="w-full md:w-1/2">
            <img src="img/tentang kami.jpg" alt="Tentang Kami" class="w-full rounded-lg">
          </div>
          <div class="w-full md:w-[45%]">
            <h3 class="text-2xl font-bold mb-4">Kenapa Memilih Batik Kami?</h3>
            <p class="text-base font-light mb-4">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui iure accusamus ipsa pariatur voluptates nobis.
            </p>
            <p class="text-base font-light">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum corporis qui, obcaecati facere ipsum quas tempora voluptatum quasi tempore odit!
            </p>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact Section -->
    <!-- Menu Section -->
<section id="menu" class="py-24">
  <div class="container mx-auto px-4">
    <h2 class="text-4xl font-bold text-center mb-4">
      <span class="text-primary">Koleksi</span> Kami
    </h2>
    <p class="text-center max-w-xl mx-auto mb-12">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum quisquam culpa veniam ullam reprehenderit quaerat.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Menu Card 1 -->
      <div class="text-center mb-8">
        <img src="img/1.jpg" alt="Batik Tulis Premium" class="w-4/5 mx-auto rounded-full">
        <h3 class="text-xl font-medium mt-4 mb-2">- Batik Tulis Premium -</h3>
        <p class="text-primary">Rp 1.500.000</p>
      </div>
      <!-- Menu Card 2 -->
      <div class="text-center mb-8">
        <img src="img/2.jpg" alt="Batik Tulis" class="w-4/5 mx-auto rounded-full">
        <h3 class="text-xl font-medium mt-4 mb-2">- Batik Tulis -</h3>
        <p class="text-primary">Rp 750.000</p>
      </div>
      <!-- Menu Card 3 -->
      <div class="text-center mb-8">
        <img src="img/3.jpg" alt="Batik Tulis" class="w-4/5 mx-auto rounded-full">
        <h3 class="text-xl font-medium mt-4 mb-2">- Batik Tulis -</h3>
        <p class="text-primary">Rp 1.000.000</p>
      </div>
      <!-- Menu Card 4 -->
      <div class="text-center mb-8">
        <img src="img/4.jpg" alt="Batik Tulis" class="w-4/5 mx-auto rounded-full">
        <h3 class="text-xl font-medium mt-4 mb-2">- Batik Tulis -</h3>
        <p class="text-primary">Rp 650.000</p>
      </div>
      <!-- Menu Card 5 -->
      <div class="text-center mb-8">
        <img src="img/5.jpg" alt="Batik Tulis" class="w-4/5 mx-auto rounded-full">
        <h3 class="text-xl font-medium mt-4 mb-2">- Batik Tulis -</h3>
        <p class="text-primary">Rp 850.000</p>
      </div>
      <!-- Menu Card 6 -->
      <div class="text-center mb-8">
        <img src="img/6.jpg" alt="Batik Tulis" class="w-4/5 mx-auto rounded-full">
        <h3 class="text-xl font-medium mt-4 mb-2">- Batik Tulis -</h3>
        <p class="text-primary">Rp 850.000</p>
      </div>
    </div>
  </div>
</section>

    <!-- Footer -->
    <footer class="bg-primary">
      <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center space-x-6 mb-6">
          <a href="https://www.instagram.com/batik_bayat/" class="text-white hover:text-dark">
            <i data-feather="instagram"></i>
          </a>
          <a href="#" class="text-white hover:text-dark">
            <i data-feather="twitter"></i>
          </a>
          <a href="https://web.facebook.com/dyahevikurniasari" class="text-white hover:text-dark">
            <i data-feather="facebook"></i>
          </a>
        </div>
        <div class="flex justify-center space-x-6 mb-6">
          <a href="#home" class="text-white hover:text-dark">Home</a>
          <a href="#about" class="text-white hover:text-dark">Tentang Kami</a>
          <a href="#menu" class="text-white hover:text-dark">Koleksi</a>
          <a href="#contact" class="text-white hover:text-dark">Kontak</a>
        </div>
        <div class="text-center text-sm">
          <p>Created by <a href="" class="font-bold text-dark">Muhammad Rafa</a>. | &copy; 2023.</p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script>
      feather.replace();
      
      // Mobile menu toggle
      const hamburger = document.querySelector('#hamburger-menu');
      const nav = document.querySelector('.md\\:flex');
      
      hamburger.addEventListener('click', () => {
        nav.classList.toggle('hidden');
      });
    </script>
  </body>
</html>