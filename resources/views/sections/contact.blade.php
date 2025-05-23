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
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3960.3333394418187!2d110.3006667!3d-6.969944399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTgnMTEuOCJTIDExMMKwMTgnMDIuNCJF!5e0!3m2!1sen!2sid!4v1738776475273!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- End Google Maps -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-clock"></i>
          <h3>Jam Operasional</h3>
          <p>Senin - Jumat: 08.00 - 18.00</p>
          <p>Sabtu - Minggu: 09.00 - 17.00</p>
        </div>
      </div>
      
    </div>

  </div>

</section>
<!-- /Contact Section -->
@endsection