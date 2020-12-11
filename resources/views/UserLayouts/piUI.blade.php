<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .fade
        {
            opacity:0.5;
           margin-right:15px;
        }
        .fade:hover
        {
            opacity:1;
        }
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }


        .row {margin: 0 -5px;}


        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .header{

            width:400px;
            height:100px;
            display: inline-block;
            overflow: hidden;}
        .image{

            width:400px;
            height: 300px;
            display: inline-block;
            overflow: hidden;
           }
        .shrink:hover
        {
            -webkit-transform: scale(0.8);
            -ms-transform: scale(0.8);
            transform: scale(0.8);
        }
        .container{

            position: center;
            display: flex;
            justify-content: center;
            flex-direction: row;
            padding:5px;
        }
        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 80%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow:10px 10px 8px 2px rgba(0, 0,.3, 0.2);
            padding: 16px;
            text-align: center;
            background-color: white;
            border-radius: 25px;

        }
    </style>
</head>
<body>

<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="container">
    <div class="">



        <div class="header-card">

            <img class='header' src="{{asset('assets/images/smartPoint.png')}}">
        </div>

    </div>

</div>
<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">
    <h1>Select Your Service </h1>

</div>
<div class="container">

    <div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">




            <div  class="card">

                <a href="payment/2"><img class='image' src="{{asset('assets/images/car.jpg')}}"></a>
                <h2>Car Charge</h2>
            </div>


    </div>
    <div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="column">




        <div class="card">

            <a href="payment/1"><img class='image' src="{{asset('assets/images/phone.jpg')}}"></a>
           <h2>Mobile Charge</h2>
        </div>


    </div>
    <div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">




        <div class="card">

            <a href="payment/3"><img class='image' src="{{asset('assets/images/water.jpg')}}"></a>
            <h2>Drinking Water</h2>
        </div>


    </div>




</div>
</body>
</html>
