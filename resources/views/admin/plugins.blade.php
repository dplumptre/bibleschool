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
								<h4 class="title float-left">Plugins</h4>
							</nav>
						</div>
					

						<div class="col-xl-12">
							<div class="application_statics">
                                
                                @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                                 @endif
								 <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>s/n</th>
                                            <th>plugin</th>
											<th>Expiration Date</th>
											<th>Status</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $item )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->service}}</td>
											<td>{{$item->expired_on}}</td>
											<td>{{$item->status == 1 ? "Active" : "Inactive" }}</td>
                                            <td> <a data-toggle="modal" data-target="#exampleModal" class="btn btn-danger" href="#">Renew</a> </td>
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





	  
	  <!-- Modal -->
	  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Renew</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
			  Contact Admin <br>info@overallheuristic.com
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
			</div>
		  </div>
		</div>
	  </div>


    

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