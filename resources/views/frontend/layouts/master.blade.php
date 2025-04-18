<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Roposo Clout - @yield('title')</title>
    <meta name="keywords" content="Roposo Clout" />
    <meta name="description" content="Roposo Clout">
    <meta name="author" content="D-THEMES">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('public/frontend/assets/images/roposo-favicon.png') }}">
    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800', 'Jost:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{ asset('public/frontend/assets/js/webfont.js') }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="preload"
        href="{{ asset('public/frontend/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="{{ asset('public/frontend/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="{{ asset('public/frontend/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font"
        type="font/woff2" crossorigin="anonymous">
        
<link rel="preload" href="{{ asset('public/frontend/assets/fonts/wolmart87d5.woff?png09e') }}" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="{{ asset('public/frontend/assets/fonts/Roposo Clout87d5.ttf?png09e') }}" as="font"
        type="font/ttf" crossorigin="anonymous">
    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/assets/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/assets/vendor/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/frontend/assets/vendor/magnific-popup/magnific-popup.min.css') }}">
        <!-- Default CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/assets/css/style.min.css') }}">
    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/assets/css/demo12.min.css') }}">

</head>

<body class="about-us">
    <div class="page-wrapper">
        <h1 class="d-none">Roposo Clout - Welcome</h1>
        <!-- Start of Header -->
        <header class="header">
            @include('frontend.layouts.topbar') {{-- Include Topbar --}}
            <!-- End of Header Top -->
            @include('frontend.layouts.header') {{-- Include Header --}}
            <!-- End of Header Middle -->
            @include('frontend.layouts.navbar') {{-- Include Navbar --}}
            <!-- End of Header Bottom -->
        </header>
        <!-- End of Header -->
        <!-- Start of Main -->
        @yield('content') {{-- Content --}}
        <!-- End of Main -->
        <!-- Start of Footer -->
        <footer class="footer appear-animate bg-primary"
            data-animation-options="{
            'name': 'fadeIn'
            }">
            <div class="container">
                @include('frontend.layouts.footer-top') {{-- Include footer --}}
                @include('frontend.layouts.footer-middle') {{-- Include footer --}}
                @include('frontend.layouts.footer') {{-- Include footer --}}
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper -->
    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo12.html" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="demo12-shop.html" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.html" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.html" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="{{ asset('public/frontend/assets/images/cart/product-1.jpg') }}"
                                    alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.html">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="product-default.html">
                                <img src="{{ asset('public/frontend/assets/images/cart/product-2.jpg') }}"
                                    alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>
                <div class="cart-action">
                    <a href="cart.html" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.html" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search bg-white" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->
    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button">
        <i class="w-icon-angle-up"></i>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10"
                cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg>
    </a>
    <!-- End of Scroll Top -->
    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->
        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->
        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo12.html">Home</a></li>
                        <li>
                            <a href="demo12-shop.html">Shop</a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                        <li><a href="#">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.html">Horizontal Filter<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.html">Off Canvas Sidebar<span
                                                    class="tip tip-new">New</span></a></li>
                                        <li><a href="shop-infinite-scroll.html">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.html">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                        <li><a href="shop-list.html">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.html">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>
                                    <ul>
                                        <li><a href="product-variable.html">Variable Product</a></li>
                                        <li><a href="product-featured.html">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.html">Data In Accordion</a></li>
                                        <li><a href="product-section.html">Data In Sections</a></li>
                                        <li><a href="product-swatch.html">Image Swatch</a></li>
                                        <li><a href="product-extended.html">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.html">Without Sidebar</a></li>
                                        <li><a href="product-video.html">360<sup>o</sup> &amp; Video<span
                                                    class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.html">Default<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.html">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.html">Grid Images</a></li>
                                        <li><a href="product-masonry.html">Masonry</a></li>
                                        <li><a href="product-gallery.html">Gallery</a></li>
                                        <li><a href="product-sticky-info.html">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.html">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.html">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.html">Vendor</a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.html">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.html">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.html">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.html">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.html">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.html">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.html">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.html">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Classic</a></li>
                                <li><a href="blog-listing.html">Listing</a></li>
                                <li>
                                    <a href="https://www.portotheme.com/html/Roposo Clout/blog-grid.html">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html">Pages</a>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="become-a-vendor.html">Become A Vendor</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="faq.html">FAQs</a></li>
                                <li><a href="error-404.html">Error 404</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Elements</a>
                            <ul>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-titles.html">Titles</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials</a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-vendors.html">Vendors</a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="#">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="#">New Arrivals</a>
                                        </li>
                                        <li><a href="#">Best Sellers</a>
                                        </li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Accessories</a>
                                        </li>
                                        <li><a href="#">Jewlery &
                                                Watches</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="#">New Arrivals</a>
                                        </li>
                                        <li><a href="#">Best Sellers</a>
                                        </li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Accessories</a>
                                        </li>
                                        <li><a href="#">Jewlery &
                                                Watches</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom</a>
                                    <ul>
                                        <li><a href="#">Beds, Frames &
                                                Bases</a>
                                        </li>
                                        <li><a href="#">Dressers</a></li>
                                        <li><a href="#">Nightstands</a>
                                        </li>
                                        <li><a href="#">Kid's Beds &
                                                Headboards</a>
                                        </li>
                                        <li><a href="#">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room</a>
                                    <ul>
                                        <li><a href="#">Coffee Tables</a>
                                        </li>
                                        <li><a href="#">Chairs</a></li>
                                        <li><a href="#">Tables</a></li>
                                        <li><a href="#">Futons & Sofa
                                                Beds</a>
                                        </li>
                                        <li><a href="#">Cabinets &
                                                Chests</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                    <ul>
                                        <li><a href="#">Office Chairs</a>
                                        </li>
                                        <li><a href="#">Desks</a></li>
                                        <li><a href="#">Bookcases</a></li>
                                        <li><a href="#">File Cabinets</a>
                                        </li>
                                        <li><a href="#">Breakroom
                                                Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen & Dining</a>
                                    <ul>
                                        <li><a href="#">Dining Sets</a>
                                        </li>
                                        <li><a href="#">Kitchen Storage
                                                Cabinets</a>
                                        </li>
                                        <li><a href="#">Bashers Racks</a>
                                        </li>
                                        <li><a href="#">Dining Chairs</a>
                                        </li>
                                        <li><a href="#">Dining Room
                                                Tables</a>
                                        </li>
                                        <li><a href="#">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-electronics"></i>Electronics
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers</a>
                                    <ul>
                                        <li><a href="#">Desktop
                                                Computers</a>
                                        </li>
                                        <li><a href="#">Monitors</a></li>
                                        <li><a href="#">Laptops</a></li>
                                        <li><a href="#">Hard Drives &amp;
                                                Storage</a>
                                        </li>
                                        <li><a href="#">Computer
                                                Accessories</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video</a>
                                    <ul>
                                        <li><a href="#">TVs</a></li>
                                        <li><a href="#">Home Audio
                                                Speakers</a>
                                        </li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">Media Streaming
                                                Devices</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="#">Digital SLR
                                                Cameras</a>
                                        </li>
                                        <li><a href="#">Sports & Action
                                                Cameras</a>
                                        </li>
                                        <li><a href="#">Camera Lenses</a>
                                        </li>
                                        <li><a href="#">Photo Printer</a>
                                        </li>
                                        <li><a href="#">Digital Memory
                                                Cards</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones</a>
                                    <ul>
                                        <li><a href="#">Carrier Phones</a>
                                        </li>
                                        <li><a href="#">Unlocked Phones</a>
                                        </li>
                                        <li><a href="#">Phone & Cellphone
                                                Cases</a>
                                        </li>
                                        <li><a href="#">Cellphone
                                                Chargers</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-furniture"></i>Furniture
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul>
                                        <li><a href="#">Sofas & Couches</a>
                                        </li>
                                        <li><a href="#">Armchairs</a></li>
                                        <li><a href="#">Bed Frames</a></li>
                                        <li><a href="#">Beside Tables</a>
                                        </li>
                                        <li><a href="#">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Lighting</a>
                                    <ul>
                                        <li><a href="#">Light Bulbs</a>
                                        </li>
                                        <li><a href="#">Lamps</a></li>
                                        <li><a href="#">Celling Lights</a>
                                        </li>
                                        <li><a href="#">Wall Lights</a>
                                        </li>
                                        <li><a href="#">Bathroom
                                                Lighting</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home Accessories</a>
                                    <ul>
                                        <li><a href="#">Decorative
                                                Accessories</a>
                                        </li>
                                        <li><a href="#">Candals &
                                                Holders</a>
                                        </li>
                                        <li><a href="#">Home Fragrance</a>
                                        </li>
                                        <li><a href="#">Mirrors</a></li>
                                        <li><a href="#">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Garden & Outdoors</a>
                                    <ul>
                                        <li><a href="#">Garden
                                                Furniture</a>
                                        </li>
                                        <li><a href="#">Lawn Mowers</a>
                                        </li>
                                        <li><a href="#">Pressure
                                                Washers</a>
                                        </li>
                                        <li><a href="#">All Garden
                                                Tools</a>
                                        </li>
                                        <li><a href="#">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="demo12-shop.html" class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->
    <!-- Start of Newsletter popup -->
    @include('frontend.modal.newsletter-popup') {{-- Include newsletter modal popup --}}
    <!-- End of Newsletter popup -->
    <!-- Start of Quick View -->
    @include('frontend.modal.product-view-popup') {{-- Include newsletter modal popup --}}
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('public/frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/sticky/sticky.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/skrollr/skrollr.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/zoom/jquery.zoom.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('public/frontend/assets/vendor/jquery.count-to/jquery.count-to.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('public/frontend/assets/js/main.min.js') }}"></script>

</body>

</html>
