<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss', 'resources/js/app.js'); ?>
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
        <?php echo $__env->make('layout.template_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->yieldContent('script'); ?>
    <footer>
        <?php echo $__env->make('layout.template_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\anakhebat\resources\views/layout/main.blade.php ENDPATH**/ ?>