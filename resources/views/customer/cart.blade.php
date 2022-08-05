<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">


    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('components/css/bootstrap.min.') }}css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{ asset('components/css/slick.') }}css" />
    <link type="text/css" rel="stylesheet" href="{{ asset('components/css/slick-theme.') }}css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{ asset('components/css/nouislider.min.') }}css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('components/css/font-awesome.min.css') }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('components/css/style.') }}css" />


   <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +62-878-774-652-93</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> Nugraha@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> JL.babakan Sukatma</a></li>
                </ul>
                <ul class="header-links pull-right">
                <li class="header-item">
                     @if (Route::has('login'))
                     @auth
                       <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> 
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
             <a class="btn btn-outline-secondary" href="{{ route('login') }}"
                 onclick="event.preventDefault();
                 document.getElementById('login-form').submit();">
             </a>
             <form id="login-form" action="{{ route('login') }}" method="POST" class="d-none">
                 @csrf
             </form>
                </li>
             @if (Route::has('register'))
             <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
             @endif
             <li class="header-item">
                 <a class="btn btn-outline-secondary" href="{{ route('register') }}"
                 onclick="event.preventDefault();
                 document.getElementById('register-form').submit();">
             </a>
             
             <form id="register-form" action="{{ route('register') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
           
        @endif
             @endauth
                   
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="#" class="logo">
                                <img src="{{ asset('componentsz.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form>
                                <select class="input-select">
                                    <option value="0">All Categories</option>
                                    <option value="1">Category 01</option>
                                    <option value="1">Category 02</option>
                                </select>
                                <input class="input" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="#">
                                    <i class="fa fa-heart-o"></i>
                                    <span>Your Wishlist</span>
                                    <div class="qty">2</div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                    <div class="qty">3</div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{ asset('components/img/a.jpg') }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a>
                                                </h3>
                                                <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>

                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{ asset('components/img/a.jpg') }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="#">product name goes here</a>
                                                </h3>
                                                <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>
                                    </div>
                                    <div class="cart-summary">
                                        <small>3 Item(s) selected</small>
                                        <h5>SUBTOTAL: $2940.00</h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="#">View Cart</a>
                                        <a href="customer/checkout">Checkout <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="/customer/user">Home</a></li>
                    <li><a href="#">Hot Deals</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Product</a></li>

                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>



















	<!-- title -->
	<title>Cart</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="bahan/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="bahan/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="bahan/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="bahan/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="bahan/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="bahan/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="bahan/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="bahan/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="bahan/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->

	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="bahan/img/products/product-img-1.jpg" alt=""></td>
									<td class="product-name">Strawberry</td>
									<td class="product-price">$85</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="bahan/img/products/product-img-2.jpg" alt=""></td>
									<td class="product-name">Berry</td>
									<td class="product-price">$70</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="bahan/img/products/product-img-3.jpg" alt=""></td>
									<td class="product-name">Lemon</td>
									<td class="product-price">$35</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$545</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.html" class="boxed-btn">Update Cart</a>
							<a href="checkout.html" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

	<!-- logo carousel -->
	
	<!-- end logo carousel -->

	<!-- footer -->
	
	<!-- end footer -->
	
	
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="bahan/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="bahan/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="bahan/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="bahan/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="bahan/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="bahan/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="bahan/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="bahan/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="bahan/js/sticker.js"></script>
	<!-- main js -->
	<script src="bahan/js/main.js"></script>

</body>
</html>