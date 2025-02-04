@extends('layouts.app')

@section('title', 'Rifqi Mebel - Sofa Berkualitas')
@section('meta-description', 'Temukan sofa berkualitas dengan desain elegan dari Rifqi Mebel. Kami melayani pengiriman ke seluruh Indonesia.')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
  <div class="container position-relative">
    <h1>Contact</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Contact</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
          <a href="https://www.google.com/maps/place/6%C2%B058'11.8%22S+110%C2%B018'02.4%22E/@-6.969955,110.2980841,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-6.969955!4d110.300659?hl=en-ID&entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D" target="_blank">
            <i class="bi bi-geo-alt"></i>
          </a>
          <h3>Alamat</h3>
          <p>Jl. Cisadane Karanggayam 19 Mangunharjo, Tugu, Semarang 505153</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
            <a href="https://wa.me/628993686223?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
          <h3>WhatsApp Kami</h3>
          <p>+6289 9368 6223</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-envelope"></i>
          <h3>Email Kami</h3>
          <p>Rifqimebel2@gmail.com</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="row gy-4 mt-1">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <iframe src="https://www.google.com/maps/place/6%C2%B058'11.8%22S+110%C2%B018'02.4%22E/@-6.969955,110.2980841,17z/data=!3m1!4b1!4m4!3m3!8m2!3d-6.969955!4d110.300659?hl=en-ID&entry=ttu&g_ep=EgoyMDI1MDEyOS4xIKXMDSoASAFQAw%3D%3D" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

    </div>

  </div>

</section>
<!-- /Contact Section -->
@endsection