@component('mail::message')
# Name: {{ $user->fullname }}
# Email: {{ $user->email }}<br>
# phone: {{ $user->phone }}<br>
Subject: {{ $user->subject }} <br><br>
Message:<br> {{ $user->mess }}

Thanks,
{{ config('app.name') }}
@endcomponent