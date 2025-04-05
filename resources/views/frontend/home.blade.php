@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')
    <main class="main">
        <div class="container pb-2">
            <!-- End Of Category Wrapper -->
            <div class="intro-section mb-2">
                <div class="row">
                    <div class="intro-wrapper col-lg-9 mt-4 mb-4">
                        <div class="swiper-container swiper-theme pg-inner pg-white animation-slider"
                            data-swiper-options="{
                   'spaceBetween': 0,
                   'slidesPerView': 1
                   }">
                            <div class="swiper-wrapper row gutter-no cols-1">
                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                                    style="background-image: url({{ asset('public/frontend/assets/images/demos/demo12/slides/intro-3.jpg') }}); background-color: #3F3E3A;">
                                    <div class="banner-content y-50 text-right">
                                        <h3 class="banner-subtitle text-uppercase font-secondary font-weight-bolder slide-animate"
                                            data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.2s'}">
                                            From Online Store
                                        </h3>
                                        <h2 class="banner-title font-secondary text-capitalize text-white slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                            Men's Lifestyle<br>
                                            Collection
                                        </h2>
                                        <h4 class="banner-price-info font-weight-normal text-white ls-25 slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                            Discount <span class="font-weight-bolder text-white">50%
                                                OFF</span>This Week.
                                        </h4>
                                        <a href="demo12-shop.html"
                                            class="btn btn-outline btn-white btn-rounded btn-icon-right slide-animate"
                                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.5s', 'delay': '.6s'}">
                                            Shop Now
                                            <i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- End of Intro Slide 1 -->
                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide2 br-sm"
                                    style="background-image: url({{ asset('public/frontend/assets/images/demos/demo12/slides/intro-2.jpg') }}); background-color: #E2E2E0;">
                                    <div class="banner-content y-50">
                                        <h3 class="banner-subtitle text-capitalize text-default font-secondary font-weight-bold slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.2s'}">
                                            Special Discount On Sale
                                        </h3>
                                        <h2 class="banner-title font-secondary text-dark ls-25 slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                            Lotion for Beauties
                                        </h2>
                                        <h4 class="banner-price-info font-weight-normal text-dark font-secondary ls-25 slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                            Up to
                                            <span class="text-primary font-weight-bolder">30% OFF</span>
                                        </h4>
                                        <a href="demo12-shop.html"
                                            class="btn btn-outline btn-dark btn-rounded btn-icon-right slide-animate"
                                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.5s', 'delay': '.6s'}">
                                            Shop Now
                                            <i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- End of Intro Slide 2 -->
                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide3 br-sm"
                                    style="background-image: url({{ asset('public/frontend/assets/images/demos/demo12/slides/intro-1.jpg') }}); background-color: #EAEAEA;">
                                    <div class="banner-content y-50">
                                        <h3 class="banner-subtitle text-uppercase text-primary font-secondary font-weight-bold slide-animate"
                                            data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.5s', 'delay': '.2s'}">
                                            From Online Store
                                        </h3>
                                        <h2 class="banner-title font-secondary text-dark slide-animate"
                                            data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.4s'}">
                                            Women's Lifestyle<br>Collection
                                        </h2>
                                        <hr class="divider slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.5s'}">
                                        <h5 class=" text-dark text-uppercase font-secondary font-weight-bold mb-2 slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.4s'}">
                                            For - Women
                                        </h5>
                                        <h5 class="product-identifier font-weight-normal text-dark text-uppercase slide-animate"
                                            data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.5s', 'delay': '.6s'}">
                                            Product Identifier:
                                            <span class="font-weight-bolder text-primary">DD2030</span>
                                        </h5>
                                    </div>
                                </div>
                                <!-- End of Intro Slide 3 -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="intro-banner-wrapper col-lg-3 mt-4">
                        <div class="banner banner-fixed intro-banner br-sm mb-4">
                            <figure class="br-sm">
                                <img src="{{ asset('public/frontend/assets/images/demos/demo12/banner/banner-1.jpg') }}"
                                    alt="Category Banner" width="680" height="180"
                                    style="background-color: #565960;" />
                            </figure>
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-uppercase text-lighter font-weight-bold">New In</h5>
                                <h3 class="banner-title text-white font-secondary font-weight-bolder ls-25">
                                    Cosmetical
                                </h3>
                                <a href="demo12-shop.html"
                                    class="btn btn-white btn-link btn-slide-right btn-icon-right btn-infinite">
                                    Shop Now
                                    <i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Intro Banner -->
                        <div class="banner banner-fixed intro-banner intro-banner2 br-sm mb-4">
                            <figure class="br-sm">
                                <img src="{{ asset('public/frontend/assets/images/demos/demo12/banner/banner-2.jpg') }}"
                                    alt="Category Banner" width="680" height="180"
                                    style="background-color: #565960;" />
                            </figure>
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-uppercase text-default font-weight-bold">On Sale
                                </h5>
                                <h3 class="banner-title text-dark font-secondary font-weight-bolder ls-25">Kids
                                    Store
                                </h3>
                                <a href="demo12-shop.html"
                                    class="btn btn-dark btn-link btn-slide-right btn-icon-right btn-infinite">
                                    Shop Now
                                    <i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End of Intro Banner -->
                    </div>
                </div>
            </div>
            <!-- End of Intro-wrapper -->

            <div class="title-link-wrapper title-select after-none appear-animate">
                <h2 class="title font-secondary font-weight-bolder">Selected Products</h2>
                <a href="{{ route('collection') }}" class="font-weight-bold ls-25">
                    More Products
                    <i class="w-icon-long-arrow-right"></i>
                </a>
            </div>
            <div class="swiper-container swiper-theme select-product-wrapper shadow-swiper appear-animate pb-2 mb-10"
                data-swiper-options="{
          'spaceBetween': 20,
          'slidesPerView': 2,
          'breakpoints': {
          '768': {
          'slidesPerView': 3
          },
          '992': {
          'slidesPerView': 4
          },
          '1200': {
          'slidesPerView': 5
          }
          }
          }">
                <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    @foreach ($bestSellingProducts as $product)
                        <div class="swiper-slide product product-image-gap product-simple">
                            <figure class="product-media">
                                <a href="javascript:void(0);">
                                    @foreach ($product['imageUrls'] as $index => $image)
                                        @if ($index < 2)
                                            <img src="{{ $image }}" alt="Product" width="295" height="335" />
                                        @endif
                                    @endforeach
                                </a>
                                {{-- <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                 </div> --}}
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">QuickView</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                {{-- <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a> --}}
                                <h4 class="product-name">
                                    <a href="javascript:void(0);">{{ $product['productName'] }}</a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings"
                                            style="width: {{ getRatings($product['supplierRating'], $product['maxSupplierRating']) }}%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    {{-- <a href="javascript:void(0);" class="rating-reviews">(1 reviews)</a> --}}
                                </div>
                                <div class="product-pa-wrapper">
                                    <div class="product-price">
                                        @foreach ($product['productVariantDetails'] as $index => $priceVariant)
                                            @if ($index == 0)
                                                <ins class="new-price">{{ INR }}
                                                    {{ $priceVariant['price'] }}</ins>
                                            @endif
                                        @endforeach
                                        {{-- <ins class="new-price">{{INR}} 20.83</ins>
                        <del class="old-price">{{INR}} 27.07</del> --}}
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                                            Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">QuickView</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Gold Watch</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 5%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">{{INR}} 20.83</ins>
                         <del class="old-price">{{INR}} 27.07</del>
                      </div>
                      <div class="product-action">
                         <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                         Cart</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-2-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-2-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Comfortable Backpack</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 0%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$47.26</ins>
                         <del class="old-price">$54.69</del>
                      </div>
                      <div class="product-action">
                         <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                         Cart</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-3-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-3-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Men's Suede Belt</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 80%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$63.91</ins>
                      </div>
                      <div class="product-action">
                         <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                         Cart</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-4-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-4-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-countdown-container">
                      <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                         data-format="DHMS" data-compact="false"
                         data-labels-short="Days, Hours, Mins, Secs">
                         00:00:00:00
                      </div>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Mini Wireless Earphone</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 80%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$59.17 - $129.27</ins>
                      </div>
                      <div class="product-action">
                         <a href="product-default.html"
                            class="btn-primary btn-product btn btn-link btn-underline">Select
                         Options</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-5-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-5-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Charge &amp; Alarm Machine</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 100%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$65.27</ins>
                      </div>
                      <div class="product-action">
                         <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                         Cart</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-3-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-3-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Men's Suede Belt</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 80%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$63.91</ins>
                      </div>
                      <div class="product-action">
                         <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                         Cart</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-4-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-4-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-countdown-container">
                      <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                         data-format="DHMS" data-compact="false"
                         data-labels-short="Days, Hours, Mins, Secs">
                         00:00:00:00
                      </div>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Mini Wireless Earphone</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 80%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$59.17 - $129.27</ins>
                      </div>
                      <div class="product-action">
                         <a href="product-default.html"
                            class="btn-primary btn-product btn btn-link btn-underline">Select
                         Options</a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="swiper-slide product product-image-gap product-simple">
                <figure class="product-media">
                   <a href="product-default.html">
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-5-1.jpg')}}" alt="Product" width="295"
                      height="335" />
                   <img src="{{asset('public/frontend/assets/images/demos/demo12/products/1-5-2.jpg')}}" alt="Product" width="295"
                      height="335" />
                   </a>
                   <div class="product-action-vertical">
                      <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                   </div>
                   <div class="product-action">
                      <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                   </div>
                </figure>
                <div class="product-details">
                   <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                   <h4 class="product-name">
                      <a href="product-default.html">Charge &amp; Alarm Machine</a>
                   </h4>
                   <div class="ratings-container">
                      <div class="ratings-full">
                         <span class="ratings" style="width: 100%;"></span>
                         <span class="tooltiptext tooltip-top"></span>
                      </div>
                      <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                   </div>
                   <div class="product-pa-wrapper">
                      <div class="product-price">
                         <ins class="new-price">$65.27</ins>
                      </div>
                      <div class="product-action">
                         <a href="#" class="btn-cart btn-product btn btn-link btn-underline">Add To
                         Cart</a>
                      </div>
                   </div>
                </div>
             </div> --}}
                </div>
                <div class="swiper-pagination mt-4"></div>
            </div>

            <section class="boost-section pt-2 pb-2">
                <div class="container mt-5 mb-5">
                    <div class="row align-items-center mb-10">
                        <div class="col-md-6 mb-8">
                            <figure class="br-lg">
                                <img src="{{ asset('public/frontend/assets/images/pages/about_us/3.jpg') }}"
                                    alt="Banner" width="610" height="450" style="background-color: #9E9DA2;" />
                            </figure>
                        </div>
                        <div class="col-md-6 pl-lg-8 mb-8">
                            <h2 class="title text-left">Empower Your Dropshipping Business in India with Roposo Clout</h2>
                            <p class="mb-6">Seamless integration with Shopify and access to top-quality products. Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Venenatis tellus in.
                                metus vulputate eu scelerisque felis. Vel pretium lectus qua .
                                Arpis massa. Nunc id cursus metus ididunt ut labore metus vulputate episcing.</p>
                            <p><b>Official Shopify partner</b> <img
                                    src="{{ asset('public/frontend/assets/images/shopify-logo.png') }}"
                                    style="width: 100px; padding-left: 10px;" /></p>
                            <a href="#" class="btn btn-dark btn-rounded">Signup Today</a>
                            <p class="mt-1">100% free, Easy to use, No credit card required</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="swiper-container swiper-theme shadow-swiper "
                data-swiper-options="{
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
     'slidesPerView': 3
 }
}
}">
                <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                    <div class="swiper-slide icon-box-wrap">
                        <div class="icon-box icon-colored-circle icon-border-box text-center">
                            <span class="icon-box-icon text-white">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">1st Mover's Advantage</h4>
                                <p>50+ New products added weekly, directly in your inbox</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box-wrap">
                        <div class="icon-box icon-colored-circle icon-border-box text-center">
                            <span class="icon-box-icon text-white">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Fast 5-Day Delivery</h4>
                                <p>1 Lakh+ products with fast delivery right at your fingertips</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box-wrap">
                        <div class="icon-box icon-colored-circle icon-border-box text-center">
                            <span class="icon-box-icon text-white">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Vast Product Portfolio</h4>
                                <p>50+ Categories to choose from, 1,00,000+ Unique high-quality products </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-container swiper-theme shadow-swiper "
                data-swiper-options="{
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
     'slidesPerView': 3
 }
}
}">
                <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                    <div class="swiper-slide icon-box-wrap">
                        <div class="icon-box icon-colored-circle icon-border-box text-center">
                            <span class="icon-box-icon text-white">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">World-Class Support</h4>
                                <p>Work with our world-class support team around the clock in order to keep a pulse on all
                                    of your business needs at all times</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box-wrap">
                        <div class="icon-box icon-colored-circle icon-border-box text-center">
                            <span class="icon-box-icon text-white">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Easy Integration</h4>
                                <p>Single-click integration with your Shopify store, start Dropshipping in just 1 minute</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box-wrap">
                        <div class="icon-box icon-colored-circle icon-border-box text-center">
                            <span class="icon-box-icon text-white">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Real-Time Analytics</h4>
                                <p>Keep a pulse on the health of your business in one easy-to-read dashboard.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <section class="boost-section mt-5">
                <div class="container">
                    <div class="row align-items-center mb-10">
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-dark btn-rounded">Signup Today</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="top-categories-wrapper appear-animate mb-10">
                <h2 class="title title-center text-capitalize pt-7 mb-7">Top Categories of The Month</h2>
                <div class="pl-2 pr-2">
                    <div class="swiper-container swiper-theme shadow-swiper"
                        data-swiper-options="{
                    'spaceBetween': 40,
                    'breakpoints': {
                        '0': {
                            'slidesPerView': 2
                        },
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 8
                        }
                        }
                    }">
                        <div class="swiper-wrapper row cols-xl-8 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-1.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #C1C6CC;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Fashion</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-2.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #9BC4CA;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Shoes</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-3.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #5D6A73;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Kitchen</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-4.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #8692A0;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Earphone</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-5.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #E2E2E2;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Cosmetic</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-6.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #596F7C;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Cameras</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-7.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #B8BCBF;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Watches</a>
                                    </h4>
                                </div>
                            </div>
                            <div class="swiper-slide category category-ellipse">
                                <figure class="category-media">
                                    <a href="demo15-shop.html">
                                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/categories/cat-8.jpg') }}"
                                            alt="Categroy" width="190" height="190"
                                            style="background-color: #65737C;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="demo15-shop.html">Kid's</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

            <section class="customer-service mb-7 pt-10">
                <div class="row align-items-center">
                    <div class="col-md-6 pr-lg-8 mb-8">
                        <h2 class="title text-left">How to launch Dropshipping Ecommerce Brand in 30 seconds?</h2>
                        <div class="accordion accordion-simple accordion-plus">
                            <div class="card border-no">
                                <div class="card-header">
                                    <a href="#collapse3-1" class="collapse">Step 1</a>
                                </div>
                                <div class="card-body expanded" id="collapse3-1">
                                    <p class="mb-0 mt-3">
                                        One-Click Shopify Link – Login & connect in seconds.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse3-2" class="expand">Step 2</a>
                                </div>
                                <div class="card-body collapsed" id="collapse3-2">
                                    <p class="mb-0 mt-3">
                                        Instant Add Product – Find & add top products.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse3-3" class="expand">Step 3</a>
                                </div>
                                <div class="card-body collapsed" id="collapse3-3">
                                    <p class="mb-0 mt-3">
                                        Run Ads & Sell – Launch Facebook & Instagram ads.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a href="#collapse3-4" class="expand">Step 4</a>
                                </div>
                                <div class="card-body collapsed" id="collapse3-4">
                                    <p class="mb-0 mt-3">
                                        We Handle pack, pick and deliver done for you.
                                    </p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-dark btn-rounded">Signup Today</a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-8">
                        <figure class="br-lg">
                            <img src="{{ asset('public/frontend/assets/images/pages/about_us/2.jpg') }}" alt="Banner"
                                width="610" height="500" style="background-color: #CECECC;" />
                        </figure>
                    </div>
                </div>
            </section>

            <!-- End of Selected Products Wrapper -->
        </div>
        <div class="banner banner-fixed purchase-banner appear-animate">
            <figure class="banner-img">
                <img src="{{ asset('public/frontend/assets/images/demos/demo12/banner/banner-5.jpg') }}" alt="Banner"
                    width="680" height="180" style="background-color: #342E30;" />
            </figure>
            <div class="banner-content text-center x-50 y-50 slide-animate"
                data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '15s', 'delay': '3s'}">
                <h3 class="banner-subtitle text-white text-uppercase font-secondary font-weight-bold">Today's
                    Special
                </h3>
                <h2 class="banner-title text-white text-uppercase font-secondary font-weight-bolder mb-2">Trending
                    Accessories Collection
                </h2>
                <p class="text-lighter font-weight-normal">
                    Free shipping on clearance orders of <span class="text-white font-weight-bolder"> $120
                    </span>or more
                </p>
                <a href="shop-banner-sidebar.html"
                    class="btn btn-lg btn-outline btn-white btn-rounded btn-icon-right slide-animate">
                    Purchase Now
                    <i class="w-icon-long-arrow-right"></i>
                </a>
            </div>
        </div>
        <!-- End of Banner -->
        <div class="container">
            <h2
                class="title title-latest-product font-secondary font-weight-bolder justify-content-center ls-normal mt-10 mb-2 pt-1 appear-animate">
                Latest Products
            </h2>
            <div class="tab tab-latest-product tab-nav-center tab-nav-underline tab-line-grow appear-animate">
                <ul class="nav nav-tabs bb-no justify-content-center" role="tablist">
                    <li class="nav-item mb-2">
                        <a class="nav-link active ls-normal" href="#tab1-1">New arrivals</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link ls-normal" href="#tab1-2">Best seller</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link ls-normal" href="#tab1-3">Top Rated</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link ls-normal" href="#tab1-4">Featured</a>
                    </li>
                </ul>
            </div>
            <!-- End of Tab -->
            <div class="tab-content product-wrapper appear-animate">
                <div class="tab-pane active" id="tab1-1">
                    <div class="swiper-container swiper-theme latest-product-wrapper shadow-swiper appear-animate mb-0"
                        data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                '576': {
                'slidesPerView': 2
                },
                '768': {
                'slidesPerView': 3
                },
                '992': {
                'slidesPerView': 4
                },
                '1200': {
                'slidesPerView': 5
                }
                }
                }">
                        <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mini Wireless Earphone</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.17 - $129.27</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Plastic Cup</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$10.62</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Charming Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 40%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$30.73</ins>
                                                <del class="old-price">$34.38</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wonderful Sound Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$80.15</ins>
                                                <del class="old-price">$84.30</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mobile Electronic Recorder</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.26</ins>
                                                <del class="old-price">$63.27</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare">
                                            </a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Red Cap Sound Marker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$31.00</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wireless Mouse</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 00%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.78</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Multi-colorful Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$60.11</ins>
                                                <del class="old-price">$72.83</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Cavin Fashion Suede Hand bag</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane" id="tab1-2">
                    <div class="swiper-container swiper-theme latest-product-wrapper shadow-swiper appear-animate mb-0"
                        data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                '576': {
                'slidesPerView': 2
                },
                '768': {
                'slidesPerView': 3
                },
                '992': {
                'slidesPerView': 4
                },
                '1200': {
                'slidesPerView': 5
                }
                }
                }">
                        <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mini Wireless Earphone</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.17 - $129.27</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Plastic Cup</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$10.62</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Charming Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 40%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$30.73</ins>
                                                <del class="old-price">$34.38</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wonderful Sound Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$80.15</ins>
                                                <del class="old-price">$84.30</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart" title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mobile Electronic Recorder</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.26</ins>
                                                <del class="old-price">$63.27</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Red Cap Sound Marker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$31.00</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wireless Mouse</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 00%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.78</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Multi-colorful Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$60.11</ins>
                                                <del class="old-price">$72.83</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add
                                                    To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Cavin Fashion Suede Hand bag</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add
                                                    To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare">
                                            </a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Electronics Black Wrist Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add
                                                    To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane" id="tab1-3">
                    <div class="swiper-container swiper-theme latest-product-wrapper shadow-swiper appear-animate mb-0"
                        data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                '576': {
                'slidesPerView': 2
                },
                '768': {
                'slidesPerView': 3
                },
                '992': {
                'slidesPerView': 4
                },
                '1200': {
                'slidesPerView': 5
                }
                }
                }">
                        <div class="swiper-wrapper row cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mini Wireless Earphone</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.17 - $129.27</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Plastic Cup</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$10.62</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Charming Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 40%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$30.73</ins>
                                                <del class="old-price">$34.38</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wonderful Sound Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$80.15</ins>
                                                <del class="old-price">$84.30</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mobile Electronic Recorder</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.26</ins>
                                                <del class="old-price">$63.27</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Red Cap Sound Marker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$31.00</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wireless Mouse</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 00%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.78</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Multi-colorful Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$60.11</ins>
                                                <del class="old-price">$72.83</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Cavin Fashion Suede Hand bag</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Electronics Black Wrist Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
                <div class="tab-pane" id="tab1-4">
                    <div class="swiper-container swiper-theme latest-product-wrapper shadow-swiper appear-animate row cols-lg-5 cols-md-4 cols-sm-3 cols-2 mb-2"
                        data-swiper-options="{
                'spaceBetween': 20,
                'slidesPerView': 2,
                'breakpoints': {
                '576': {
                'slidesPerView': 2
                },
                '768': {
                'slidesPerView': 3
                },
                '992': {
                'slidesPerView': 4
                },
                '1200': {
                'slidesPerView': 5
                }
                }
                }">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                        <div class="product-countdown-container">
                                            <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                data-format="DHMS" data-compact="false"
                                                data-labels-short="Days, Hours, Mins, Secs">
                                                00:00:00:00
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mini Wireless Earphone</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.17 - $129.27</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="product-default.html"
                                                    class="btn-primary btn-product btn btn-link btn-underline">Select
                                                    Options</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-3-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Plastic Cup</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$10.62</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-7-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Charming Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 40%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$30.73</ins>
                                                <del class="old-price">$34.38</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-4-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wonderful Sound Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$80.15</ins>
                                                <del class="old-price">$84.30</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-8-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Mobile Electronic Recorder</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$59.26</ins>
                                                <del class="old-price">$63.27</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Red Cap Sound Marker</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 0%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$31.00</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/3-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Wireless Mouse</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 00%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(0 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.78</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Multi-colorful Music Player</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$60.11</ins>
                                                <del class="old-price">$72.83</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/2-5-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Cavin Fashion Suede Hand bag</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 20%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.70</ins>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-1-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Gold Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product product-image-gap product-simple">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-2-1.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                            <img src="{{ asset('public/frontend/assets/images/demos/demo12/products/1-2-2.jpg') }}"
                                                alt="Product" width="295" height="335" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Compare"></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview"
                                                title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <a href="#" class="btn-wishlist w-icon-heart"
                                            title="Add to wishlist"></a>
                                        <h4 class="product-name">
                                            <a href="product-default.html">Electronics Black Wrist Watch</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                <ins class="new-price">$25.68</ins><del class="old-price">$30.45</del>
                                            </div>
                                            <div class="product-action">
                                                <a href="#"
                                                    class="btn-cart btn-product btn btn-link btn-underline">Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tab Pane -->
            </div>
            <!-- End of Tab Content -->
            <div class="banner link-banner-newsletter d-flex mb-8 align-items-center row gutter-no br-sm appear-animate"
                style="background-image: url({{ asset('public/frontend/assets/images/demos/demo12/banner/banner-6.jpg') }});
          background-color: #27393D;">
                <div class="col-xl-5 col-lg-4 mr-auto">
                    <figure class="banner-media d-lg-show">
                        <img src="{{ asset('public/frontend/assets/images/demos/demo12/banner/image-2.png') }}"
                            alt="Banner-image">
                    </figure>
                </div>
                <div class="banner-content col-xl-5 col-lg-6 col-sm-8 mb-4">
                    <h2 class="banner-title text-white text-capitalize font-secondary font-weight-bolder">Download
                        Roposo Clout App Now!
                    </h2>
                    <p>
                        Shopping fastly and easily more with our app. Get a link to download the app on your phone.
                    </p>
                    <form action="#" method="get"
                        class="input-wrapper input-wrapper-inline flex-wrap input-wrapper-rounded text-dark">
                        <input class="form-control text-dark br-xs bg-white mr-2" type="email"
                            placeholder="Enter Your Email..." name="email" id="email_4" required>
                        <button class="btn btn-primary btn-rounded br-xs" type="submit">Send Link</button>
                    </form>
                </div>
                <div class="col-lg-2 col-sm-4 newsletter-button">
                    <a href="#">
                        <img src="{{ asset('public/frontend/assets/images/demos/demo12/banner/button-1.jpg') }}"
                            class="mb-4" alt="Button" width="141" height="41"
                            style="background-color: #121315" />
                    </a>
                    <a href="#">
                        <img src="{{ asset('public/frontend/assets/images/demos/demo12/banner/button-2.jpg') }}"
                            alt="Button" width="141" height="41" style="background-color: #121315" />
                    </a>
                </div>
                <!-- End of Content Right -->
            </div>
            <!-- End of Link Banner Newsletter -->

            <section class="introduce mt-10 pt-10 mb-10 pb-10">
                <h2 class="title title-center">
                    We’re Devoted Marketing<br>Consultants Helping Your Business Grow
                </h2>
                <p class=" mx-auto text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor
                    labore et dolore magna aliqua. Venenatis tellu metus. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor
                    labore et dolore magna aliqua. Venenatis tellu metus. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor
                    labore et dolore magna aliqua. Venenatis tellu metus. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor
                    labore et dolore magna aliqua. Venenatis tellu metus</p>
                <p class="text-center"><a href="#" class="btn btn-dark btn-rounded mb-10">Shopify
                        Integration</a></p>
                <figure class="br-lg text-center">
                    <img src="{{ asset('public/frontend/assets/images/pages/about_us/1.jpg') }}" alt="Banner"
                        width="1240" height="540" style="background-color: #D0C1AE;" />
                </figure>
            </section>

            <div class="row banner-product-wrapper appear-animate pb-1 mb-10">
                <div class="banner-product col-xl-3 col-md-4 mb-4 mb-md-0">
                    <h2 class="title pt-3 mb-5 appear-animate">Featured Products</h2>
                    <div class="banner banner-fixed overlay-zoom br-xs">
                        <figure class="banner-media h-100">
                            <img src="{{ asset('public/frontend/assets/images/demos/demo15/banner/banner-4.jpg') }}"
                                alt="Product Banner" width="431" height="610"
                                style="background-color: #E2E2E2;" />
                        </figure>
                        <div class="banner-content">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold">Accessories</h5>
                            <h3 class="banner-title text-capitalize ls-25">All Smartwatches<br>Discount</h3>
                            <a href="demo15-shop.html"
                                class="btn btn-dark btn-md btn-outline btn-rounded btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper col-xl-9 col-md-8">
                    <ul class="nav-links list-style-none d-flex flex-wrap filter-random-order">
                        <li><a href="demo15-shop.html">Watches</a></li>
                        <li><a href="demo15-shop.html">Digital</a></li>
                        <li><a href="demo15-shop.html">Handbag</a></li>
                        <li><a href="demo15-shop.html">Speaker</a></li>
                        <li><a href="demo15-shop.html">Shirts</a></li>
                        <li><a href="demo15-shop.html">Shoes</a></li>
                        <li><a href="demo15-shop.html">Accessories</a></li>
                    </ul>
                    <div class="swiper-container swiper-theme"
                        data-swiper-options="{
                    'spaceBetween': 20,
                    'breakpoints': {
                        '0': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        },
                        '1520': {
                            'slidesPerView': 6
                        }
                    }
                    }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <div class="swiper-slide product-col">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-1-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-1-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Sound Maker</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-2-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-2-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Women's
                                                    Comforter</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                            </div>
                            <!-- End of Product Col -->
                            <div class="swiper-slide product-col">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-3-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-3-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Cup</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-4-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-4-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Wireless
                                                    Recorder</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                            </div>
                            <!-- End of Product Col -->
                            <div class="swiper-slide product-col">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-5-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-5-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">12% off</label>
                                            </div>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                            <div class="product-countdown-container">
                                                <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                    data-format="DHMS" data-compact="false"
                                                    data-labels-short="Days, Hours, Mins, Secs">
                                                    00:00:00:00
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Gold Watch</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-6-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-6-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Magnetic Charger
                                                    Box</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                            </div>
                            <!-- End of Product Col -->
                            <div class="swiper-slide product-col">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-7-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-7-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">19% off</label>
                                            </div>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                            <div class="product-countdown-container">
                                                <div class="product-countdown countdown-compact" data-until="2021, 9, 9"
                                                    data-format="DHMS" data-compact="false"
                                                    data-labels-short="Days, Hours, Mins, Secs">
                                                    00:00:00:00
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Mass Capacity
                                                    Battery</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-8-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-8-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Measure
                                                    Watch</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                            </div>
                            <!-- End of Product Col -->
                            <div class="swiper-slide product-col">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-9-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-9-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Men's Sport
                                                    Bag</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-10-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-10-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Mini Wireless
                                                    Earphone</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                            </div>
                            <!-- End of Product Col -->
                            <div class="swiper-slide product-col">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-11-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-11-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Mobile
                                                    Electronic Recorder</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-12-1.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-12-2.jpg') }}"
                                                    alt="Product" width="300" height="337">
                                            </a>
                                            <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="product-default.html">Professional
                                                    Camera Set</a></h4>
                                            <div class="product-price">
                                                <ins class="new-price">$60.54</ins><del class="old-price">$65.25</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Wrap -->
                            </div>
                            <!-- End of Product Col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Banner Product Wrapper -->

            <div class="row grid grid-float pt-2 banner-grid mb-9 appear-animate">
                <div class="grid-item col-lg-6 height-x2">
                    <div class="banner banner-fixed banner-lg br-sm">
                        <figure>
                            <img src="{{ asset('public/frontend/assets/images/demos/demo9/banner/1-1.jpg') }}"
                                alt="Banner" width="670" height="450" style="background-color: #E3E7EA;" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-capitalize font-weight-normal mb-0 ls-25">
                                Flash Sale <strong class="text-secondary text-uppercase">50% Off</strong>
                            </h5>
                            <h3 class="banner-title text-capitalize">Kitchen Collection</h3>
                            <p>Only until the end of this Week</p>
                            <a href="demo9-shop.html" class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-lg-6 height-x1">
                    <div class="banner banner-fixed banner-md br-sm">
                        <figure>
                            <img src="{{ asset('public/frontend/assets/images/demos/demo9/banner/1-2.jpg') }}"
                                alt="Banner" width="670" height="450" style="background-color: #2D2E32;" />
                        </figure>
                        <div class="banner-content">
                            <h3 class="banner-title text-white ls-25">
                                Accessories<br><span class="font-weight-normal ls-normal">Collection</span>
                            </h3>
                            <a href="demo9-shop.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-sm-6 col-lg-3 height-x1">
                    <div class="banner banner-fixed banner-sm br-sm">
                        <figure>
                            <img src="{{ asset('public/frontend/assets/images/demos/demo9/banner/1-3.jpg') }}"
                                alt="Banner" width="330" height="215" style="background-color: #181818;" />
                        </figure>
                        <div class="banner-content x-50 y-50 w-100 text-center">
                            <h3 class="banner-title font-secondary font-weight-normal mb-0 ls-25">Sale</h3>
                            <div class="banner-price-info font-weight-normal text-white mb-3">
                                Up to <strong class="text-uppercase">20% Off</strong>
                            </div>
                            <a href="demo9-shop.html" class="btn btn-white btn-link btn-underline">Shop
                                Collection</a>
                        </div>
                    </div>
                </div>
                <div class="grid-item col-sm-6 col-lg-3 height-x1">
                    <div class="banner banner-fixed banner-sm br-sm">
                        <figure>
                            <img src="{{ asset('public/frontend/assets/images/demos/demo9/banner/1-4.jpg') }}"
                                alt="Banner" width="330" height="215" style="background-color: #A3A8A6;" />
                        </figure>
                        <div class="banner-content">
                            <h5 class="banner-subtitle text-uppercase font-weight-bold">20% Off</h5>
                            <h3 class="banner-title text-capitalize ls-25">Kids Store</h3>
                            <a href="https://www.portotheme.com/html/Roposo Clout/demdo9-shop.html"
                                class="btn btn-dark btn-link btn-underline btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Banner Grid -->
        </div>

        <section class="about-us count-section mb-10 pb-5 pt-10 pb-10" style="background: #010101;">
            <div class="swiper-container swiper-theme"
                data-swiper-options="{
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
                            <h4 class="title title-center text-white">Products For Sale</h4>
                            <p class="text-white">Diam maecenas ultricies mi eget mauris<br>
                                Nibh tellus molestie nunc non</p>
                        </div>
                    </div>
                    <div class="swiper-slide counter-wrap">
                        <div class="counter text-center">
                            <span>$</span>
                            <span class="count-to" data-to="25">0</span>
                            <span>B+</span>
                            <h4 class="title title-center text-white">Community Earnings</h4>
                            <p class="text-white">Diam maecenas ultricies mi eget mauris<br>
                                Nibh tellus molestie nunc non</p>
                        </div>
                    </div>
                    <div class="swiper-slide counter-wrap">
                        <div class="counter text-center">
                            <span class="count-to" data-to="100">0</span>
                            <span>M+</span>
                            <h4 class="title title-center text-white">Growing Buyers</h4>
                            <p class="text-white">Diam maecenas ultricies mi eget mauris<br>
                                Nibh tellus molestie nunc non</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <div class="container">

            <div class="title-link-wrapper title-post after-none mb-4 appear-animate">
                <h2 class="title font-secondary ls-normal mb-0">From Our Blog</h2>
                <a href="blog-listing.html" class="font-weight-bold font-size-normal mb-0">
                    View All Articles
                    <i class="w-icon-long-arrow-right"></i>
                </a>
            </div>
            <div class="swiper-container swiper-theme post-wrapper pb-2 pb-lg-0 mb-5 appear-animate"
                data-swiper-options="{
          'slidesPerView': 1,
          'spaceBetween': 20,
          'breakpoints': {
          '576': {
          'slidesPerView': 2
          },
          '768': {
          'slidesPerView': 3
          },
          '992': {
          'slidesPerView': 4,
          'dots': false
          }
          }
          }">
                <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                    <div class="swiper-slide post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('public/frontend/assets/images/demos/demo12/blog/blog-1-650x440.jpg') }}"
                                    alt="Post" width="325" height="214"
                                    style="background-color: #b8bfc4;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">April 2, 2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Aliquam tincidunt maurisus</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">
                                Read More
                                <i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('public/frontend/assets/images/demos/demo12/blog/blog-2-650x440.jpg') }}"
                                    alt="Post" width="325" height="214"
                                    style="background-color: #596066;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">April 2, 2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Vivamus Vestibulum Ntulla Nec Ante</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('public/frontend/assets/images/demos/demo12/blog/blog-3-650x440.jpg') }}"
                                    alt="Post" width="325" height="214"
                                    style="background-color: #eff3f4;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">April 2, 2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Ligula sollicitudin Laoreet
                                    viverra</a>
                            </h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="swiper-slide post text-center overlay-zoom">
                        <figure class="post-media br-sm">
                            <a href="post-single.html">
                                <img src="{{ asset('public/frontend/assets/images/demos/demo12/blog/blog-4-650x440.jpg') }}"
                                    alt="Post" width="325" height="214"
                                    style="background-color: #68605e;" />
                            </a>
                        </figure>
                        <div class="post-details">
                            <div class="post-meta">
                                by <a href="#" class="post-author">John Doe</a>
                                - <a href="#" class="post-date mr-0">April 2, 2021</a>
                            </div>
                            <h4 class="post-title"><a href="post-single.html">Cras Ornare Tristique Elit</a></h4>
                            <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination mt-2"></div>
            </div>

            <div class="widget-wrapper row appear-animate">
                <div class="widget widget-products col-lg-3 mb-5 appear-animate">
                    <h4 class="title">New Arrivals</h4>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top"
                            data-swiper-options="{
                        'nav': true,
                        'slidesPerView': 1,
                        'spaceBetween': 0
                        }">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide widget-col">
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-1-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Sound Maker</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$132.62</ins><del class="old-price">$155.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-2-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Women's Comforter</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$95.01</ins><del class="old-price">$96.12</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-3-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Cup</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$48.25</ins><del class="old-price">$51.76</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                </div>
                                <!-- End of Widget Col -->
                                <div class="swiper-slide widget-col">
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/1-1-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Gold Watch</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$132.62</ins><del class="old-price">$155.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/1-2-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">White School Bag</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$95.01</ins><del class="old-price">$96.12</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/1-3-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Men's Suede Belt</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$48.25</ins><del class="old-price">$51.76</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                </div>
                                <!-- End of Widget Col -->
                            </div>
                            <button class="swiper-button-next font-weight-normal"></button>
                            <button class="swiper-button-prev font-weight-normal"></button>
                        </div>
                    </div>
                </div>
                <!-- Widget Products -->
                <div class="banner banner-1 widget-banner banner-fixed col-lg-6 br-sm mb-6">
                    <figure class="banner-media br-sm">
                        <img src="{{ asset('public/frontend/assets/images/demos/demo15/banner/banner-10.jpg') }}"
                            alt="Category Banner" width="880" height="665"
                            style="background-color: #DBDBDB;" />
                    </figure>
                    <div class="banner-content d-flex flex-column">
                        <h5 class="banner-date text-primary">2021</h5>
                        <h4 class="banner-subtitle font-weight-normal">Collection</h4>
                        <h3 class="banner-title text-uppercase font-weight-bold ls-25 mb-0">
                            Women's
                        </h3>
                        <p class="text-dark font-weight-normal">best seller clothing</p>
                        <span class="d-block divider mb-6"></span>
                        <a href="shop-banner-sidebar.html" class="btn btn-dark-light btn-rounded">
                            View Our Collection
                        </a>
                    </div>
                </div>
                <div class="widget widget-products col-lg-3 mb-5 appear-animate">
                    <h4 class="title">On Sale</h4>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top"
                            data-swiper-options="{
                        'nav': true,
                        'slidesPerView': 1,
                        'spaceBetween': 0
                        }">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide widget-col">
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-4-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Wireless Recorder</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$132.62</ins><del class="old-price">$155.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-5-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Gold Watch</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$95.01</ins><del class="old-price">$96.12</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-6-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Mobile Charger Box</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$48.25</ins><del class="old-price">$51.76</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                </div>
                                <!-- End of Widget Col -->
                                <div class="swiper-slide widget-col">
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-7-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Mass Capacity Battery</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$132.62</ins><del class="old-price">$155.00</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-8-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Measure Watch</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$95.01</ins><del class="old-price">$96.12</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                    <div class="product product-widget">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('public/frontend/assets/images/demos/demo15/products/2-9-1.jpg') }}"
                                                    alt="Product" width="300" height="337" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name">
                                                <a href="product-default.html">Men's Sport Bag</a>
                                            </h4>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <ins class="new-price">$48.25</ins><del class="old-price">$51.76</del>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Product Widget -->
                                </div>
                                <!-- End of Widget Col -->
                            </div>
                            <button class="swiper-button-next font-weight-normal"></button>
                            <button class="swiper-button-prev font-weight-normal"></button>
                        </div>
                    </div>
                </div>
                <!-- Widget Products -->
            </div>

        </div>
        <!-- End of Container -->
    </main>
@endsection
