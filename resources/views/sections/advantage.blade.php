@extends('layouts.app')

@section('title', 'Rifqi Mebel - Sofa Berkualitas')
@section('meta-description', 'Temukan sofa berkualitas dengan desain elegan di Rifqi Mebel. Dapatkan produk berkualitas tinggi dengan harga terjangkau, layanan custom order, dan reparasi sofa di Semarang. Kami melayani pengiriman ke seluruh Indonesia.')

@section('content')
<!-- Page Title -->
<div class="page-title dark-background" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
  <div class="container position-relative">
    <h1>Keunggulan Kami</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="current">Keunggulan</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Features Section -->
<section id="features" class="features section">

  <div class="container">

    <ul class="nav nav-tabs row g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
          <h4>Material Berkualitas</h4>
        </a>
      </li><!-- End tab nav item -->

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" tabindex="-1" role="tab">
          <h4>Harga Terjangkau</h4>
        </a><!-- End tab nav item -->
      </li>

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" tabindex="-1" role="tab">
          <h4>Custom Order</h4>
        </a><!-- End tab nav item -->
      </li>

      <li class="nav-item col-3" role="presentation">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false" tabindex="-1" role="tab">
          <h4>Reparasi Sofa</h4>
        </a><!-- End tab nav item -->
      </li>

    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

      <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Sofa Berkualitas dengan Bahan Terbaik</h3>
            <p class="fst-italic">
              Rifqi Mebel menggunakan bahan premium yang tahan lama, nyaman, dan elegan. Sofa kami dirancang untuk memberikan kenyamanan lebih dan daya tahan tinggi untuk penggunaan jangka panjang.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Material premium untuk kualitas tak tertandingi.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Desain elegan yang cocok untuk berbagai ruangan.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Sofa yang nyaman dan tahan lama.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="assets/img/fit-1.jpg" alt="Material Berkualitas" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Harga Terjangkau dengan Kualitas Terjamin</h3>
            <p class="fst-italic">
              Kami memberikan sofa berkualitas tinggi dengan harga yang sangat bersaing. Dengan nilai terbaik untuk setiap pembelian, Anda mendapatkan produk yang tidak hanya terjangkau, tetapi juga awet dan nyaman.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Harga terjangkau tanpa mengurangi kualitas.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Desain dan kenyamanan yang sebanding dengan harga.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Menawarkan produk berkualitas dengan harga bersaing.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="assets/img/fit-2.jpg" alt="Harga Terjangkau" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Custom Order: Sesuaikan dengan Keinginan Anda</h3>
            <p class="fst-italic">
              Dengan layanan custom order, Anda dapat memilih desain, ukuran, dan warna sofa yang sesuai dengan selera dan kebutuhan ruangan Anda. Kami juga menyediakan layanan pre-order untuk memastikan setiap produk dibuat dengan penuh ketelitian.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Desain sesuai keinginan Anda, dari ukuran hingga warna.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Layanan pre-order untuk kualitas maksimal.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Fleksibilitas untuk menyesuaikan dengan kebutuhan ruangan.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="assets/img/fit-3.jpg" alt="Custom Order" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            <h3>Reparasi Sofa: Hemat Biaya, Sofa Lama Seperti Baru</h3>
            <p class="fst-italic">
              Kami juga melayani reparasi sofa lama Anda, mulai dari mengganti busa, memperbaiki rangka kayu, hingga mengganti kain pelapis yang sudah rusak. Dengan layanan reparasi ini, Anda bisa menghemat biaya dan sofa kesayangan kembali seperti baru.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Perbaikan busa dan rangka kayu agar lebih kokoh.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Penggantian kain pelapis dengan pilihan material terbaik.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Sofa lama Anda akan kembali seperti baru dengan biaya lebih hemat.</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="assets/img/fit-4.jpg" alt="Reparasi Sofa" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

    </div>

  </div>

</section><!-- /Features Section -->

@endsection
