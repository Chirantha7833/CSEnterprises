<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{url('css/portfolio.css')}}">
</head>
<body>
    @include('header.header')
    <div class="content">

        <div class="vehicletable">
            <table border="1">
                <tr>
                    <th>Category</th>
                    <th>Photos</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>Cars</td>
                    <td><img src="{{url('images/car1.jpg')}}" alt=""></td>
                    <td>2023 Honda Civic Type R</td>
                    <td>$44,890</td>
                    <td>Engine Type	In-Line 4-Cylinder with Turbocharger
Max. Boost Pressure	25.2 psi
Displacement	1,996 cc
Horsepower (SAE net)1	315 @ 6,500 rpm
Torque (SAE net)2	310 lb.-ft. @ 2,600-4,000 rpm
Redline	7,000 rpm
Bore and Stroke 	86.0 mm x 85.9 mm
Compression Ratio  	9.8 : 1
Valve Train	16-Valve DOHC VTEC
CARB Emissions Rating3	LEV3-ULEV50
Honda LogR® Datalogger System	</td>

                </tr>

            </table>
        </div>

    </div>

    
   @include('footer.footer') 
</body>
</html>