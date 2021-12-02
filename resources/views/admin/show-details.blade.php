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
								<h4 class="title float-left">{{ $user->name}} Details</h4>
							</nav>
						</div>
					
						<div class="col-xl-12">
							<div class="application_statics">
                                
								<div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">

                                    <tbody>
										<tr>
											<th>NAME</th>
										</tr>
										<tr>
											<td>{{ $user->name}}</td>
										</tr>
										<tr>
											<th>EMAIL</th>
										</tr>
										<tr>
											<td>{{ $user->email}}</td>
										</tr>										
										<tr>
											<th>ADDRESS</th>
										</tr>
										<tr>
											<td>{{ $profile->address }}</td>
										</tr>
										<tr>
											<th>PHONE</th>
										</tr>
										<tr>
											<td>{{ $profile->phone}}</td>
										</tr>
										<tr>
											<th>GENDER</th>
										</tr>
										<tr>
											<td>{{ $profile->gender}}</td>
										</tr>
										<tr>
											<th>NATURE OF BUSINESS</th>
										</tr>
										<tr>
											<td>{{ $profile->nature_of_business}}</td>
										</tr>
										<tr>
											<th>DESIGNATION</th>
										</tr>
										<tr>
											<td>{{ $profile->designation}}</td>
										</tr>
										<tr>
											<th>DATE OF BIRTH</th>
										</tr>
										<tr>
											<td>{{ $profile->dob}}</td>
										</tr>
										<tr>
											<th>BIRTH PLACE</th>
										</tr>
										<tr>
											<td>{{ $profile->birth_place}}</td>
										</tr>
										<tr>
											<th>NATIONALITY</th>
										</tr>
										<tr>
											<td>{{ $profile->nationality}}</td>
										</tr>
										<tr>
											<th>MARITAL STATUS</th>
										</tr>
										<tr>
											<td>{{ $profile->marital_status}}</td>
										</tr>	
										<tr>
											<th>PASTOR NAME</th>
										</tr>
										<tr>
											<td>{{ $profile->pastor_name}}</td>
										</tr>
										<tr>
											<th>CHURCH ROLE</th>
										</tr>
										<tr>
											<td>{{ $profile->church_role}}</td>
										</tr>
										<tr>
											<th>TIME SPENT IN CHURCH</th>
										</tr>
										<tr>
											<td>{{ $profile->time_in_church}}</td>
										</tr>											
										<tr>
											<th>OTHER CHURCHES ATTENDED AND ROLES</th>
										</tr>
										<tr>
											<td>{{ $profile->other_churches_and_roles}}</td>
										</tr>
										<tr>
											<th>ARE YOU BORNAGAIN</th>
										</tr>
										<tr>
											<td>{{ $profile->born_again}}</td>
										</tr>
										<tr>
											<th>HOW LONG HAVE YOU BEEN BORNAGIN</th>
										</tr>
										<tr>
											<td>{{ $profile->born_again_time}}</td>
										</tr>										
										<tr>
											<th>NAME AND ADDRESS OF CHURCH</th>
										</tr>
										<tr>
											<td>{{ $profile->name_and_address_of_church}}</td>
										</tr>	
										<tr>
											<th>CHURCH ACTIVITIES</th>
										</tr>
										<tr>
											<td>{{ $profile->church_involvement}}</td>
										</tr>	
										<tr>
											<th>ACADEMIC RECORDS</th>
										</tr>
										<tr>
											<td>{{ $profile->academics}}</td>
										</tr>	
										<tr>
											<th>OTHER BIBLE COLLEGES ATTENDED</th>
										</tr>
										<tr>
											<td>{{ $profile->other_bible_college}}</td>
										</tr>	
										<tr>
											<th>HOW LONG HAVE YOU BEEN BORNAGIN</th>
										</tr>
										<tr>
											<td>{{ $profile->born_again_time}}</td>
										</tr>	
										<tr>
											<th>FIRST REFREE & NUMBER</th>
										</tr>
										<tr>
											<td>{{ $profile->first_referee}}  {{ $profile->first_referee_phone }} </td>
										</tr>	
										<tr>
											<th>SECOND REFREE & NUMBER</th>
										</tr>
										<tr>
											<td>{{ $profile->second_referee}}  {{ $profile->second_referee_phone}}</td>
										</tr>	
                                    </table>
								
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
	@push('scripts')
	
	<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src = "https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
	<script src = "https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
	
	<script>
	$(document).ready(function() {
	$('#example').DataTable();
	} );
	</script>
	@endpush
