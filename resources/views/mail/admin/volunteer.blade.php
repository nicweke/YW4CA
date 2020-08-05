
@component('mail::message')
# Volunteer Actvation Request

Please activate volunteer. These are the details:

Volunteer First Name : {{$volunteer->fname}}<br>
Volunteer Last Name : {{$volunteer->lname}}<br>
Volunteer Phone Number : {{$volunteer->phone_no}}<br>
Volunteer Email Address : {{$volunteer->email}}<br>
Volunteer Date of Birth : {{$volunteer->dob}}<br>
Volunteer Address : {{$volunteer->address}}<br>
Volunteer Zip Code : {{$volunteer->zip}}<br>
Volunteer City : {{$volunteer->city}}<br>
Brief Introduction : {{$volunteer->message_body}}<br>
Further Details: {{$volunteer->further}}<br>



@component('mail::button', ['url' => url('/admin/volunteers')])
Manage Volunteers
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent