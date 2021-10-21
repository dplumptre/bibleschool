@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">



                    













                        <div class="login_form inner_page ">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="heading mt-5">
                                    <h3 class="text-center">Login to your account</h3>
                                    <p class="text-center">Don't have an account? <a class="text-thm"
                                            href="{{ route('register') }}">Sign Up!</a></p>
                                </div>
                                <div class="form-group">

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
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
                                        required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                    {{ old('remember') ? 'checked' : '' }}
                                    <label class="custom-control-label" for="exampleCheck3">Remember me</label>

                                    @if (Route::has('password.request'))
                                        <a class="tdu btn-fpswd float-right" href="{{ route('password.request') }}">Forgot
                                            Password?</a>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>

                            </form>
                        </div>








            </div>
        </div>
    </div>
@endsection
