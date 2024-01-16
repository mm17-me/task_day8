@component('mail::message')
# Name: {{ $data['fullname'] }}
# Email: {{ $data['email'] }}<br>
# phone: {{ $data['phone'] }}<br>
<b>Subject:</b> {{ $data['subject'] }}<br>
<b>Message:</b><br>{{ $data['mess'] }}

Thanks,
{{ config('app.name') }}
@endcomponent