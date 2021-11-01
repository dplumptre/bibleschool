<?php
use App\Models\Profile;
  $data = Profile::find(auth()->user()->id); 
  ?>

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
								<h4 class="title float-left">Profile</h4>
							</nav>
						</div>
					
                        <div class="col-lg-12">
							<div class="my_course_content_container">

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
			
			

								<form method="POST" action="{{ route('home.update.profile', $data->id) }}">
									@csrf
									@method('PUT')
								<div class="my_setting_content mb30">
									<div class="my_setting_content_header">
										<div class="my_sch_title">
											<h4 class="m0">Bio Data</h4>
										</div>
									</div>



									<div class="row my_setting_content_details pb0">


										<div class="col-xl-12">
											<div class="row">

                                                <div class="col-xl-12">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Contact Address</label>
												    	<input type="text" value="{{$data->address ?? old('address') }}" name="address" class="form-control" placeholder="1123 avenue street">
												     	@if($errors->has('address'))
														<small class="text-danger">{{ $errors->first('address') }}</small>
														@endif
													</div>
                                                </div>
                                                <div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Telephone</label>
												    	<input type="text" value="{{$data->phone ?? old('phone')}}" name="phone" class="form-control" placeholder="08012345678">
												     	@if($errors->has('phone'))
														<small class="text-danger">{{ $errors->first('phone') }}</small>
														@endif
													</div>
												</div>
                                                <div class="col-lg-6">
                                                    <div class="my_profile_select_box form-group">
                                                        <label for="exampleFormControlInput5">Gender</label><br>
													  <select name="gender" class="selectpicker">
															<option value="{{$data->gender ?? old('gender') }}">{{$data->gender}}</option>
                                                            <option value="">Select Gender</option>
                                                            <option value="male"  @if (old('gender') == 'male') selected="selected" @endif>Male</option>
                                                            <option value="female" @if (old('gender') == 'female') selected="selected" @endif>Female</option>
                                                        </select>
														@if($errors->has('gender'))
														<small class="text-danger">{{ $errors->first('gender') }}</small>
														@endif
                                                    </div>
                                                </div>
												<div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Nature of Business</label>
												    	<input type="text" name="nature_of_business" value="{{ $data->nature_of_business ?? old('nature_of_business') }}" class="form-control" placeholder="">
												     	@if($errors->has('nature_of_business'))
														<small class="text-danger">{{ $errors->first('nature_of_business') }}</small>
														@endif														
													</div>
                                                </div>
                                                <div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Designation</label>
												    	<input type="text"  name="designation" value="{{ $data->designation ?? old('designation')  }}"  class="form-control" placeholder="">
												     	@if($errors->has('designation'))
														<small class="text-danger">{{ $errors->first('designation') }}</small>
														@endif													
													</div>
												</div>
                                                <div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Date of Birth</label>
												    	<input type="text" class="form-control" id="dob" name="dob" value="{{ $data->dob ?? old('dob') }}"  placeholder="">
												     	@if($errors->has('dob'))
														<small class="text-danger">{{ $errors->first('dob') }}</small>
														@endif											
													</div>
                                                </div>
                                                <div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Place of Birth</label>
												    	<input type="text" class="form-control"  name="birth_place" value="{{ $data->birth_place ?? old('birth_place') }}"  placeholder="">
												     	@if($errors->has('birth_place'))
														<small class="text-danger">{{ $errors->first('birth_place') }}</small>
														@endif														
													</div>
												</div>
 

                                                <div class="col-xl-6">
													<div class="my_profile_setting_input form-group">
												    	<label for="formGroupExampleInputX">Nationality</label>
												    	<input type="text"  name="nationality" value="{{ $data->nationality ?? old('nationality') }}"  class="form-control" placeholder="">
												     	@if($errors->has('nationality'))
														<small class="text-danger">{{ $errors->first('nationality') }}</small>
														@endif														
													</div>
												</div>
                                                <div class="col-xl-6">



                                                    <div class="my_profile_select_box form-group">
                                                        <label for="exampleFormControlInput5">Marital Status</label><br>													
                                                        <select name="marital_status" class="selectpicker">
															<option value="{{$data->marital_status   ?? old('marital_status') }}">{{$data->marital_status }}</option>
                                                            <option value="">Select</option>
                                                            <option value="single" @if (old('marital_status') == 'single') selected="selected" @endif>Single</option>
                                                            <option value="married" @if (old('marital_status') == 'married') selected="selected" @endif>Married</option>
                                                            <option value="divorced" @if (old('marital_status') == 'divorced') selected="selected" @endif>Divorced</option>
                                                        </select>
												     	@if($errors->has('marital_status'))
														<small class="text-danger">{{ $errors->first('marital_status') }}</small>
														@endif	
                                                    </div>


												</div>



											</div>
										</div>
									</div>
									<div class="my_setting_content_header style2">
										<div class="my_sch_title">
											<h4 class="m0">Ministry Info</h4>
										</div>
									</div>
									<div class="row my_setting_content_details">
                                        <div class="col-lg-12">
											<div class="my_resume_textarea">
												<div class="form-group">
												    <label for="exampleFormControlTextarea1">Name and address of Church</label>
												    <textarea class="form-control" id="exampleFormControlTextarea1" name="name_and_address_of_church"rows="3">{{$data->name_and_address_of_church ?? old('name_and_address_of_church') }}</textarea>
													    @if($errors->has('name_and_address_of_church'))
														<small class="text-danger">{{ $errors->first('name_and_address_of_church') }}</small>
														@endif												
												</div>
											</div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">Name of Pastor/Rev/Bishop</label>
                                                <input type="text" name="pastor_name" value="{{ $data->pastor_name ?? old('pastor_name') }}"  class="form-control" placeholder="">
 												@if($errors->has('pastor_name'))
												<small class="text-danger">{{ $errors->first('pastor_name') }}</small>
												@endif	                                           
											</div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">Present Role/Office</label>
                                                <input type="text" name="church_role" value="{{ $data->church_role ?? old('church_role')}}"  class="form-control" placeholder="">
												@if($errors->has('church_role'))
												<small class="text-danger">{{ $errors->first('church_role') }}</small>
												@endif		
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">How Long have you been in the Church</label>
                                                <input type="text" name="time_in_church" value="{{ $data->time_in_church ?? old('time_in_church')  }}"  class="form-control" placeholder="">
												@if($errors->has('time_in_church'))
												<small class="text-danger">{{ $errors->first('time_in_church') }}</small>
												@endif	                                           
										    </div>
                                        </div>
                                        <div class="col-lg-12">
											<div class="my_resume_textarea">
												<div class="form-group">
												    <label for="exampleFormControlTextarea1">Other churches previously attended specify Role/Department</label>
												    <textarea class="form-control" name="other_churches_and_roles" id="exampleFormControlTextarea1" rows="3">{{ $data->other_churches_and_roles ?? old('other_churches_and_roles')  }}</textarea>
												</div>
												@if($errors->has('other_churches_and_roles'))
												<small class="text-danger">{{ $errors->first('other_churches_and_roles') }}</small>
												@endif											
											</div>
                                        </div>
                                        
										<div class="col-lg-6">
											<div class="my_profile_select_box form-group">
										    	<label for="exampleFormControlInput5">Are you Born Again?</label><br>
										    	<select name="born_again" class="selectpicker">
                                                    <option value="yes"  > Yes</option>
                                                    <option value="no" > No</option>
												</select>
												@if($errors->has('born_again'))
												<small class="text-danger">{{ $errors->first('born_again') }}</small>
												@endif													
											</div>
										</div>
                                        <div class="col-xl-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">How Long?</label>
                                                <input type="text" name="born_again_time" value="{{ $data->born_again_time ?? old('born_again_time')  }}" class="form-control" placeholder="">
												@if($errors->has('born_again_time'))
												<small class="text-danger">{{ $errors->first('born_again_time') }}</small>
												@endif                                      
										    </div>
                                        </div>
                                        <div class="col-lg-12">
											<div class="my_resume_textarea">
												<div class="form-group">
												    <label for="exampleFormControlTextarea1">Involvement in other parachurch Ministries</label>
												    <textarea class="form-control" id="exampleFormControlTextarea1" name="church_involvement" rows="3">{{ $data->church_involvement  ?? old('church_involvement') }}</textarea>
													@if($errors->has('church_involvement'))
													<small class="text-danger">{{ $errors->first('church_involvement') }}</small>
													@endif  										
												</div>
											</div>
                                        </div>
                                        
                                        
									</div>
									<div class="my_setting_content_header style2">
										<div class="my_sch_title">
											<h4 class="m0">Education</h4>
										</div>
									</div>
									<div class="row my_setting_content_details">

                                        <div class="col-lg-12">
											<div class="my_resume_textarea">
												<div class="form-group">
												    <label for="exampleFormControlTextarea1">State your academic qualification and dates</label>
												    <textarea class="form-control" id="exampleFormControlTextarea1" name="academics"  rows="3">{{ $data->academics  ?? old('academics')}}</textarea>
													@if($errors->has('academics'))
													<small class="text-danger">{{ $errors->first('academics') }}</small>
													@endif  												
												</div>
											</div>
                                        </div>
                                        <div class="col-lg-12">
											<div class="my_resume_textarea">
												<div class="form-group">
												    <label for="exampleFormControlTextarea1">State any other bible college/Training Institution with dates</label>
												    <textarea class="form-control" id="exampleFormControlTextarea1" name="other_bible_college"   rows="3">{{ $data->other_bible_college ?? old('other_bible_college')}}</textarea>
													@if($errors->has('other_bible_college'))
													<small class="text-danger">{{ $errors->first('other_bible_college') }}</small>
													@endif  												
												</div>
											</div>
                                        </div>

                                    </div>
                                    
									<div class="my_setting_content_header style2">
										<div class="my_sch_title">
											<h4 class="m0">Referee Info</h4>
										</div>
									</div>
									<div class="row my_setting_content_details">
                                        <div class="col-xl-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">First Referee Name</label>
                                                <input type="text" name="first_referee" value="{{ $data->first_referee ?? old('first_referee') }}"  class="form-control" id="formGroupExampleInputX">
													@if($errors->has('first_referee'))
													<small class="text-danger">{{ $errors->first('first_referee') }}</small>
													@endif                                         
											</div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">First Referee Phone</label>
                                                <input type="text" name="first_referee_phone" value="{{ $data->first_referee_phone ?? old('first_referee_phone')}}"  class="form-control" id="formGroupExampleInputX">
													@if($errors->has('first_referee_phone'))
													<small class="text-danger">{{ $errors->first('first_referee_phone') }}</small>
													@endif                                            
											</div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">Second Referee Name</label>
                                                <input type="text" name="second_referee" value="{{ $data->second_referee ?? old('second_referee')}}"  class="form-control" id="formGroupExampleInputX">
													@if($errors->has('second_referee'))
													<small class="text-danger">{{ $errors->first('second_referee') }}</small>
													@endif                                                 
											</div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="my_profile_setting_input form-group">
                                                <label for="formGroupExampleInputX">Second Referee Phone</label>
                                                <input type="text" name="second_referee_phone" value="{{ $data->second_referee_phone ?? old('second_referee_phone') }}"  class="form-control" id="formGroupExampleInputX">
													@if($errors->has('second_referee_phone'))
													<small class="text-danger">{{ $errors->first('second_referee_phone') }}</small>
													@endif                                                
											</div>
                                        </div>
                                        <div class="col-lg-12">
										</div>
											<button type="submit" class="btn btn-log btn-block btn-thm2" >Save <span class="flaticon-right-arrow-1 ml15"></span></button>
									    </div>
                                    </div>









								</div>
							</form>
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
