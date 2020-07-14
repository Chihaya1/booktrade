@component('mail::message')
#   Your donation has been confirmed.

<h1>Your book has been confirmed for donation.</h1>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
