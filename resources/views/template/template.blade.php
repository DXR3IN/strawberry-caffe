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

    @if (isset($searchPerformed) && $searchPerformed)
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Scroll to the "Menu" section with smooth animation
                document.getElementById('Menu').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        </script>
    @endif

    <script>

        // ini adalah code yang digunakan untuk membuat navigation bar menjadi responsif
        const navLinks = document.querySelector('.nav-links');

        function toggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu';
            // Menggunakan properti style.top untuk mengubah nilai top
            navLinks.style.top = e.name === 'menu' ? '-200%' : '105%';
        }

    </script>
</body>
</html>
