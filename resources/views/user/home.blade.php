@extends('layout.user')

@section('content')
		<!-- START HOME -->
		<section class="home_bg hb_height" style="background-image: url({{ asset('assetsUser/img/bg/home-bg.jpg') }}); background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text ht_top">
						<h1><span>Smart Study</span> Where Knowledge Meets the Web</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipiscing elit tempor ut labore</p>
					</div>
					<div class="home_sb">
						<form action="#" class="banner_subs">
							<input type="text" class="form-control home_si" placeholder="Search your course here" required="required">
							<button type="button" class="subscribe__btn">Search <i class="fa fa-paper-plane-o"></i></button>
						</form>
					</div>					
				  </div><!--- END COL -->
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text-img">
						<img src="{{ asset('assetsUser/img/home-img2.png') }}" class="img-fluid" alt="" />
						<div class="home_ps">
							<span class="ti-user"></span>
							<h2>4500+</h2>
							<p>Active student</p>
						</div>
					</div>					
				  </div><!--- END COL -->						  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME -->			

		<!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-folder sc_one"></span>
							<h2 class="counter-num">134</h2>
							<p>Our Online Course</p>
						</div>							
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-medall-alt sc_two"></span>
							<h2 class="counter-num">299</h2>
							<p>Academic Programs</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-id-badge sc_three"></span>
							<h2 class="counter-num">684</h2>
							<p>Certified Students</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-user sc_four"></span>
							<h2 class="counter-num">941</h2>
							<p>Enrolled Students</p>
						</div>
					</div><!-- END COL -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END COUNTER -->
@endsection
