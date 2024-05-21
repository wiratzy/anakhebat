@extends ('landingpage.template_landingpage')
@section('content')

<header>
	<div class="overlay" >
        
        
        
    <h1 style="margin-top:200px">BimBel Anak Hebat</h1>
    
<img src=" {{ asset('/img/logo.png') }}" alt="" srcset="">
<p style="margin-top:50px">Ahe adalah bimbingan belajar dengan metode pembelajaran yang mudah dimengerti untuk anak usia dini</p>
	<br>
	<a href="/admin/login" title="" class="btn">Login</a>
<span class="color color--blue" data-value="1"></span>
<span class="color color--orange" data-value="1"></span>
<span class="color color--green" data-value="1"></span>
<span class="color color--white" data-value="1"></span>
		</div>
</header>



@endsection

@section('script')
<script>
    const button = document.querySelector('.btn');
    button.addEventListener('click', (e) => {
        e.preventDefault();
        button.classList.add('btn--clicked');
        document.querySelectorAll('span').forEach((element) => { element.classList.add('expanded') });

        setTimeout(() => { button.classList.remove("btn--clicked") }, 3500);
        setTimeout(() => { document.querySelectorAll('span').forEach((element) => { element.classList.remove('expanded') }) }, 1700);

        
        setTimeout(() => { window.location.href = button.href; }, 1000);
    });
</script>
@endsection