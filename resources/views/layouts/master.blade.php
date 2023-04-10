<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <title>@yield('title')</title>
        
        <!-- =============== CSS =================== -->
        @yield('style')

    </head>
    <body>

        <!--==================== HEADER ====================-->
       @extends('partails.nav')

        <!-- =================== MAIN ======================-->
       @yield('content')

       <!-- ==================== FOOTER ====================-->
       @extends('partails.footer')
    
       <!-- ======================SCRIPT =====================-->

       @yield('script')
    </body>
    </html>