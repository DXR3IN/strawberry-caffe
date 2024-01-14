<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/strawberrycaffe.png" />
    <link rel="icon" type="image/png" href="../../assets/strawberrycaffe.png" />
    <title>Soft UI Dashboard Tailwind</title>
    @include('admin.layout.partial.link')
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    @include('admin.layout.partial.header')


      @yield('content')

      @include('admin.layout.partial.footer')
  </body>
  @include('admin.layout.partial.script')
</html>
