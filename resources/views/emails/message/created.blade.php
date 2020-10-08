@component('mail::message')
# hey administrateur

- {{ $name }} <br>
- {{ $email }}
@component('mail::panel')
{{ $msg }}
@endcomponent

@component('mail::button', ['url' => ''])
lien
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
