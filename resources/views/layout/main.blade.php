<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite ('resources/sass/app.scss', 'resources/js/app.js')
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        * {
  margin: 0;
  padding: 0;
  list-style: none;
  border: 0;
  outline: 0;
  -webkit-tap-highlight-color: transparent;
  text-decoration: none;
  color: inherit;
  box-sizing: border-box;
}

* :focus {
  outline: 0;
}

body {
  font-family: "Raleway", sans-serif;
}
    </style>
</head>
<body>
    <div class="navbar-container"> <!-- Wrapper untuk navbar -->
        @include('layout.template_nav')
    </div>
    <div class="container">
        @yield('content')
    </div>
    @yield('script')
    <footer>
        @include('layout.template_footer')
    </footer>
</body>
</html>
