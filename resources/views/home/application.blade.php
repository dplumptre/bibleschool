@extends('layouts.app')

@section('content')

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-4 col-xl-2 dn-smd pl0">
					
					<div class="user_board">
						<div class="user_profile">
							<div class="media">
							  	<div class="media-body">
							    	<h4 class="mt-0">Start</h4>
								</div>
							</div>
						</div>
						@include('partials/sidebar')
					</div>
				</div>
				<div class="col-sm-12 col-lg-8 col-xl-10">
					<div class="row">
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">  Application</h4>
							</nav>
						</div>
					
                        <div class="col-lg-12">
							<div class="my_course_content_container">
								<div class="my_setting_content mb30">
									<div class="my_setting_content_header">
										 <div class="my_sch_title">
										 <h4 class="m0">Course: {{ $course->course }}</h4>
											<h4 class="m0">Registration Fee: &#8358; {{$course->application_price}}</h4>
											
										</div>
										
                    <form method="POST" action="{{ route('ps.post.dp') }}">
                        @csrf

										<input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
										<input type="hidden" name="amount" value="{{$course->application_price}}"/>
										<input type="hidden" name="course_slug" value="{{$course->slug}}"/>
										<input type="hidden" name="currency" value="NGN"/>
										<input type="hidden" name="metadata" value="Application Fee"/>
										
									
								        <button type="submit" class="btn dbxshad btn-lg btn-thm2 mt-3">Apply now<span class="flaticon-right-arrow-1 ml15"></span></button>		
					</form>

									</div>
								

									    <div class="col-lg-12">

									    </div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
    

    {{-- <!-- about Us home6 -->
    <section class=" pt35 bgc-f9">
        <div class="container">
            <div class="row mt60">


                <div class="col-lg-12">
                    
                </div>



            </div>
        </div>
    </section> --}}

@endsection
