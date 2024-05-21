<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss', 'resources/js/app.js'); ?>
    <title>Home</title>
    <style>
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  overflow: hidden;
  background: rgb(255, 255, 255);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50vh;
}

header {
	background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
	text-align: center;
	width: 100%;
	height: auto;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow: hidden;
	border-radius: 0 0 85% 85% / 30%;
}
header .overlay{
	width: 100%;
	height: 100%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
}

h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	margin-bottom: 30px;
}

h3, p {
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 30px;
}


.btn {
  font-family: sans-serif;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2.8px;
  background-color: #1b8bf9;
  padding: 15px 50px;
  border-radius: 5rem;
  box-shadow: 1px 2.9px 16px rgba(27, 139, 249, 0.4);
  transition: 0.6s cubic-bezier(0.01, 1.69, 0.99, 0.94); 
}

.btn:hover {
  box-shadow: 3px 4.9px 16px rgba(27, 139, 249, 0.6);
  letter-spacing: 10px;
  background-color: #FF6C19;
}

.btn--clicked {
  transition: 0.6s cubic-bezier(0.01, 1.69, 0.99, 0.94); 
  padding: 15px 2px;
  width: 50px;
  color: transparent;
  z-index: -10;
}

.color {
  display: block;
  width: 0;
  height: 0;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  position: absolute;
  transition: 0.8s ease;
  border-radius: 50%;
  background-color: transparent;
}

.expanded {
  width: 200%;
  padding-bottom: 200%;
  height: auto; 
}

.color--blue {
  background-color: #1b8bf9;
  transition-delay: 0.25s;
}

.color--orange {
  background-color: #FF6C19;
  transition-delay: 0.5s;
}

.color--green {
  background-color: #41FF9F;
  transition-delay: 0.75s;
}

.color--white {
  background-color: #f9f9f9;
  transition-delay: 1s;
}

    </style>
</head>
<body>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('script'); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\anakhebat\resources\views/landingpage/template_landingpage.blade.php ENDPATH**/ ?>