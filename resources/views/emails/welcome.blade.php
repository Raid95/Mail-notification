@component('mail::message')
# Hello From Coder's Tape

Welcome to our online class.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
