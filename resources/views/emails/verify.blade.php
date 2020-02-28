@component('mail::message')
# This is your Verification code

{{$x}}<br>
Copy and paste this in our site.




Thanks,<br>
{{ config('app.name') }}
@endcomponent
