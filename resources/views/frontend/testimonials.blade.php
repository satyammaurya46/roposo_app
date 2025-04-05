@extends('frontend.layouts.master')
@section('title', 'Testimonials')
@section('content')
<main class="main">
    <!-- Start of Page Header -->
    <div class="page-header">
        <div class="container">
            <h1 class="page-title">Testimonials</h1>
            <ul class="breadcrumb">
                <li><a href="demo1.html">Home</a></li>
                <li>Testimonials</li>
            </ul>
        </div>
    </div>
    <!-- End of Page Header -->

    <!-- Start of Page Content -->
    <div class="page-content mb-10 pb-2 mt-10">
        <div class="container">

            <section class="mb-10">
                <div class="swiper-container shadow-swiper swiper-theme show-code-action" data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                        <div class="swiper-slide testimonial-wrap">
                            <div class="testimonial testimonial-centered testimonial-shadow">
                                <div class="testimonial-info">
                                    <figure class="testimonial-author-thumbnail">
                                        <img src="{{ asset('public/frontend/assets/images/agents/1-100x100.png')}}" alt="Testimonial"
                                            width="100" height="100" />
                                    </figure>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetuered doPellentesque
                                    aliquet nib Nullam mollis urna. In nisi nibh nequtesq ue
                                    aliquet urnaIn mattis m dolor sit amet...
                                </blockquote>
                                <cite>
                                    Victoria Ventura<span>Customer</span>
                                </cite>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-wrap">
                            <div class="testimonial testimonial-centered testimonial-shadow">
                                <div class="testimonial-info">
                                    <figure class="testimonial-author-thumbnail">
                                        <img src="{{ asset('public/frontend/assets/images/agents/2-100x100.png')}}" alt="Testimonial"
                                            width="100" height="100" />
                                    </figure>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetuered doPellentesque
                                    aliquet nib Nullam mollis urna. In nisi nibh nequtesq ue
                                    aliquet urnaIn mattis m dolor sit amet...
                                </blockquote>
                                <cite>
                                    Henry Harry<span>Customer</span>
                                </cite>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-wrap">
                            <div class="testimonial testimonial-centered testimonial-shadow">
                                <div class=" testimonial-info">
                                    <figure class="testimonial-author-thumbnail">
                                        <img src="{{ asset('public/frontend/assets/images/agents/3-100x100.png')}}" alt="Testimonial"
                                            width="100" height="100" />
                                    </figure>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 100%;"></span>
                                        </div>
                                    </div>
                                </div>
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetuered doPellentesque
                                    aliquet nib Nullam mollis urna. In nisi nibh nequtesq ue
                                    aliquet urnaIn mattis m dolor sit amet...
                                </blockquote>
                                <cite>
                                    Anna Miranda<span>Customer</span>
                                </cite>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

        </div>
        <!-- End of Element Section -->
    </div>
    <!-- End of Page Content -->
</main>
@endsection
