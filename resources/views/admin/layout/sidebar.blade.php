<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('categories.index')}}">Blogs Categories</a></li>
                        <li><a href="#">Blogs SubCategories</a></li>
                    </ul>
                </li>
                <!-- end li -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-store-2-line"></i>
                        <span>Blog Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.blog')}}">Create Tag</a></li>
                        <li><a href="{{route('list.blog')}}">Tag List</a></li>
                        <li><a href="{{route('blogCreate.create')}}">Blog Create</a></li>
                        <li><a href="{{route('blogsCreate.list')}}">Blog List</a></li>
                        {{-- <li><a href="ecommerce-cart.html">Cart</a></li> --}}
                        {{-- <li><a href="ecommerce-checkout.html">Checkout</a></li> --}}
                        {{-- <li><a href="ecommerce-shops.html">Shops</a></li> --}}
                        {{-- <li><a href="ecommerce-add-product.html">Add Product</a></li> --}}
                    </ul>
                </li>

            </ul>
            <!-- end ul -->
        </div>
        <!-- Sidebar -->
    </div>
</div>








