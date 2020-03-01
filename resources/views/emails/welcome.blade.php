@component('mail::message')

Abstract  Submission 2020
=============

Title of Abstract: {{ $data['title'] }} <br />
Type of Submission: {{ $data['typeofsubmit'] }} <br />
Theme: {{ $data['theme'] }} <br />
Corresponding Author: {{ $data['author'] }} <br />
Telephone Number : {{ $data['tp'] }} <br />
Email : {{ $data['email'] }} <br />

 
   
Thanks,<br>
{{ config('app.name') }}
@endcomponent