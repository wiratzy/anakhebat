@extends ('layout.main')
@extends ('home.css_home')
@extends ('home.css_panduan')
@section('title','home')


@section('content')
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

<div class="bodypanduan">
  <div class="container">
    <div class="card">
      <div class="imgBx">
        <img src="{{ asset('/img/kbm.jpg') }}" alt="Galeri Kegiatan Belajar Mengajar">
      </div>
      <div class="content">
        <div class="contentBx">
          <h3>Galeri Kegiatan<br><span>Belajar Mengajar</span></h3>
        </div>
        <ul class="sci">
          <li style="--i:1"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li style="--i:2"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li style="--i:3"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img src="{{ asset('/img/mitra.jpg') }}" alt="Galeri Kegiatan Mitra AHE">
      </div>
      <div class="content">
        <div class="contentBx">
          <h3>Galeri Kegiatan<br><span>Mitra AHE</span></h3>
        </div>
        <ul class="sci">
          <li style="--i:1"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li style="--i:2"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li style="--i:3"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img src="{{ asset('/img/unit.jpg') }}" alt="Galeri Kegiatan Unit Ahe">
      </div>
      <div class="content">
        <div class="contentBx">
          <h3>Galeri Kegiatan<br><span>Unit Ahe</span></h3>
        </div>
        <ul class="sci">
          <li style="--i:1"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li style="--i:2"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li style="--i:3"><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
</script>

@endsection
