<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home</title>
    <link rel="stylesheet" href="{{url('/css/home.css')}}">
</head>
<body>
    @include('header.header')
 
    <div class="welcome">
        <div class="blur">
            <div class="text">
                <h1>WELCOME TO CS ENTERPRISES</h1>
        <h3>At CS Enterprises, we're delighted to welcome you to our online platform, the perfect destination
             for all your vehicle needs. Whether you're in the market for a new set of wheels, seeking a trusted platform 
             to sell your vehicle, 
             or simply exploring the world of automobiles, you've come to the right place.</h3></div>
        </div>

</div>
 
 <div class="content">
 @include('vehiclecategory')

<h3 class="topic">Why Choose CS Enterprises?</h3>
<div class="list">
    <h4>Quality Assurance:</h4><br/><p>We take pride in offering vehicles of the highest quality, thoroughly inspected to ensure your peace of mind.</p> <br/>
    <h4>Easy Selling:</h4><br/><p>If you're a seller, our platform makes it hassle-free to list your vehicle and connect with potential buyers.</p><br/>
    <h4>Expert Guidance:</h4><br/><p>Our experienced team is here to provide guidance, answer questions, and assist you throughout your vehicle journey.</p><br/>
    <h4>Community Hub:</h4><br/><p>Join a vibrant community of auto enthusiasts, where you can discuss, learn, and share your passion for vehicles.</p><br/>
</div>

   


<p class="endtext">Start exploring, and let CS Enterprises be your gateway to the exciting world of automobiles. We're committed to providing exceptional service, 
and your satisfaction is our top priority.
<br/>
Thank you for choosing CS Enterprises. Let's drive forward together!</p>
    </div>

    @include('footer.footer')
    
</body>
</html>