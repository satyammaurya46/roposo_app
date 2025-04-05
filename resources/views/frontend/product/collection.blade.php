@extends('frontend.layouts.master')
@section('title', 'Product Collection')
@section('content')
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="demo1.html">Home</a></li>
                    <li><a href="shop-banner-sidebar.html">Shop</a></li>
                    <li>Horizontal</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content mb-10">
            <div class="container">
                <!-- Start of Shop Banner -->
                {{-- <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                style="background-image: url(assets/images/shop/banner1.jpg); background-color: #FFC74E;">
                <div class="banner-content">
                    <h4 class="banner-subtitle font-weight-bold">Accessories Collection</h4>
                    <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-normal">Smart Wrist
                        Watches</h3>
                    <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Discover
                        Now<i class="w-icon-long-arrow-right"></i></a>
                </div>
            </div> --}}
                <!-- End of Shop Banner -->

                {{-- <div class="shop-default-brands mb-5">
                <div class="brands-swiper swiper-container swiper-theme "
                    data-swiper-options="{
                        'slidesPerView': 2,
                        'breakpoints': {
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
                                'slidesPerView': 7
                            }
                        },
                        'autoplay': {
                            'delay': 4000,
                            'disableOnInteraction': false
                        }
                    }">
                    <div class="swiper-wrapper row gutter-no cols-xl-7 cols-lg-6 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/1.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/2.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/3.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/4.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/5.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/6.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure>
                                <img src="{{ asset('public/frontend/assets/images/brands/category/7.png')}}" alt="Brand" width="160" height="90" />
                            </figure>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div> --}}
                <!-- End of Shop Brands-->

                <!-- Start of Shop Category -->
                {{-- <div class="shop-default-category category-ellipse-section mb-6">
                <div class="swiper-container swiper-theme shadow-swiper"
                    data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '480': {
                            'slidesPerView': 3
                        },
                        '576': {
                            'slidesPerView': 4
                        },
                        '768': {
                            'slidesPerView': 6
                        },
                        '992': {
                            'slidesPerView': 7
                        },
                        '1200': {
                            'slidesPerView': 8,
                            'spaceBetween': 30
                        }
                    }
                }">
                    <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-4.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #5C92C0;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Sports</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-5.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #B8BDC1;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Babies</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-6.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #99C4CA;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Sneakers</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-7.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #4E5B63;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Cameras</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-8.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #D3E5EF;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Games</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-9.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #65737C;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Kitchen</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-20.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #E4E4E4;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Watches</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide category-wrap">
                            <div class="category category-ellipse">
                                <figure class="category-media">
                                    <a href="shop-banner-sidebar.html">
                                        <img src="{{ asset('public/frontend/assets/images/categories/category-21.jpg')}}" alt="Categroy"
                                            width="190" height="190" style="background-color: #D3D8DE;" />
                                    </a>
                                </figure>
                                <div class="category-content">
                                    <h4 class="category-name">
                                        <a href="shop-banner-sidebar.html">Clothes</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div> --}}
                <!-- End of Shop Category -->

                <div class="shop-content toolbox-horizontal">
                    <!-- Start of Toolbox -->
                    <nav class="toolbox sticky-toolbox sticky-content fix-top">
                        <aside class="sidebar sidebar-fixed shop-sidebar">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <div class="sidebar-content toolbox-left">
                                <!-- Start of Collapsible widget -->
                                <div class="toolbox-item select-menu">
                                    <a class="select-menu-toggle" href="#">All Categories</a>
                                    <ul class="filter-items">
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Babies</a></li>
                                        <li><a href="#">Beauty</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                                <div class="toolbox-item select-menu">
                                    <a class="select-menu-toggle" href="#">Price</a>
                                    <ul class="filter-items">
                                        <li><a href="#">$0.00 - $100.00</a></li>
                                        <li><a href="#">$100.00 - $200.00</a></li>
                                        <li><a href="#">$200.00 - $300.00</a></li>
                                        <li><a href="#">$300.00 - $500.00</a></li>
                                        <li><a href="#">$500.00+</a></li>
                                        <li>
                                            <form class="price-range">
                                                <input type="number" name="min_price" class="min_price text-center"
                                                    placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                    name="max_price" class="max_price text-center" placeholder="$max"><a
                                                    href="#" class="btn btn-primary btn-rounded">Go</a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <div class="toolbox-item select-menu">
                                    <a class="select-menu-toggle" href="#">Size</a>
                                    <ul class="filter-items item-check">
                                        <li><a href="#">Extra Large</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                                <div class="toolbox-item select-menu">
                                    <a class="select-menu-toggle" href="#">Brand</a>
                                    <ul class="filter-items item-check">
                                        <li><a href="#">Elegant Auto Group</a></li>
                                        <li><a href="#">Green Grass</a></li>
                                        <li><a href="#">Node Js</a></li>
                                        <li><a href="#">NS8</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Skysuite Tech</a></li>
                                        <li><a href="#">Sterling</a></li>
                                    </ul>
                                </div>
                                <div class="toolbox-item select-menu">
                                    <a class="select-menu-toggle" href="#">Color</a>
                                    <ul class="filter-items item-check">
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Orange</a></li>
                                        <li><a href="#">Yellow</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->
                            </div>
                        </aside>
                        <div class="toolbox-left">
                            <div class="toolbox-item toolbox-sort select-menu">
                                <a href="#"
                                    class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                btn-icon-left d-block d-lg-none"><i
                                        class="w-icon-category"></i><span>Filters</span></a>
                                <select name="orderby" class="form-control">
                                    <option value="default" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price-low">Sort by pric: low to high</option>
                                    <option value="price-high">Sort by price: high to low</option>
                                </select>
                            </div>
                        </div>
                      {{--   <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show select-box">
                                <select name="count" class="form-control">
                                    <option value="12">Show 12</option>
                                    <option value="24">Show 24</option>
                                    <option value="36">Show 36</option>
                                </select>
                            </div>
                            <div class="toolbox-item toolbox-layout">
                                <a href="shop-horizontal-filter.html" class="icon-mode-grid btn-layout active">
                                    <i class="w-icon-grid"></i>
                                </a>
                                <a href="shop-list.html" class="icon-mode-list btn-layout">
                                    <i class="w-icon-list"></i>
                                </a>
                            </div>
                        </div> --}}
                    </nav>
                    <!-- End of Toolbox -->

                    <!-- Start of Selected Items -->
                    <div class="selected-items mb-3">
                        <a href="#" class="filter-clean text-primary">Clean All {{count($products)}}</a>
                    </div>
                    <!-- End of Selected Items -->
                    @if(count($products)>0)
                    <!-- Start of Product Wrapper -->
                    <div class="product-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-2">
                        @foreach ($products as $product)
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="javascript:void(0);">
                                            @foreach ($product['imageUrls'] as $index => $image)
                                                @if ($index < 2)
                                                    <img src="{{ $image }}" alt="Product" width="300"
                                                        height="338" />
                                                @endif
                                            @endforeach
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
                                        <div class="product-cat">
                                            <a href="javascript:void(0);">{{ $product['productCategoryName'] }}</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="javascript:void(0);">{{ $product['productName'] }}</a>
                                        </h3>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings"
                                                    style="width: {{ getRatings($product['supplierRating'], $product['maxSupplierRating']) }}%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            {{-- <a href="product-default.html" class="rating-reviews">(3 reviews)</a> --}}
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                {{ INR }}220.00 - {{ INR }}230.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach                        
                    </div>
                    <!-- End of Product Wrapper -->
                    @else
                        {{-- <div class="alert alert-danger">No products found</div> --}}
                        <center>
                            <img src="{{asset('public/storage/images/no-data.png')}}" alt="no data found" width="144" height="45">
                        </center>
                    @endif

                    <!-- Start of Pagination -->
                    <div class="toolbox toolbox-pagination justify-content-between">
                        <p class="showing-info mb-2 mb-sm-0">
                            Showing<span>1-10 of 60</span>Products
                        </p>
                        <ul class="pagination">
                            <li class="prev">
                                @if ($currentPage > 1)
                                    <a href="{{ url('product-collection?page=' . ($currentPage - 1)) }}"
                                        aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <i class="w-icon-long-arrow-left"></i>Prev
                                    </a>
                                @endif
                            </li>
                            {{-- <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li> --}}
                            <li class="next">
                                @if ($nextPageExists)
                                    <a href="{{ url('product-collection?page=' . ($currentPage + 1)) }}"
                                        aria-label="Next">
                                        Next<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- End of Pagination -->
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
@endsection
