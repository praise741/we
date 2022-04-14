<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('storage/main/css/bootstrap-reboot.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/jquery.mCustomScrollbar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/plyr.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/photoswipe.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/default-skin.css') }}">
	<link rel="stylesheet" href="{{ asset('storage/main/css/main.css') }}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="/" class="header__logo">
								<img src="{{ asset('storage/main/img/logo.svg') }}" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
										<li><a href="/">Home</a></li>

									</ul>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">genre</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										@foreach ($genre as $gen )
                                        <li><a href="/genre/{{ $gen->name }}">{{ $gen->name }}</a></li>
                                        @endforeach


                                    </li>
									</ul>
								</li>
								<!-- end dropdown -->

								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<!-- dropdown -->

								<!-- end dropdown -->

								<a href="/admin" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign in</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="/search" method="POST" class="header__search">
            @csrf
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" name="search" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->
    @yield('content')
    <footer class="footer">
		<div class="container">
			<div class="row">
				<!-- footer list -->
				<div class="col-12 col-md-3">
					<h6 class="footer__title">Download Our App</h6>
					<ul class="footer__app">
						<li><a href="#"><img src="{{ asset('storage/main/img/Download_on_the_App_Store_Badge.svg') }}" alt=""></a></li>
						<li><a href="#"><img src="{{ asset('storage/main/img/google-play-badge.png') }}" alt=""></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Resources</h6>
					<ul class="footer__list">
						<li><a href="about.html">About Us</a></li>
						<li><a href="pricing.html">Pricing Plan</a></li>
						<li><a href="faq.html">Help</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Legal</h6>
					<ul class="footer__list">
						<li><a href="privacy.html">Terms of Use</a></li>
						<li><a href="privacy.html">Privacy Policy</a></li>
						<li><a href="privacy.html">Security</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contact</h6>
					<ul class="footer__list">
						<li><a href="tel:+18002345678"> +2348060588718 </a></li>
						<li><a href="mailto:support@moviego.com">kanyinsayopraise@gmail.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">
						<small>© 2020 Dotmart codes. Create by <a href="../../../user/dmitryvolkov/portfolio.html" target="_blank">Dmitry Volkov</a></small>

						<ul>
							<li><a href="privacy.html">Terms of Use</a></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
    <script src="{{ asset('storage/main/js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/jquery.mousewheel.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/jquery.mCustomScrollbar.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/wNumb.js') }}"></script>
	<script src="{{ asset('storage/main/js/nouislider.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/plyr.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/jquery.morelines.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/photoswipe.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/photoswipe-ui-default.min.js') }}"></script>
	<script src="{{ asset('storage/main/js/main.js') }}"></script>
