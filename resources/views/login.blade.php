<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/strawberrycaffe.png" />
    <link rel="icon" type="image/png" href="../assets/strawberrycaffe.png" />
    <title>StrawberryCaffe - @yield('title', 'Login')</title>
    @include('template.partial.link')
</head>
<body class="font-sans antialiased bg-no-repeat bg-cover bg-gradient-to-t from-red-400 to-purple-400 ">
    <div class="flex items-center justify-center px-16 min-h-screen">
        <div class="relative w-full max-w-lg" >
            <img src="../../assets/img/strawberrycafeimg.png" class="shadow-xl">
        </div>
        <div class="relative w-full max-w-lg p-8 rounded-r-lg shadow-xl bg-white/30 backdrop-blur-md">
                <div class="flex justify-center items-center">
                    <h1 class="font-josefin text-4xl">Login</h1>
                </div>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Key</label>
                        <input type="text" id="text" name="key_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('key_type') is-invalid @enderror
                        " placeholder="key" autofocus required>
                        @if('loginError')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-400"><span class="font-medium">Oh, snapp!</span> Key anda salah.</p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
                    </div>
                    <div class="flex justify-center items-center">
                        <button type="submit" class="text-black hover:text-white hover:bg-blue-800 focus:ring-4 bg-gradient-to-t from-red-400 via-purple-500 to-green-400 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                    </div>
                </form>
        </div>
    </div>
</body>

</html>
