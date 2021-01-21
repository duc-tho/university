@extends('client.layout.layout_ngoaingu.index')
@section('title',' Tin Tức-Sự Kiện Khoa Ngoại Ngữ')
@section('main')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Trang chủ</a></li>
          <li>Tin tức</li>
        </ol>
        <h2>Tin tức - Sự kiện</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="{{route('chitietttkhoangoaingu')}}"><img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-1.jpg')}}" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
              <h2 class="entry-title h5">
                <a href="{{route('chitietttkhoangoaingu')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. 
                 
                </p>
                
              </div>
            </div>

            </article><!-- End blog entry -->

            
            <article class="entry row">
            <div class="col-md-3">
              <div class="entry-img">
                <a href="news-detail.html"><img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-2.jpg')}}" alt="" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-md-9">
              <h2 class="entry-title h5">
                <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                 
                </p>
               
              </div>
            </div>
            </article><!-- End blog entry -->

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="news-detail.html"><img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-3.jpg')}}" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
                <h2 class="entry-title h5">
                  <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. 
                  </p>
                  
                </div>
              </div>
            </article><!-- End blog entry -->

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="news-detail.html"><img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-4.jpg')}}" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
                <h2 class="entry-title h5">
                  <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                   
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    Aspernatur rerum perferendis et sint, who know what is going on herer!!!!!!.
                  </p>
                  <!-- <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div> -->
                </div>
              </div>
            </article><!-- End blog entry -->

            <article class="entry row">
              <div class="col-md-3">
                <div class="entry-img">
                  <a href="news-detail.html"><img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-4.jpg')}}" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-9">
                <h2 class="entry-title h5">
                  <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                   
                  </ul>
                </div>

                <div class="entry-content">
                  <p>Pla pla pla pla pla pla pla pla</p>
                  <!-- <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div> -->
                </div>
              </div>
            </article><!-- End blog entry -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li class="active"><a  href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            <div class="sidebar">

              <h3 class="sidebar-title">Tìm kiếm</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Tin mới</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-recent-1.jpg')}}" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-recent-2.jpg')}}" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-recent-3.jpg')}}" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-recent-4.jpg')}}" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="{{asset('dist/layout/layout_khoangoaingu/img/blog-recent-5.jpg')}}" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Danh mục</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>

              </div><!-- End sidebar categories-->

              

              <h3 class="sidebar-title">Liên Quan</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>

              </div><!-- End sidebar tags-->
            
            <h3 class="sidebar-title">Quảng cáo</h3>
            <div class="" >
                <div class="banner-spot">
                    <div class="banner-img">
                        <a href="#">
                            <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/link/link-noi-that-g4-25281.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
                <div class="banner-spot">
                    <div class="banner-img">
                        <a href="#">
                            <img src="http://khoangoaingu.daihocdulich.edu.vn/upload/link/link-noi-that-g4-36680.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@stop