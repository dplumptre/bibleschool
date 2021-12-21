<div class="dashbord_nav_list">
	<ul>
		<li class="active"><a href="{{route('home.profile')}}"><span class="flaticon-puzzle-1"></span> Profile</a></li>



	


		 @if(   auth()->user()->hasRole("admin")   )
		 <li><a href="{{ route('admin.users')}}"><span class="flaticon-online-learning"></span> Users</a></li>
		 <li><a href="{{ route('admin.applications')}}"><span class="flaticon-online-learning"></span>Applications</a></li>
		 <li><a href="{{ route('admin.payments')}}"><span class="flaticon-online-learning"></span> Payments</a></li>
		 <li><a href="{{ route('admin.plugins')}}"><span class="flaticon-online-learning"></span> Plugin</a></li>
		 {{-- <li><a href="{{ route('admin.schools')}}"><span class="flaticon-online-learning"></span> Schools</a></li> --}}
		 <li><a href="{{ route('mailinglist.index')}}"><span class="flaticon-online-learning"></span> Mailing List</a></li>
		 @endif

		 @if(   auth()->user()->hasRole("user")  )

		 <li><a href="{{ route('home.courses')}}"><span class="flaticon-online-learning"></span> All Courses</a></li>
		 <li><a href="{{ route('home.payments')}}"><span class="flaticon-online-learning"></span> Payments</a></li>
		 <li><a href="{{ route('home.applications')}}"><span class="flaticon-online-learning"></span> My Applications</a></li>
		
		 @endif
		 

		 @if(    auth()->user()->hasRole("super-admin")   )
		 <li><a href="{{ route('super-admin.settings')}}"><span class="flaticon-settings"></span> Settings</a></li>
		 @endif

	</ul>
	<h4>Account</h4>
	<ul>

		<li><a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="flaticon-logout"></span> Logout</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
			@csrf
		</form>

	</li>


	</ul>
</div>