<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactus</title>
    <link rel="stylesheet" href="{{url('css/contactus.css')}}">
</head>
<body>
    @include('header.header')
 {{-- content --}}
    <div class="content">
{{-- leftside --}}
    <div class="left">

        <div class="dataset">
        <h1>Address</h1>
        <h4>No 192, 4th Cross Street,Colombo</h4>
    </div>

    <div class="dataset">
        <h1>Email</h1>
        <h4>csenterprises619@gmail.com</h4>
    </div>

    <div class="dataset">
        <h1>Phone</h1>
        <h4>General Inquiries: +94 55 227 7685<br/>
            Customer Support: +94 77 877 9692</h4>
    </div>

    <div class="dataset">
        <h1>Business Hours:</h1>
        <h4>Monday to Friday: 9:00 AM - 6:00 PM<br/>
            Saturday: 9:00 AM - 1:00 PM
            Sunday: Closed</h4>
    </div>

{{-- leftsideend --}}
</div>

<div class="right">
    <img src="{{url('images/photo1.png')}}" alt="">
   <div class="rightc">
    <h3>Get in Touch</h3>

We value your feedback, inquiries, and concerns. Whether you want to learn more about our services, 
discuss a specific vehicle, or need assistance with anything related to CS Enterprises, we are here to help.
 You can reach us by email or phone during our business hours, and we'll do our best to assist you promptly.<br/><br/>

Send Us a Message:<br/>

Click here to send us an email: <a href="">Send Mail</a> <br/><br/>
   

Thank you for considering CS Enterprises. We look forward to hearing from you and assisting with all your vehicle-related needs.</div>
</div>
{{-- contentend --}}
</div>
    @include('footer.footer')

</body>
</html>