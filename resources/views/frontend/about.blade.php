@extends('frontend.layouts.master')
@section('title', 'About Us')
@section('content')
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title mb-0">About Us</h1>
            <ul class="breadcrumb text-center">
                <li><a href="demo1.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Breadcrumb -->
    <!--<nav class="breadcrumb-nav mb-10 pb-8">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </nav>-->
    <!-- End of Breadcrumb -->
    
    <!-- Start of Page Content -->
    <div class="page-content mt-10">
        <div class="container">
            
            <section class="boost-section pt-10 pb-10">
            <div class="container mt-10 mb-9">
                <div class="row align-items-center mb-10">
                    <div class="col-md-6 mb-8">
                        <figure class="br-lg">
                            <img src="{{ asset('public/frontend/assets/images/pages/about_us/3.jpg')}}" alt="Banner"
                                width="610" height="450" style="background-color: #9E9DA2;" />
                        </figure>
                    </div>
                    <div class="col-md-6 pl-lg-8 mb-8">
                        <h4 class="title text-left">We Boost Our Clients’ Bottom
                            Line by Optimizing Their Growth Potential</h4>
                        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Venenatis tellus in.
                            metus vulputate eu scelerisque felis. Vel pretium lectus qua .
                            Arpis massa. Nunc id cursus metus ididunt ut labore metus vulputate episcing.</p>
                        <a href="#" class="btn btn-dark btn-rounded">Visit Our Store</a>
                    </div>
                </div>
            </div>
        </section>
        </div>

            <section class="customer-service mb-10 pt-7 pb-5" style="background: #e3e3e3;">
            <div class="container mt-10 mb-9">
                <div class="row align-items-center">

                    <div class="col-md-6 pr-lg-8 mb-8">
                        <h2 class="title text-left">We Provide Continuous &amp; Kind Service for Customers</h2>
                        <div class="accordion accordion-simple accordion-plus">
                            <div class="card border-no">
                                <div class="card-header">
                                    <a href="#collapse3-1" class="collapse">Our Vision</a>
                                </div>
                                <div class="card-body expanded" id="collapse3-1">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit eiusamet, consectetur adipiscing elit,
                                        sed do eius mod tempor incididunt ut labore
                                        et dolore magna aliqua. Venenatis tell
                                        us in metus vulputate eu scelerisque felis. Vel pretium vulp.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse3-2" class="expand">Our Mission</a>
                                </div>
                                <div class="card-body collapsed" id="collapse3-2">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit eiusamet, consectetur adipiscing elit,
                                        sed do eius mod tempor incididunt ut labore
                                        et dolore magna aliqua. Venenatis tell
                                        us in metus vulputate eu scelerisque felis. Vel pretium vulp.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse3-3" class="expand">Our Values</a>
                                </div>
                                <div class="card-body collapsed" id="collapse3-3">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit eiusamet, consectetur adipiscing elit,
                                        sed do eius mod tempor incididunt ut labore
                                        et dolore magna aliqua. Venenatis tell
                                        us in metus vulputate eu scelerisque felis. Vel pretium vulp.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-8">
                        <figure class="br-lg">
                            <img src="{{ asset('public/frontend/assets/images/pages/about_us/2.jpg')}}" alt="Banner"
                                width="610" height="500" style="background-color: #CECECC;" />
                        </figure>
                    </div>
                    </div>
                </div>
            </section>
            
            <div class="container">
            
            <h2 class="title text-left mb-5 appear-animate">Partners & Collaborators</h2>
            <div class="swiper-container swiper-theme brands-wrapper mb-10 bg-white appear-animate" data-swiper-options="{
                'slidesPerView': 1,
                'breakpoints': {
                    '576': {
                        'slidesPerView': 3
                    },
                    '768': {
                        'slidesPerView': 4
                    },
                    '992': {
                        'slidesPerView': 5
                    }
                }
            }">
                <div class="swiper-wrapper row gutter-no cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    <div class="swiper-slide brand-col">
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/1.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/2.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                    </div>
                    <div class="swiper-slide brand-col">
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/3.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/4.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                    </div>
                    <div class="swiper-slide brand-col">
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/5.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/6.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                    </div>
                    <div class="swiper-slide brand-col">
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/7.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/8.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                    </div>
                    <div class="swiper-slide brand-col">
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/9.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                        <figure class="brand-wrapper">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo3/brand/10.png')}}" alt="Brand" width="247" height="94" />
                        </figure>
                    </div>
                </div>
            </div>
            <!-- End of Brands Wrapper -->

            <section class="count-section mb-10 pb-5">
                <div class="swiper-container swiper-theme" data-swiper-options="{
                    'slidesPerView': 1,
                    'breakpoints': {
                        '768': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-3 cols-md-2 cols-1">
                        <div class="swiper-slide counter-wrap">
                            <div class="counter text-center">
                                <span class="count-to" data-to="15">0</span>
                                <span>M+</span>
                                <h4 class="title title-center">Products For Sale</h4>
                                <p>Diam maecenas ultricies mi eget mauris<br>
                                    Nibh tellus molestie nunc non</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap">
                            <div class="counter text-center">
                                <span>$</span>
                                <span class="count-to" data-to="25">0</span>
                                <span>B+</span>
                                <h4 class="title title-center">Community Earnings</h4>
                                <p>Diam maecenas ultricies mi eget mauris<br>
                                    Nibh tellus molestie nunc non</p>
                            </div>
                        </div>
                        <div class="swiper-slide counter-wrap">
                            <div class="counter text-center">
                                <span class="count-to" data-to="100">0</span>
                                <span>M+</span>
                                <h4 class="title title-center">Growing Buyers</h4>
                                <p>Diam maecenas ultricies mi eget mauris<br>
                                    Nibh tellus molestie nunc non</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </div>

        <section class="boost-section pt-10 pb-10">
            <div class="container mt-10 mb-9">
                <div class="row align-items-center mb-10">
                    <div class="col-md-6 mb-8">
                        <figure class="br-lg">
                            <img src="{{ asset('public/frontend/assets/images/pages/about_us/3.jpg')}}" alt="Banner"
                                width="610" height="450" style="background-color: #9E9DA2;" />
                        </figure>
                    </div>
                    <div class="col-md-6 pl-lg-8 mb-8">
                        <h4 class="title text-left">We Boost Our Clients’ Bottom
                            Line by Optimizing Their Growth Potential</h4>
                        <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Venenatis tellus in.
                            metus vulputate eu scelerisque felis. Vel pretium lectus qua .
                            Arpis massa. Nunc id cursus metus ididunt ut labore metus vulputate episcing.</p>
                        <a href="#" class="btn btn-dark btn-rounded">Visit Our Store</a>
                    </div>
                </div>

                <div class="awards-wrapper">
                    <h4 class="title title-center font-weight-bold mb-10 pb-1 ls-25">Awards</h4>
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '768': {
                                'slidesPerView': 2
                            },
                            '992': {
                                'slidesPerView': 3
                            },
                            '1200': {
                                'slidesPerView': 4
                            }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-md-2 cols-1">
                            <div class="swiper-slide image-box-wrapper">
                                <div class="image-box text-center">
                                    <figure>
                                        <img src="{{ asset('public/frontend/assets/images/pages/about_us/1.png')}}" alt="Award Image" width="109" height="105" />
                                    </figure>
                                    <p>Winner Seo Master MAGT<br>
                                        Smart Start Award 2018</p>
                                </div>
                            </div>
                            <div class="swiper-slide image-box-wrapper">
                                <div class="image-box text-center">
                                    <figure>
                                        <img src="{{ asset('public/frontend/assets/images/pages/about_us/2.png')}}" alt="Award Image" width="109" height="105" />
                                    </figure>
                                    <p>Top Social Media Agencies<br>
                                        Next Partner 2019</p>
                                </div>
                            </div>
                            <div class="swiper-slide image-box-wrapper mt-3">
                                <div class="image-box text-center">
                                    <figure>
                                        <img src="{{ asset('public/frontend/assets/images/pages/about_us/3.png')}}" alt="Award Image" width="109" height="105" />
                                    </figure>
                                    <p>5 Fastest Growing Abstract<br>
                                        Solution Providers 2020</p>
                                </div>
                            </div>
                            <div class="swiper-slide image-box-wrapper">
                                <div class="image-box text-center">
                                    <figure>
                                        <img src="{{ asset('public/frontend/assets/images/pages/about_us/4.png')}}" alt="Award Image" width="109" height="105" />
                                    </figure>
                                    <p>National Excellence Agencie<br>
                                        Award Winner 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="member-section mt-10 pt-9 mb-10 pb-4">
            <div class="container">
                <h4 class="title title-center mb-3">Meet Our Leaders</h4>
                <p class="text-center mb-8">Nunc id cursus metus aliquam. Libero id faucibus nisl tincidunt eget. Aliquam<br>
                    maecenas ultricies mi eget mauris. Volutpat ac</p>
                <div class="swiper-container swiper-theme" data-swiper-options="{
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
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-sm-2 cols-1">
                        <div class="swiper-slide member-wrap">
                            <figure class="br-lg">
                                <img src="{{ asset('public/frontend/assets/images/pages/about_us/4.jpg')}}" alt="Member" width="295" height="332" />
                                <div class="overlay">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    </div>
                                </div>
                            </figure>
                            <div class="member-info text-center">
                                <h4 class="member-name">John Doe</h4>
                                <p class="text-uppercase">Founder &amp; CEO</p>
                            </div>
                        </div>
                        <div class="swiper-slide member-wrap">
                            <figure class="br-lg">
                                <img src="{{ asset('public/frontend/assets/images/pages/about_us/5.jpg')}}" alt="Member" width="295" height="332" />
                                <div class="overlay">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    </div>
                                </div>
                            </figure>
                            <div class="member-info text-center">
                                <h4 class="member-name">Jessica Doe</h4>
                                <p class="text-uppercase">Marketing</p>
                            </div>
                        </div>
                        <div class="swiper-slide member-wrap">
                            <figure class="br-lg">
                                <img src="{{ asset('public/frontend/assets/images/pages/about_us/6.jpg')}}" alt="Member" width="295" height="332" />
                                <div class="overlay">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    </div>
                                </div>
                            </figure>
                            <div class="member-info text-center">
                                <h4 class="member-name">Rick Edward Doe</h4>
                                <p class="text-uppercase">Developer</p>
                            </div>
                        </div>
                        <div class="swiper-slide member-wrap">
                            <figure class="br-lg">
                                <img src="{{ asset('public/frontend/assets/images/pages/about_us/7.jpg')}}" alt="Member" width="295" height="332" />
                                <div class="overlay">
                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    </div>
                                </div>
                            </figure>
                            <div class="member-info text-center">
                                <h4 class="member-name">Melinda Wolosky</h4>
                                <p class="text-uppercase">Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
