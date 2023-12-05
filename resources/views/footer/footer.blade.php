<!DOCTYPE html>
<html lang="en">
<head>
  <link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
</head>
<body>
   <div class="footer">
    <div class="col-one">
        <h3>USEFUL LINKS</h3>
        <a href="">Home</a>
        <a href="">about Us</a>
        <a href="">Contact Us</a>
        <a href="">Portfolio</a>
        <a href="">Front-end-Form</a>
    </div>
    <div class="col-two">
        <h3>NEWSLETTER</h3>
        <form action="">
            <input type="text" placeholder="Your E-Mail"><br/>
            <button type="sunmit">SUBSCRIBE</button>
        </form>
    </div>
    <div class="col-three">
        <h3>CONTACT</h3>
        <p>No 192</p>
        <p>4th Cross Street</p>
        <p>Colombo</p>
        <div class="socialicons">
            <img src="{{ asset('images/fb.png') }}" alt="fb">
            <img src="{{ asset('images/twitter.png') }}" alt="twitter">
            <img src="{{ asset('images/insta.png') }}" alt="insta">
            <img src="{{ asset('images/whatsapp.png') }}" alt="whatsapp">
        </div>
    </div>
    
   </div>
</body>
</html>