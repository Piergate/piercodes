@component('mail::message')
<h3 >
	You Must Make An Calls To
</h3>
Mr/Ms: &nbsp; &nbsp; &nbsp; &nbsp;{{ $content['fullname'] }}
<br>
Content:&nbsp; &nbsp; 
{{ $content['phonenumber'] }}
<br>
Make Call :  {{ $content['day'] }} &nbsp; at &nbsp; {{ $content['time'] }} 


@slot('footer')

Thanks,
send From 
@endslot
@endcomponent