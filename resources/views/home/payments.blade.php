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
								<h4 class="title float-left">Payments</h4>
							</nav>
						</div>
					
						<div class="col-xl-12">
							<div class="application_statics">
                                
								<div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
											<th>S/n</th>
											<th>Date</th>
											<th>Purpose</th>
											<th>Course</th>
											<th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

										

										@foreach($data as $key => $d)
                                        <tr>
											<td>{{$key+1}}</td>
											<td>{{ $d->created_at->format('y-m-d')}}</td>
											<td>{{ strtoupper($d->purpose) }}</td>
											<td>{{ strtoupper($d->course_slug) }}</td>
											<td>{{ $d->amount}}</td>
                                            <td>{{ $d->status }} </td>
                                      </tr>
										@endforeach
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
