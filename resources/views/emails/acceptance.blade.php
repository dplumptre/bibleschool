@component('mail::message')
Hello {{ $username}},<br><br>

<p>You have successfully applied for {{ strtoupper($course) }}</p>

<p>You will get a response from us shortly</p>

@component('mail::button', ['url' => $url])
WEBSITE
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
