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
								<h4 class="title float-left">Users</h4>
							</nav>
						</div>
					
						<div class="col-xl-12">
							<div class="application_statics">
                                
								<div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
											<th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
										@foreach($users as $key => $d)
                                        <tr>
											<td>{{$key+1}}</td>
										    <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
											<td> <a class="btn btn-secondary" href="{{ asset('admin/show-details/'.$d->getProfile($d->id)->id) }}">  <i class="fa fa-info"></i>   </a></td>  
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