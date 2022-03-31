
@component('mail::message')
Hello {{ $name}},<br><br>

<p>{{ $content }}</p>

<p>{{ $payment }}</p>


@component('mail::button', ['url' => $url])
{{ $button }}
@endcomponent
<br><br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent