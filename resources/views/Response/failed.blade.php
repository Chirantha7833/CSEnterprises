<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/failed.css') }}">
</head>
<body>
@include('header.header')
<div class="card">
      <div>
        <i class="checkmark">✓</i>
      </div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <h1>Failed</h1> 
        <p>Delete Failed</p>
      </div>

@include('footer.footer')
</body>
</html>