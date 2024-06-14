@extends('home.template_home')

@section('header')
    <!-- about -->
<div class="about">
   <a class="bg_links social portfolio" href="https://www.rafaelalucas.com" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social dribbble" href="https://dribbble.com/rafaelalucas" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links social linkedin" href="https://www.linkedin.com/in/rafaelalucas/" target="_blank">
      <span class="icon"></span>
   </a>
   <a class="bg_links logo"></a>
</div>
<!-- end about -->


<header class="mainHeading">
   <div class="mainHeading__content">
      <article class="mainHeading__text">
         <p class="mainHeading__preTitle">ahe.education</p>
         <h2 class="mainHeading__title">Mengapa Memilih Ahe ?</h2>
         <p class="mainHeading__description">
         Ahe adalah bimbingan belajar dengan metode pembelajaran yang mudah dimengerti untuk anak usia dini
         </p>
         <button class="cta">Daftar Sekarang</button>
      </article>

      <figure class="mainHeading__image">
         <img
            src="https://images.unsplash.com/photo-1520856707909-75c4048cc858?ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80"
            alt=""
         />
      </figure>
   </div>
</header><br><br><br><br><br><br>
@endsection

@section('script')
<script>
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>

@endsection