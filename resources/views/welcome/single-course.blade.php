@extends('layouts.app')

@section('content')



	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">{{ $course->course }} </h4>
					</div>
				</div>
			</div>
		</div>
    </section>
    


  	<section class="our-team pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-lg-12">
							<div class="courses_single_container">
								
								<div class="cs_row_two">
									<div class="cs_overview">
										<h4 class="title">Overview</h4>
										<h4 class="subtitle">Course Description</h4>
										<p class="mb30">{{ $course->description }} </p>

										<h4 class="subtitle">Requirements</h4>
										<ul class="list_requiremetn">
											<li><i class="fa fa-circle"></i><p>{{ $course->requirement }}</p></li>
										</ul>
									</div>
								</div>
								
						
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="instructor_pricing_widget">
						<a   href="{{ asset('home/application/'.$course->slug ) }}"   class="cart_btnss_white">Apply </a>
						<h5 class="subtitle text-left">Duration</h5>
						<ul class="price_quere_list text-left">
							<li><a href="#"><span class="flaticon-play-button-1"></span> {{ $course->duration }}</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
