<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/strawberrycaffe.png" />
    <link rel="icon" type="image/png" href="../assets/strawberrycaffe.png" />
    <title>StrawberryCaffe - @yield('title', 'Website')</title>
    @include('template.partial.link')
</head>
<body class="font-sans antialiased bg-no-repeat bg-cover bg-gradient-to-t from-red-400 to-purple-400" >
    @include('template.partial.header')

    <div class="mt-40">
        @yield('content')
    </div>

    @include('template.partial.footer')

    <script>

        // ini adalah code yang digunakan untuk membuat navigation bar menjadi responsif
        const navLinks = document.querySelector('.nav-links');

        function toggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu';
            // Menggunakan properti style.top untuk mengubah nilai top
            navLinks.style.top = e.name === 'menu' ? '-200%' : '105%';
        }

    </script>

<script>
    const words = ["Welcome to", "Your beloved", "and only cafe"];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;

    function type() {
      currentWord = words[i];
      if (isDeleting) {
        document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
        j--;
        if (j == 0) {
          isDeleting = false;
          i++;
          if (i == words.length) {
            i = 0;
          }
        }
      } else {
        document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
        j++;
        if (j == currentWord.length) {
          isDeleting = true;
        }
      }
      setTimeout(type, 300);
    }

    type();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
