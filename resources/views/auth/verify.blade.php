@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
  

                <div class="heading mt-5">
                    <h3 class="text-center">{{ __('Verify Your Email Address') }}</h3>
                </div>


                <div class="card-body" style="margin:60px">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-log btn-block btn-thm2">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
