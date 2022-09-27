@component('mail::message')

Subscriber Name is : {{ $details['subscriber_name'] }} <br>
--------------> {{ $details['subscriber_email'] }} -------------->
<br>
<p>
    {{ $details['message'] }}
</P>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
