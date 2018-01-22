@component('mail::message')
<h3 >
  You must make an appointment with
</h3>
Mr/Ms: &nbsp; &nbsp; &nbsp; &nbsp;{{ $content['fullname'] }}
<br>
Company :  {{ $content['companyname'] }} 
<br>
Content:&nbsp; &nbsp; 
{{ $content['phonenumber'] }}
 & 
{{ $content['email'] }}
<br>
About : &nbsp; &nbsp; &nbsp; &nbsp; {{ $content['projectdetalis'] }}

@slot('footer')

Thanks,
send From 
@endslot
@endcomponent