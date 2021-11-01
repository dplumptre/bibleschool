@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <div class="sign_up_form">
                            <div class="heading">
                                <h3 class="text-center">Create New Account</h3>
                                <p class="text-center">Have an account? <a class="text-thm"
                                        href="{{ route('login') }}">Login</a></p>
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif


                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password">
                                </div>


                                <input type="hidden" name="role_id" value="1"/>



                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Captcha') }}</label>
        
                                    <div class="col-md-6">
                                   <div class="captcha">
                                    <span>{!! captcha_img() !!}</span>
                                     <a class="reload" id="reload">
                                        <i class="fas fa-sync text-secondary"></i> 
                                        </a>
                                    </div>
        
                                   
                                    </div>
                                </div>
        
                       <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Enter Captcha') }}</label>
                                    @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <div class="col-md-6">
                                             <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                   
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>

                            </form>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        $('#reload').click(function () {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    
    </script>

@endsection
