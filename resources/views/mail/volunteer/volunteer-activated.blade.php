@component('mail::message')

# Volunteer Activation

Congratulations,

Your are now a volunteer.

To visit your volunteer admin site, follow the following steps:

1. Go to the  Home page by clicking the procure logo at the top of the page.

2. In the URL section of the web browser, infront of the procure.com insert /admin

3. You will be redirected to admin site

4. Enter your user account login credentials.

5. Finally, you receive the power to make a difference.


Enjoy your experience.

{{--@component('mail::button', ['url' => route('shops.show', $shop->id)])
Visit Your Shop
@endcomponent--}}



Sincerely,<br>
{{ config('app.name') }} Team
@endcomponent
