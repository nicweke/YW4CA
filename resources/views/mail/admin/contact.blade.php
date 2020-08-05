@component('mail::message')
# Client Query

Clients Name : {{$contact->name}}<br>
Clients Number: {{$contact->number}}<br>
Clients Email: {{$contact->email}}<br><br>
# Clients Description of Issue: <br>{{$contact->email}}<br>

Kindly assist with the above.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
