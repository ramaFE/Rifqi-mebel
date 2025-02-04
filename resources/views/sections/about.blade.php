@extends('layouts.app')

@section('title', 'Tentang Kami - Rifqi Mebel | Sofa Berkualitas')
@section('meta-description', 'Kenali lebih dekat Rifqi Mebel, penyedia sofa berkualitas dengan desain elegan dan pengiriman ke seluruh Indonesia. Kami hadir untuk kenyamanan rumah Anda.')
@section('meta-keywords', 'Rifqi Mebel, tentang kami, sofa berkualitas, furnitur premium, pengiriman sofa')
@section('meta-og-title', 'Tentang Rifqi Mebel')
@section('meta-og-description', 'Kenali lebih dalam tentang Rifqi Mebel dan bagaimana kami menghadirkan sofa berkualitas terbaik.')
@section('meta-og-image', asset('assets/img/about.jpg'))

@section('content')
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
  <div class="container position-relative text-center">
    <h1 class="text-white">About</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Tentang Kami</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <h2 class="inner-title">Menghadirkan Kenyamanan Sejak 2000</h2>
        <h4 class="text">Komitmen Kami</h4>
        <p>Rifqi Mebel telah berdiri sejak tahun 2000 dengan fokus utama dalam menghadirkan furnitur berkualitas tinggi. Kami menawarkan berbagai jenis sofa dengan desain elegan, bahan premium, dan kenyamanan yang tahan lama.</p>
        <ul class="list-unstyled">
          <li><i class="bi bi-check-circle text-success"></i> Material premium berkualitas tinggi</li>
          <li><i class="bi bi-check-circle text-success"></i> Desain elegan dan modern</li>
          <li><i class="bi bi-check-circle text-success"></i> Pengiriman ke seluruh Indonesia</li>
          <li><i class="bi bi-check-circle text-success"></i> Garansi produk terbaik</li>
        </ul>
        <p>Kami percaya bahwa kenyamanan rumah Anda dimulai dari furnitur yang tepat. Oleh karena itu, kami selalu memastikan setiap produk kami memiliki standar kualitas terbaik.</p>
      </div>
      <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid rounded shadow" alt="Tentang Rifqi Mebel">
      </div>
    </div>
  </div>
</section>
<!-- /About Section -->

<!-- Call to Action -->
<section class="cta-section bg- text-greyhite text-center py-4 mb-2rem">
  <div class="container">
    <h3>Tertarik dengan produk kami?</h3>
    <p>Dapatkan sofa berkualitas terbaik dengan penawaran menarik hanya di Rifqi Mebel.</p>
    <div class="text-center mt-4">
      <a href="https://wa.me/628993686223?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda." class="btn btn-outline-success" target="_blank">WhatsApp Kami</a>
    </div>
  </div>
</section>
<!-- /Call to Action -->
@endsection
