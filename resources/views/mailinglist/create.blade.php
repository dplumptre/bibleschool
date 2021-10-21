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
								<h4 class="title float-left">Add Mailing List</h4>
							</nav>
						</div>
					
						<div class="col-xl-12">
							<div class="application_statics">
                                

								@if (session('message'))
								<div class="alert alert-success" role="alert">
									{{ session('message') }}
								</div>
								 @endif
					
					
											@if (count($errors) > 0)
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
					
					
		
										<form method="POST" action="{{ route('mailinglist.store') }}">
											@csrf
										<div class="my_setting_content mb30">

		
		
		
											<div class="row my_setting_content_details pb0">
		
		
												<div class="col-xl-12">
													<div class="row">
		
														<div class="col-xl-12">
															<div class="my_profile_setting_input form-group">
																<label for="formGroupExampleInputX">Email</label>
																<input type="email" value="" name="email" class="form-control" placeholder="adam@example.com">
																 @if($errors->has('email'))
																<small class="text-danger">{{ $errors->first('email') }}</small>
																@endif
															</div>
														</div>

														<div class="col-lg-12">
														</div>
															<button type="submit" class="btn btn-log btn-block btn-thm2" >Save <span class="flaticon-right-arrow-1 ml15"></span></button>
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
