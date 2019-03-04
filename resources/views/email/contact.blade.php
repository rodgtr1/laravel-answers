@component('mail::message')
# New Contact message

{{ $subject }}

@component('mail::panel')
    {{ $message }}
    
@endcomponent

@component('mail::button', ['url' => route('contact')])
Reply to this Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
