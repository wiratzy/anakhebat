<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite ('resources/sass/app.scss', 'resources/js/app.js')
    @extends('home.css_home')
    @extends('footer.css_footer')
</head>
<body>
    @include('nav.template_nav')
    @yield('header')
    @yield('script')
    
    @extends('footer.template_footer')
    @extends('home.panduan')
    
    

</body>
</html>