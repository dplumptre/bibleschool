@extends('layouts.app')

@section('content')



	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">School Of Ministry</h4>
					</div>
				</div>
			</div>
		</div>
    </section>
    


    <!-- about Us home6 -->
    <section class=" pt35 bgc-f9">
        <div class="container">


         <div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mb0 mt0">Featured Courses</h3>
					</div>
				</div>
			</div>



            <div class="row ">




@foreach($courses as $course)
<div class="col-lg-6 col-xl-4">
	<div class="top_courses">
		<div class="details">
			<div class="tc_content">
				<h5>{{ $course->course }} ({{ strtoupper($course->slug) }})</h5>

			</div>
			<div class="tc_footer">
				<div class="tc_price float-right"> <a href="{{ asset('school-courses/'.$course->slug ) }}"  class="btn dbxshad btn-sm btn-thm2 rounded">Explore</a> </div>
			</div>
		</div>
	</div>
</div>

@endforeach

						





























            </div>
        </div>
    </section>

@endsection
