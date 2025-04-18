@extends('frontend.layouts.master')
@section('title', 'Blogs')
@section('content')
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header mb-8">
        <div class="container">
            <h1 class="page-title mb-0">Blog Single</h1>
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>Blog Single</li>
            </ul>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Page Content -->
    <div class="page-content mb-8">
        <div class="container">
            <div class="row gutter-lg">
                <div class="main-content post-single-content">
                    <div class="post post-grid post-single">
                        <figure class="post-media br-sm">
                            <img src="{{ asset('public/frontend/assets/images/blog/single/1.jpg')}}" alt="Blog" width="930" height="500" />
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date">03.01.2021</a>
                                <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                            </div>
                            <h2 class="post-title"><a href="#">Fashion tells about who you are from external point</a></h2>
                            <div class="post-content">
                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. 
                                        Sed egstas, ant at vulputate volutpat, uctus metus libero eu augue, vitae luctus metus libero eu augue. </p>
                                <p>Morbi purus libero, faucibus adi piscing, com modo quis, gravida iest. 
                                    Sed lectus. Praesent elementum hendrerit tortor. 
                                    Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, 
                                    mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.  pede arcu, 
                                    dapibus eu, fermen tum et, dapibus sed, urna. <a href="#">Morbi interdum mollis sapien.</a>
                                    Sed ac risus. Pha sellus lacinia, magna a  laoreet, lect us arcu pulvinar risus, 
                                    vitae fac ilisis libero dolor a purus. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Post -->
                    <blockquote class="text-center mb-8">
                        <i class="fas fa-quote-left"></i>
                        <p class="font-weight-bold text-dark mt-1 mb-2">War and Marketing Have Many Similarities</p>
                        <cite class="font-weight-normal text-dark">JELLY CRISTIANA</cite>
                    </blockquote>
                    <!-- End Blockquote -->
                    <p class="mb-10">Morbi interdum mollis sapien. Sed ac risus. Pha sellus lacinia, magna a  laoreet, lect us arcu pulvinar risus, vitae fac ilisis libeo dolor. 
                        Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna.</p>
                    <h4 class="title title-md font-weight-bold">Defaulting to Mindfulness: The Third Person Effect</h4>
                    <p class="mb-2">Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, 
                        da pibus id, mattis vel, nisi. Sed pretium, ligula soll itudin laoreet viverra. Sed lectus. 
                        Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, 
                        lacus a ultric sagittis, mi neque euismod duin.</p>
                    <ul class="list-style-none list-type-check">
                        <li>Nunc nec porttitor turpis. In eu risus enim  neque, aliquet ve In vitae mollis elit.</li>
                        <li>Vivamus finibus vel mauris  eu risus enut vehicula.</li>
                        <li>Nullam a magna porttitor, dictum risus nec, fauci eu risus enbus sapien.</li>
                        <li>Ultrices eros in  eu risus encursus turpis massa tincidunt ante.</li>
                    </ul>
                    <p>Nibh ipsum consequat nisl vel. Non arcu risus quis varius quam quisque id diam vel. Eu turpis egestas pharetra.</p>
                    <div class="tags">
                        <label class="text-dark mr-2">Tags:</label>
                        <a href="#" class="tag">Fashion</a>
                        <a href="#" class="tag">Style</a>
                        <a href="#" class="tag">Travel</a>
                        <a href="#" class="tag">Women</a>
                    </div>
                    <!-- End Tag -->
                    <div class="social-links mb-10">
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                            <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                        </div>
                    </div>
                    <!-- End Social Links -->
                    <div class="post-author-detail">
                        <figure class="author-media mr-4">
                            <img src="{{ asset('public/frontend/assets/images/blog/single/1.png')}}" alt="Author" width="105" height="105" />
                        </figure>
                        <div class="author-details">
                            <div class="author-name-wrapper flex-wrap mb-2">
                                <h4 class="author-name font-weight-bold mb-2 pr-4 mr-auto">John Doe
                                    <span class="font-weight-normal text-default">(AUTHOR)</span>
                                </h4>
                                <a href="#" class="btn btn-primary btn-link btn-icon-right pb-0 text-normal font-weight-normal mb-2">More Posts by admin<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                            <p class="mb-0">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismoder eu pulvinar nunc sapien ornare nisl.
                                Ped earcudaap ibuseu, fermentum et, dapibus sed, urna. Morbi interdum mollis sapien. </p>
                        </div>
                    </div>
                    <!-- End Post Author Detail -->
                    <div class="post-navigation">
                        <div class="nav nav-prev">
                            <a href="#" class="align-items-start text-left">
                                <span><i class="w-icon-long-arrow-left"></i>previous post</span>
                                <span class="nav-content mb-0 text-normal">Vivamus vestibulum ntulla nec ante</span>
                            </a>
                        </div>
                        <div class="nav nav-next"> 
                            <a href="#" class="align-items-end text-right">
                                <span>next post<i class="w-icon-long-arrow-right"></i></span>
                                <span class="nav-content mb-0 text-normal">Fusce lacinia arcuet nulla</span>
                            </a>
                        </div>
                    </div>
                    <!-- End Post Navigation -->
                    <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                    <div class="swiper">
                        <div class="post-slider swiper-container swiper-theme nav-top pb-2" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 2
                                },
                                '1200': {
                                    'slidesPerView': 3
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-xs-2 cols-1">
                                <div class="swiper-slide post post-grid">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="{{ asset('public/frontend/assets/images/blog/single/2.jpg')}}" alt="Post" width="296"
                                                height="190" style="background-color: #bcbcb4;" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">Logan Cee</a>
                                            - <a href="#" class="post-date">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title mb-3"><a href="post-single.html">Fashion tell about who you are from...</a></h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide post post-grid">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="{{ asset('public/frontend/assets/images/blog/single/3.jpg')}}" alt="Post" width="296"
                                                height="190" style="background-color: #cad2d1;" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">Hilary Kreton</a>
                                            - <a href="#" class="post-date">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title mb-3"><a href="post-single.html">Comes a cool blog post with Images</a></h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide post post-grid">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="{{ asset('public/frontend/assets/images/blog/single/4.jpg')}}" alt="Post" width="296"
                                                height="190" style="background-color: #ececec;" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">Casper Dailn</a>
                                            - <a href="#" class="post-date">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title mb-3"><a href="post-single.html">Comes a cool blog post with Images</a></h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide post post-grid">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="{{ asset('public/frontend/assets/images/blog/single/5.jpg')}}" alt="Post" width="296"
                                                height="190" style="background-color: #AFAFAF;" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            - <a href="#" class="post-date">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title mb-3"><a href="post-single.html">We want to be different and fashion gives to me that outlet</a></h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <button class="swiper-button-next"></button>
                            <button class="swiper-button-prev"></button>
                        </div>
                    </div>
                    <!-- End Related Posts -->
                </div>
                <!-- End of Main Content -->
                <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                    <div class="sidebar-overlay">
                        <a href="#" class="sidebar-close">
                            <i class="close-icon"></i>
                        </a>
                    </div>
                    <a href="#" class="sidebar-toggle">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <div class="sidebar-content">
                        <div class="sticky-sidebar">
                            <div class="widget widget-search-form">
                                <div class="widget-body">
                                    <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                        <input type="text" class="form-control"
                                            placeholder="Search in Blog" autocomplete="off" required>
                                        <button class="btn btn-search"><i
                                                class="w-icon-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- End of Widget search form -->
                            <div class="widget widget-categories">
                                <h3 class="widget-title bb-no mb-0">Categories</h3>
                                <ul class="widget-body filter-items search-ul">
                                    <li><a href="blog.html">Clothes</a></li>
                                    <li><a href="blog.html">Entertainment</a></li>
                                    <li><a href="blog.html">Fashion</a></li>
                                    <li><a href="blog.html">Lifestyle</a></li>
                                    <li><a href="blog.html">Others</a></li>
                                    <li><a href="blog.html">Shoes</a></li>
                                    <li><a href="blog.html">Technology</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget categories -->
                            <div class="widget widget-posts">
                                <h3 class="widget-title bb-no">Popular Posts</h3>
                                <div class="widget-body">
                                    <div class="swiper">
                                        <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                            'spaceBetween': 20,
                                            'slidesPerView': 1
                                        }">
                                            <div class="swiper-wrapper row cols-1">
                                                <div class="swiper-slide widget-col">
                                                    <div class="post-widget mb-4">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{ asset('public/frontend/assets/images/blog/sidebar/1.jpg')}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">March 1, 2021</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="post-single.html">Fashion tells about who you are from external point</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="post-widget mb-4">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{ asset('public/frontend/assets/images/blog/sidebar/2.jpg')}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">March 5, 2021</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="post-single.html">New found the men dress for summer</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="post-widget mb-2">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{ asset('public/frontend/assets/images/blog/sidebar/3.jpg')}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">March 1, 2021</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="post-single.html">Cras ornare tristique elit</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide widget-col">
                                                    <div class="post-widget mb-4">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{ asset('public/frontend/assets/images/blog/sidebar/4.jpg')}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">March 1, 2021</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="post-single.html">Vivamus vestibulum ntulla nec ante</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="post-widget mb-4">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{ asset('public/frontend/assets/images/blog/sidebar/5.jpg')}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">March 5, 2021</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="post-widget mb-2">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{ asset('public/frontend/assets/images/blog/sidebar/6.jpg')}}" alt="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">March 1, 2021</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="post-single.html">Comes a cool blog post with Images</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="swiper-button-next"></button>
                                            <button class="swiper-button-prev"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Widget posts -->
                            <div class="widget widget-custom-block">
                                <h3 class="widget-title bb-no">Custom Block</h3>
                                <div class="widget-body">
                                    <p class="text-default mb-0">Fringilla urna porttitor rhoncus dolor purus.
                                        Luctus veneneratis lectus magna fring.
                                        Suspendisse potenti. Sed egestas, ante et 
                                        vulputate volutpat, uctus metus libero.</p>
                                </div>
                            </div>
                            <!-- End of Widget custom block -->
                            <div class="widget widget-tags">
                                <h3 class="widget-title bb-no">Browse Tags</h3>
                                <div class="widget-body tags">
                                    <a href="#" class="tag">Fashion</a>
                                    <a href="#" class="tag">Style</a>
                                    <a href="#" class="tag">Travel</a>
                                    <a href="#" class="tag">Women</a>
                                    <a href="#" class="tag">Men</a>
                                    <a href="#" class="tag">Hobbies</a>
                                    <a href="#" class="tag">Shopping</a>
                                    <a href="#" class="tag">Photography</a>
                                </div>
                            </div>
                            <div class="widget widget-calendar">
                                <h3 class="widget-title bb-no">Calendar</h3>
                                <div class="widget-body">
                                    <div class="calendar-container" data-calendar-options="{
                                        'dayExcerpt': 1
                                    }"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- End of Page Content -->
</main>
@endsection
