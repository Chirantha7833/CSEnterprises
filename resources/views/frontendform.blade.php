<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    <link rel="stylesheet" href="{{ asset('/css/support.css') }}">
</head>
<body>
    @include('header.header')
    <div class="content">
        <div class="plaintext">
            <h1>Get Our Support</h1><br/>
            <p>At CS Enterprises, we value your feedback and inquiries. Whether you have a question, 
            a suggestion, or need assistance with our services, we're here to help. Please feel free
            to reach out to us using the form below, and our dedicated team will get back to you as 
            soon as possible.</p>

                
        <div class="supportform">
            <div class="supform">
                <h2>Send Your Massage</h2>
                <form action="{{url('/sendform')}}" method="post">
                    @csrf
                    <label for="name">Name</label> <input name="name" type="text">
                    <label for="E-Mail">E-Mail</label> <input name="email" type="text">
                    <label for="subject">Subject</label><input name="subject" type="text">
                    <label for="massage">Massage</label><Textarea name="massage" placeholder="Type Here...."></Textarea><br/>
                    <button type="submit">SUBMIT</button>

                </form>
                
            </div>
                
        </div>   

            <p> We are committed to providing excellent service and
                 look forward to hearing from you.
                 Thank you for choosing CS Enterprises for all your vehicle needs. 
                 Your satisfaction is our priority.</p>

        </div>

        {{-- feedback --}}
         <div class="form2back">
            <h2>Feedback</h2>
           <table>

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Massage</th>
            <th>Delete</th>
        </tr>
            @foreach ($data as $data)
        
             <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->subject}}</td>
                <td>{{$data->massage}}</td>

                <td>
                    <form action="/delete" method="GET">
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <input type="submit" name="" id="delete" class="button" value="Delete">
                    </form>
                </td>
            </tr> 
             @endforeach
            </table>
            
        </div> 
        

    </div>

    @include('footer.footer')
    
</body>
</html>