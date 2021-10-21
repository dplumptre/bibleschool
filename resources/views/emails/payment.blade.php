@component('mail::message')
Hello,<br><br>

<p>Payment has been made for {{ $reason }}</p>

<p>Kindly find payment details below</p>

   Email:     {{ $email }} <br>
   Amount:    ${{ $amount}}<br>




<p> TFOLC MINISTRY TRAINING ACADEMY</p><br><br>

@component('mail::button', ['url' => $url])
WEBSITE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent