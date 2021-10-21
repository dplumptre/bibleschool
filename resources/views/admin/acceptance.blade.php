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
								<h4 class="title float-left">Admission</h4>
							</nav>
						</div>
					
						<div class="col-xl-12">
							<div class="application_statics">

                                <table class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
											<th>Name</th>
											<td>{{$transaction->name}}</td>
										</tr>
                                        <tr>
											<th>Email</th>
											<td>{{$transaction->email}}</td>
										</tr>
                                        <tr>
											<th>Course</th>
											<td>{{ strtoupper($transaction->course_slug)}}</td>
                                        </tr>																				
                                    </thead>
                                    <tbody>
								</table>		

                           
                                <form class="contact_form" id="contact_form"  action="{{ asset('admin/acceptance/'. $transaction->id )}}" method="POST">
									@csrf
									<div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputName">Status</label>
                                               <select class="form-control" name="status" id="">
                                                <option value="">Select </option>
                                                   <option value="accepted">Accepted</option>
                                                   <option value="rejected">Rejected</option>
											   </select>
											   @if($errors->has('status'))
											   <small class="text-danger">{{ $errors->first('status') }}</small>
											   @endif
											</div>
											<input type="hidden" name="trans_id" value="{{ $transaction->id}}">


                                        </div>
                                        <div class="form-group ui_kit_button mb0">
                                            <button type="submit" class="btn dbxshad btn-lg btn-thm2 rounded">Submit</button>
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