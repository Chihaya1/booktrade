@component('mail::message')
#Sell Registered

<h2>Your book has been registered for sell.</h2>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
