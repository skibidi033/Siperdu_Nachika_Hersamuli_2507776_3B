<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Sistem Perpustakaan Terpadu">
		<meta name="keywords" content="perpustakaan, buku, katalog, peminjaman, siperdu">		
		<!-- SITE TITLE -->
		<title>@yield('title', 'Sistem Perpustakaan Terpadu')</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{ asset('assetsUser/bootstrap/css/bootstrap.min.css') }}">		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link rel="stylesheet" href="{{ asset('assetsUser/fonts/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assetsUser/fonts/themify-icons.css') }}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{ asset('assetsUser/owlcarousel/css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('assetsUser/owlcarousel/css/owl.theme.css') }}">	
		<!--jquery-simple-mobilemenu Css-->
		<link rel="stylesheet" href="{{ asset('assetsUser/css/jquery-simple-mobilemenu.css') }}">			
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{ asset('assetsUser/css/magnific-popup.css') }}">		
		<!-- animate CSS -->
		<link rel="stylesheet" href="{{ asset('assetsUser/css/animate.css') }}">	
		<!-- Style CSS -->					
		<link rel="stylesheet" href="{{ asset('assetsUser/css/style.css') }}">					
		@stack('styles')
	</head>
	
	<body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader"></span>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="{{ route('user.beranda') }}"><img src="{{ asset('assetsUser/img/logo.png') }}" alt="Logo"></a>          				
						</div>
					</div><!--- END Col -->
					
					<div class="col-60 d-flex text-center align-self-center justify-content-center">
						<nav id="main-menu">
							<ul>							  
								<li><a href="{{ route('user.beranda') }}">Home</a></li>
								<li><a href="{{ route('user.katalog-buku') }}">Katalog Buku</a></li>
							</ul>
						</nav>
					</div><!--- END Col -->
					
					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<a href="#" class="header-btn">Sign In</a>
						<a href="#" class="btn_one">Sign Up</a>
					</div><!--- END Col -->
					
					<ul class="mobile_menu">						
						<li><a href="{{ route('user.beranda') }}">Home</a></li>
						<li><a href="{{ route('user.katalog-buku') }}">Katalog Buku</a></li>
					</ul>			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->	
        
		<!-- START MAIN CONTENT -->
		@yield('content')
		<!-- END MAIN CONTENT -->
		
		<!-- START FOOTER -->
		<div class="footer section-padding">
			<div class="container">				
				<div class="row">						
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<a href="{{ route('user.beranda') }}"><img src="{{ asset('assetsUser/img/logo.png') }}" alt="Logo"></a>         
							<p>Sistem Perpustakaan Terpadu untuk memudahkan pencarian dan peminjaman koleksi buku.</p>
							<div class="social_profile">
								<ul>
									<li><a class="f_facebook" href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a class="f_twitter" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a class="f_instagram" href="#"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a class="f_linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>			
					</div><!--- END COL -->						
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Navigasi</h4>
							<ul>
								<li><a href="{{ route('user.beranda') }}">Home</a></li>
								<li><a href="{{ route('user.katalog-buku') }}">Katalog Buku</a></li>
								<li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
							</ul>
						</div>
					</div><!--- END COL -->	
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Kategori Buku</h4>
							<ul>
								<li><a href="#">Fiksi & Novel</a></li>
								<li><a href="#">Sains & Teknologi</a></li>
								<li><a href="#">Sejarah</a></li>
								<li><a href="#">Pengembangan Diri</a></li>
							</ul>
						</div>
					</div><!--- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Info Kontak</h4>
							<div class="sf_contact">
								<span class="ti-map"></span>
								<p>Jl. Perpustakaan No. 1, Indonesia</p>
							</div>
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p>+62 812 3456 7890</p>
							</div>
							<div class="sf_contact">
								<span class="ti-email"></span>
								<p>info@perpustakaan.id</p>
							</div>
						</div>
					</div><!--- END COL -->						
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Download App</h4>
							<p>Unduh aplikasi perpustakaan di Play Store dan App Store.</p>
							<a href="#"><img src="{{ asset('assetsUser/img/google-play.jpg') }}" class="foot_img" alt=""></a>  
							<a href="#"><img src="{{ asset('assetsUser/img/app-store.jpg') }}" class="foot_img" alt=""></a>  
						</div>
					</div><!--- END COL -->	
				</div><!--- END ROW -->					
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->	

		<!-- START FOOTER COPYRIGHT -->	
		<div class="foot_copy">
			<div class="footer_copyright">
				<p>&copy; 2026 Sistem Perpustakaan Terpadu. All Rights Reserved.</p>
			</div>	
		</div>
		<!-- END FOOTER COPYRIGHT -->	
	
		<!-- Latest jQuery -->
		<script src="{{ asset('assetsUser/js/jquery-1.12.4.min.js') }}"></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="{{ asset('assetsUser/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- modernizer JS -->		
		<script src="{{ asset('assetsUser/js/modernizr-2.8.3.min.js') }}"></script>	
		<!-- jquery-simple-mobilemenu.min -->
		<script src="{{ asset('assetsUser/js/jquery-simple-mobilemenu.js') }}"></script>		
		<!-- owl-carousel min js  -->
		<script src="{{ asset('assetsUser/owlcarousel/js/owl.carousel.min.js') }}"></script>					
		<!-- magnific-popup js -->               
		<script src="{{ asset('assetsUser/js/jquery.magnific-popup.min.js') }}"></script>						
		<!-- countTo js -->
		<script src="{{ asset('assetsUser/js/jquery.inview.min.js') }}"></script>								
		<!-- scrolltopcontrol js -->
		<script src="{{ asset('assetsUser/js/scrolltopcontrol.js') }}"></script>			
		<!-- WOW - Reveal Animations When You Scroll -->
		<script src="{{ asset('assetsUser/js/wow.min.js') }}"></script>				
		<!-- scripts js -->
		<script src="{{ asset('assetsUser/js/scripts.js') }}"></script>
		@stack('scripts')
	</body>
</html>
