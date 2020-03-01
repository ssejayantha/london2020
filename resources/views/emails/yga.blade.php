@component('mail::message')

YGA  Submission 2020
=============

Full Name : {{ $data['fname'] }} <br />
Date of birth : {{ $data['dob'] }} <br />
Qualifications: {{ $data['qualifications'] }} <br />
Present working station: {{ $data['workplace'] }} <br />
Previous stations : {{ $data['preworkplace'] }} <br />
SLCOG Membership number : {{ $data['eposter'] }} <br />
Phone number : {{ $data['phone'] }} <br />
Email: {{ $data['email'] }} <br />
Title : {{ $data['title'] }} <br />
Theme : {{ $data['theme'] }} <br />
Theme : {{ $data['cv'] }} <br />
 
   
Thanks,<br>
{{ config('app.name') }}
@endcomponent