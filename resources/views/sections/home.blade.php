@extends('layouts.app')

@section('title', 'Rifqi Mebel - Sofa Berkualitas')
@section('meta-description', 'Temukan sofa berkualitas dengan desain elegan dari Rifqi Mebel. Kami melayani pengiriman ke seluruh Indonesia.')

@section('content')
    <main class="main">

        <!-- Home Section -->
        <section id="hero" class="hero section dark-background">
    
          <div class="info d-flex align-items-center">
            <div class="container">
              <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 text-center">
                  <h2>Welcome to <br>Rifqi Mebel Semarang</h2>
                  <p>Temukan berbagai pilihan sofa mewah dengan desain elegan dan kualitas terbaik.
                    Jelajahi koleksi kami sekarang dan wujudkan interior impian Anda!</p>
                  <a href="#get-started" class="btn-get-started">Get Started</a>
                </div>
              </div>
            </div>
          </div>
    
          <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    
            <div class="carousel-item">
              <img src="assets/img/hero-carousel/hero-carousel-1.jpeg" alt="">
            </div>
    
            <div class="carousel-item active">
              <img src="assets/img/hero-carousel/hero-carousel-2.jpeg" alt="">
            </div>
    
            <div class="carousel-item">
              <img src="assets/img/hero-carousel/hero-carousel-3.jpeg" alt="">
            </div>
    
            <div class="carousel-item">
              <img src="assets/img/hero-carousel/hero-carousel-4.jpeg" alt="">
            </div>
    
            <div class="carousel-item">
              <img src="assets/img/hero-carousel/hero-carousel-5.jpeg" alt="">
            </div>
    
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
    
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
    
          </div>
    
        </section>
        <!-- /Home Section -->
    
        <!-- Get Started Section -->
        <section id="get-started" class="get-started section">
        
          <div class="container">
        
            <div class="row justify-content-between gy-4">
        
              <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                <div class="content">
                  <h3>Mebel Berkualitas untuk Kenyamanan dan Fungsionalitas Ruangan Anda</h3>
                  <p>Kami menghadirkan koleksi mebel berkualitas tinggi yang mengutamakan desain elegan, kenyamanan, dan ketahanan jangka panjang. Dibuat dari bahan pilihan dengan pengerjaan yang detail, mebel kami memberikan sentuhan estetika dan fungsionalitas untuk setiap ruangan.</p>
                  <p>Dari ruang tamu hingga ruang kerja, kami menawarkan berbagai pilihan furnitur yang dapat disesuaikan dengan gaya dan kebutuhan Anda. Temukan solusi terbaik untuk menghadirkan suasana hangat dan mewah di rumah atau kantor Anda dengan koleksi eksklusif kami.</p>
                </div>
              </div>

              <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
                <img src="assets/img/sofa.webp" alt="Sofa Mebel Berkualitas" class="img-fluid rounded">
              </div>
        
            </div>
        
          </div>
        
        </section>
        <!-- /Get Started Section -->        
    
        <!-- Services Section -->
        <section id="services" class="services section light-background">
        
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Mebel & Sofa Berkualitas</h2>
            <p>Kami menawarkan berbagai layanan terbaik, mulai dari desain sofa elegan, perbaikan profesional, hingga pembuatan sofa custom yang disesuaikan dengan kebutuhan Anda.</p>
          </div><!-- End Section Title -->
        
          <div class="container">
            <div class="row gy-4">
        
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-mountain-city" aria-hidden="true"></i>
                  </div>
                  <h3>Desain Sofa Elegan</h3>
                  <p>Kami menghadirkan desain sofa modern dan minimalis yang cocok untuk segala jenis interior.</p>
                  <a href="/desain-sofa" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
        
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-arrow-up-from-ground-water" aria-hidden="true"></i>
                  </div>
                  <h3>Material Berkualitas</h3>
                  <p>Setiap produk dibuat menggunakan bahan premium, seperti kulit sintetis, kain beludru, dan busa berkualitas tinggi.</p>
                  <a href="/material-sofa" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
        
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fas fa-credit-card" aria-hidden="true"></i>
                  </div>
                  <h3>Harga Terjangkau</h3>
                  <p>Kami menawarkan harga sofa yang kompetitif dengan kualitas terbaik, serta berbagai pilihan cicilan.</p>
                  <a href="/harga-sofa" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
        
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fas fa-thumbs-up" aria-hidden="true"></i>
                  </div>
                  <h3>Layanan Purna Jual</h3>
                  <p>Garansi dan layanan perawatan tersedia untuk memastikan produk tetap dalam kondisi terbaik.</p>
                  <a href="/layanan-purna-jual" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
        
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-couch" aria-hidden="true"></i>
                  </div>
                  <h3>Jasa Reparasi Sofa</h3>
                  <p>Layanan reparasi sofa profesional, termasuk perbaikan rangka, penggantian kain, dan busa.</p>
                  <a href="/jasa-reparasi-sofa" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
        
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                  <div class="icon">
                    <i class="fa-solid fa-shopping-cart" aria-hidden="true"></i>
                  </div>
                  <h3>Penjualan Sofa Custom</h3>
                  <p>Pilih dan pesan sofa custom sesuai keinginan Anda dengan berbagai pilihan desain dan material.</p>
                  <a href="/penjualan-sofa-custom" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div><!-- End Service Item -->
        
            </div>
          </div>
        
        </section><!-- /Services Section -->  
            
    
        <!-- Projects Section -->
        <section id="projects" class="projects section">
    
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Produk Sofa Kami</h2>
            <p>Lihat lebih banyak di instagram kami!</p>
          </div><!-- End Section Title -->
    
          <div class="container">
    
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
    
              <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-remodeling">Best Seller</li>
                <li data-filter=".filter-construction">Production</li>
                <li data-filter=".filter-repairs">Repairs</li>
                <li data-filter=".filter-design">Design</li>
              </ul><!-- End Portfolio Filters -->
    
              <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/remodeling-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Product 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/construction-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Branding 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/repairs-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Books 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/design-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 2</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/remodeling-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Product 2</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/construction-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Branding 2</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/repairs-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Books 2</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/design-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>App 3</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/remodeling-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Product 3</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/construction-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Branding 3</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/repairs-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-content h-100">
                    <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Books 3</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="assets/img/projects/design-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
    
              </div><!-- End Portfolio Container -->
    
            </div>
    
          </div>
    
        </section>
        <!-- /Projects Section -->

        <!-- Recent Blog Posts Section -->
        <section id="recent-blog-posts" class="recent-blog-posts section">
    
          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Blog Posts</h2> 
          </div><!-- End Section Title -->
    
          <div class="container">
    
            <div class="row gy-5">
    
              <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
    
                  <div class="post-img position-relative overflow-hidden">
                    <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                    <span class="post-date">December 12</span>
                  </div>
    
                  <div class="post-content d-flex flex-column">
    
                    <h3 class="post-title">Rifqi Mebel Semarang: Solusi Sofa Berkualitas dengan Harga Bersahabat</h3>
                    <hr>
    
                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
    
                  </div>
    
                </div>
              </div><!-- End post item -->
    
              <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">
    
                  <div class="post-img position-relative overflow-hidden">
                    <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                    <span class="post-date">July 17</span>
                  </div>
    
                  <div class="post-content d-flex flex-column">
    
                    <h3 class="post-title">Rifqi Mebel Semarang: Jasa Reparasi Sofa untuk Tampilan Baru yang Lebih Prima</h3>
                    <hr>
    
                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
    
                  </div>
    
                </div>
              </div><!-- End post item -->
    
              <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="post-item position-relative h-100">
    
                  <div class="post-img position-relative overflow-hidden">
                    <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                    <span class="post-date">September 05</span>
                  </div>
    
                  <div class="post-content d-flex flex-column">
    
                    <h3 class="post-title">Panduan Memilih Jenis Kain Sofa Saat Custom di Rifqi Mebel Semarang</h3>
                    <hr>
    
                    <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
    
                  </div>
    
                </div>
              </div><!-- End post item -->
    
            </div>
    
          </div>
    
        </section>
        <!-- /Recent Blog Posts Section -->
    
      </main>
@endsection