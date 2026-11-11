@extends('layout.user')

@section('title', 'Katalog Buku - Sistem Perpustakaan Terpadu')

@section('content')
	<!-- START SECTION TOP -->
	<section class="section-top">
		<div class="container">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<h1>Katalog Buku</h1>
					<ul>
						<li><a href="{{ route('user.beranda') }}">Home</a></li>
						<li> / Katalog Buku</li>
					</ul>
				</div>
			</div><
		</div>
	</section>	
	<!-- END SECTION TOP -->
	
	<!-- START KATALOG BUKU  -->
	<section class=" section-padding">
		<div class="container">			
			<div class="row">
				<!-- Buku 1: Laskar Pelangi -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('assetsUser/img/course/1.png') }}" class="img-fluid" alt="Laskar Pelangi" />
							<span>Buku #1</span>
						</div>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<h4><a href="#">Laskar Pelangi</a></h4>
						<p><span class="ti-user"> </span> Andrea Hirata</p>
						<p><span class="ti-book"> </span> Koleksi Perpustakaan</p>
						<div class="price">Status - Tersedia</div>
					</div>
				</div><!-- END COL -->

				<!-- Buku 2: Bumi Manusia -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('assetsUser/img/course/2.png') }}" class="img-fluid" alt="Bumi Manusia" />
							<span>Buku #2</span>
						</div>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<h4><a href="#">Bumi Manusia</a></h4>
						<p><span class="ti-user"> </span> Pramoedya Ananta Toer</p>
						<p><span class="ti-book"> </span> Koleksi Perpustakaan</p>
						<div class="price">Status - Tersedia</div>
					</div>
				</div><!-- END COL -->

				<!-- Buku 3: Filosofi Teras -->
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('assetsUser/img/course/3.png') }}" class="img-fluid" alt="Filosofi Teras" />
							<span>Buku #3</span>
						</div>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<h4><a href="#">Filosofi Teras</a></h4>
						<p><span class="ti-user"> </span> Henry Manampiring</p>
						<p><span class="ti-book"> </span> Koleksi Perpustakaan</p>
						<div class="price text-danger">Status - Habis</div>
					</div>
				</div><!-- END COL -->
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->		
	</section>
	<!-- END KATALOG BUKU -->
@endsection
