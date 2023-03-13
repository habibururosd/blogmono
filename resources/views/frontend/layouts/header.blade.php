<header>
    <!-- START HEADER TOP SECTION -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-sm-6 col-lg-6">
                    <!-- Start header social -->
                    <div class="header-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-vk"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="hidden-xs"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li class="hidden-xs"><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                    <!-- End of /. header social -->
                    <!-- Start top left menu -->
                    <div class="top-left-menu">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Donation</a></li>
                        </ul>
                    </div>
                    <!-- End of /. top left menu -->
                </div>
                <!-- Start header top right menu -->
                <div class="hidden-xs col-md-6 col-sm-6 col-lg-6">
                    <div class="header-right-menu">
                        <ul>
                            <li>Currency: <a href="#">USD</a></li>
                            <li>Wishlist: <a href="#">12</a></li>
                            <li> <a href="{{route('register')}}"><i class="fa fa-lock"></i> Sign Up </a>or<a href="{{route('login')}}">Login</a></li>
                        </ul>
                    </div>
                </div> <!-- end of /. header top right menu -->
            </div> <!-- end of /. row -->
        </div> <!-- end of /. container -->
    </div>
    <!-- END OF /. HEADER TOP SECTION -->
    <!-- START MIDDLE SECTION -->
    <div class="header-mid hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" class="img-responsive" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    @isset($topad)
                    <a href="#"><img src="{{asset('storage/'.$topad->image)}}" class="img-responsive" alt=""></a>
                    @endisset
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. MIDDLE SECTION -->
    <!-- START NAVIGATION -->
    <nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">
        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->
        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="#brand"><img src="{{asset('frontend/images/logo.png')}}" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="" data-out="">
                    @foreach($categories as $category)
                        <li class="dropdown active">
                            <a href="#" class="">{{$category->name}}</a>
                        </li>
                    @endforeach
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Accessories</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Beanies</a></li>
                                                <li><a href="#">Caps & Hats</a></li>
                                                <li><a href="#">Glasses</a></li>
                                                <li><a href="#">Gloves</a></li>
                                                <li><a href="#">Jewellery</a></li>
                                                <li><a href="#">Scarves</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Sports</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Cricket</a></li>
                                                <li><a href="#">Football</a></li>
                                                <li><a href="#">Golf</a></li>
                                                <li><a href="#">Leggings</a></li>
                                                <li><a href="#">Cycling</a></li>
                                                <li><a href="#">Shorts</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Tops</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Cardigans</a></li>
                                                <li><a href="#">Coats</a></li>
                                                <li><a href="#">Hoodies & Sweatshirts</a></li>
                                                <li><a href="#">Jumpers</a></li>
                                                <li><a href="#">Polo Shirts</a></li>
                                                <li><a href="#">Shirts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Accessories</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="#">Olympic</a></li>
                                                <li><a href="#">Bomber jackets</a></li>
                                                <li><a href="#">Denim Jackets</a></li>
                                                <li><a href="#">Duffle Coats</a></li>
                                                <li><a href="#">Leather Jackets</a></li>
                                                <li><a href="#">Parkas</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu-fw hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row m_0">
                                    <div class="col-menu-video col-md-3">
                                        <a class="video-nav-item" href="#">
                                            <div class="img-wrapper">
                                                <img src="{{asset('frontend/images/gallery-235x160-1.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="ti-video-camera"></i>
                                                </div>
                                            </div>
                                            <h4>It is a long established fact that a reader will be. </h4>
                                        </a>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu-video col-md-3">
                                        <a class="video-nav-item" href="#">
                                            <div class="img-wrapper">
                                                <img src="{{asset('frontend/images/gallery-235x160-2.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="ti-video-camera"></i>
                                                </div>
                                            </div>
                                            <h4>It is a long established fact that a reader will be. </h4>
                                        </a>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu-video col-md-3">
                                        <a class="video-nav-item" href="#">
                                            <div class="img-wrapper">
                                                <img src="{{asset('frontend/images/gallery-235x160-3.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="ti-video-camera"></i>
                                                </div>
                                            </div>
                                            <h4>It is a long established fact that a reader will be. </h4>
                                        </a>
                                    </div>
                                    <div class="col-menu-video col-md-3">
                                        <a class="video-nav-item" href="#">
                                            <div class="img-wrapper">
                                                <img src="{{asset('frontend/images/gallery-235x160-4.jpg')}}" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="ti-video-camera"></i>
                                                </div>
                                            </div>
                                            <h4>It is a long established fact that a reader will be. </h4>
                                        </a>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu-video col-md-3">
                                        <a class="video-nav-item" href="#">
                                            <div class="img-wrapper">
                                                <img src="assets/images/gallery-235x160-5.jpg" alt="" class="img-responsive">
                                                <div class="link-icon">
                                                    <i class="ti-video-camera"></i>
                                                </div>
                                            </div>
                                            <h4>It is a long established fact that a reader will be. </h4>
                                        </a>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dropdowns</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Custom Menu</a></li>
                                    <li><a href="#">Custom Menu</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Sub Menu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                            <li><a href="#">Custom Menu</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Custom Menu</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                            <li><a href="#">Custom Menu</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="index.html">Home – Layout 1</a></li>
                                    <li><a href="index_2.html">Home – (Box) Layout 2 <span class="menu-badge">NEW</span></a></li>
                                    <li><a href="index_3.html">Home – Layout 3 <span class="menu-badge">NEW</span></a></li>
                                    <li><a href="index_4.html">Home – Layout 4</a></li>
                                    <li><a href="index_5.html">Home – Layout 5</a></li>
                                    <li><a href="index_6.html">Home – Layout 6</a></li>
                                    <li><a href="index_7.html">Home – Layout 7</a></li>
                                    <li><a href="index_8.html">Home – Layout 8</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Category layout</a>
                                <ul class="dropdown-menu">
                                    <li><a href="category_style_1.html">Category - layout 1</a></li>
                                    <li><a href="category_style_2.html">Category - layout 2</a></li>
                                    <li><a href="category_style_3.html">Category - layout 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Post template</a>
                                <ul class="dropdown-menu">
                                    <li><a href="details_1.html">Post - layout 1</a></li>
                                    <li><a href="details_2.html">Post - layout 2</a></li>
                                    <li><a href="details_3.html">Post - layout 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faq.html">F.A.Q</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="faq.html">F.A.Q</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
