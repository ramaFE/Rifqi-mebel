@extends('layouts.app')

@section('title', 'Tentang Kami - Rifqi Mebel | Sofa Berkualitas')
@section('meta-description', 'Kenali lebih dekat Rifqi Mebel, penyedia sofa berkualitas dengan desain elegan dan pengiriman ke seluruh Indonesia. Kami hadir untuk kenyamanan rumah Anda.')
@section('meta-keywords', 'Rifqi Mebel, tentang kami, sofa berkualitas, furnitur premium, pengiriman sofa')
@section('meta-og-title', 'Tentang Rifqi Mebel')
@section('meta-og-description', 'Kenali lebih dalam tentang Rifqi Mebel dan bagaimana kami menghadirkan sofa berkualitas terbaik.')


@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/page-title-bg.jpg);">
      <div class="container position-relative">
        <h1>Blog Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Blog Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">

          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">

                <div class="post-img">
                  <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">Rifqi Mebel Semarang: Jasa Reparasi Sofa untuk Tampilan Baru yang Lebih Prima</h2>

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                  </ul>
                </div><!-- End meta top -->

                <div class="content">
                  <p>
                    Bagi banyak orang, sofa bukan sekadar furnitur, tetapi juga menyimpan banyak kenangan. 
                    Namun, seiring waktu, kondisi sofa bisa menjadi usang dan kurang nyaman. 
                    Jika Anda ingin meng-upgrade tampilan rumah tanpa harus membeli sofa baru, <strong>reparasi sofa</strong> adalah solusinya!
                  </p>
                  
                  <h3>Mengembalikan Keindahan dan Kenyamanan Sofa Lama.</h3> 
                  <p>
                    Reparasi sofa memungkinkan Anda untuk memperbarui tampilan dan fungsi sofa sesuai keinginan. 
                    Beberapa perbaikan yang sering dilakukan antara lain:
                  </p>
                  <blockquote>
                    <p>
                     <strong>Mengganti Busa</strong> – Jika busa sofa sudah tipis dan tidak nyaman lagi, kami dapat menggantinya dengan yang lebih empuk dan tahan lama.
                     <br> <strong>Pemulihan Rangka Kayu</strong> – Jika rangka kayu mengalami kerusakan atau warna kayunya sudah pudar, kami bisa memperbaikinya dan mempliturnya kembali agar tampak seperti baru.
                     <br> <strong>Penggantian Kain Pelapis</strong> – Jika kain sofa sudah sobek atau warnanya memudar, kami menyediakan berbagai pilihan kain pelapis yang berkualitas dan sesuai dengan selera Anda.
                    </p>
                  </blockquote>

                  
                  <h3>Sofa Lama, Tampilan Baru.</h3> 
                  <p>
                    Dengan layanan <strong>reparasi sofa</strong> , Anda tidak hanya menghemat biaya dibandingkan membeli yang baru, tetapi juga bisa tetap mempertahankan sofa kesayangan Anda dalam kondisi terbaik. 
                    Dari segi fungsi hingga visual, sofa yang direparasi bisa tampil lebih prima dan modern.
                  </p>

                  <h3>Jasa Reparasi Sofa di Rifqi Mebel Semarang.</h3>
                  <p>
                    Kini, Rifqi Mebel Semarang juga membuka jasa reparasi sofa yang bisa disesuaikan dengan kebutuhan Anda. 
                    Kami siap membantu memperbaiki dan memperbarui sofa sesuai request, sehingga tetap nyaman digunakan dan tampak seperti baru. 
                  </p>

                  <h3>Hubungi Kami.</h3>
                  <p>
                    Jangan biarkan sofa kesayangan Anda terlihat usang dan tak nyaman lagi. 
                    Percayakan reparasi sofa Anda kepada <strong>Rifqi Mebel Semarang</strong>, dan rasakan perbedaannya!
                   <strong>Rifqi Mebel Semarang – Transformasi Sofa Lama Menjadi Lebih Prima!  </strong>                  
                  </p>

                </div><!-- End post content -->

                <div class="meta-bottom">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="#">Business</a></li>
                  </ul>

                  <i class="bi bi-tags"></i>
                  <ul class="tags">
                    <li><a href="#">Creative</a></li>
                    <li><a href="#">Tips</a></li>
                    <li><a href="#">Marketing</a></li>
                  </ul>
                </div><!-- End meta bottom -->

              </article>

            </div>
          </section><!-- /Blog Details Section -->

          <!-- Blog Author Section -->
          <section id="blog-author" class="blog-author section">

            <div class="container">
              <div class="author-container d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                <div>
                  <h4>Jane Smith</h4>
                  <div class="social-links">
                    <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                  </div>
                  <p>
                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                  </p>
                </div>
              </div>
            </div>

          </section><!-- /Blog Author Section -->

          <!-- Blog Comments Section -->
          <section id="blog-comments" class="blog-comments section">

            <div class="container">

              <h4 class="comments-count">8 Comments</h4>

              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-1.jpg') }}" alt=""></div>
                  <div>
                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                      Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->

              <div id="comment-2" class="comment">
                <div class="d-flex">
                  <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-2.jpg') }}" alt=""></div>
                  <div>
                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                    <time datetime="2020-01-01">01 Jan,2022</time>
                    <p>
                      Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                    </p>
                  </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                  <div class="d-flex">
                    <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-3.jpg') }}" alt=""></div>
                    <div>
                      <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                      <time datetime="2020-01-01">01 Jan,2022</time>
                      <p>
                        Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                        Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                        Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                      </p>
                    </div>
                  </div>

                  <div id="comment-reply-2" class="comment comment-reply">
                    <div class="d-flex">
                      <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-4.jpg') }}" alt=""></div>
                      <div>
                        <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                          Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                        </p>
                      </div>
                    </div>

                  </div><!-- End comment reply #2-->

                </div><!-- End comment reply #1-->

              </div><!-- End comment #2-->

            </div>

          </section>
          <!-- /Blog Comments Section -->

          <!-- Comment Form Section -->
          <section id="comment-form" class="comment-form section">
            <div class="container">

              <form action="">

                <h4>Post Comment</h4>
                <p>Your email address will not be published. Required fields are marked * </p>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Post Comment</button>
                </div>

              </form>

            </div>
          </section>
          <!-- /Comment Form Section -->

        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Search Widget -->
            <div class="search-widget widget-item">

              <h3 class="widget-title">Search</h3>
              <form action="">
                <input type="text">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
              </form>

            </div><!--/Search Widget -->

            <!-- Categories Widget -->
            <div class="categories-widget widget-item">

              <h3 class="widget-title">Categories</h3>
              <ul class="mt-3">
                <li><a href="#">General <span>(25)</span></a></li>
                <li><a href="#">Lifestyle <span>(12)</span></a></li>
                <li><a href="#">Travel <span>(5)</span></a></li>
              </ul>

            </div><!--/Categories Widget -->

            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">

              <h3 class="widget-title">Recent Posts</h3>

              <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="{{ route('blog.detail', ['slug' => '1']) }}">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

              <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="{{ route('blog.detail', ['slug' => '2']) }}">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

              <div class="post-item">
                <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="{{ route('blog.detail', ['slug' => '3']) }}">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->


          </div>

        </div>

      </div>
    </div>

  </main>

@endsection
