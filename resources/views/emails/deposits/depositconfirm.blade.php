@component('mail::message')
#Deposit Confirmed

<h2>Your Deposit has been confirmed.</h2>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
