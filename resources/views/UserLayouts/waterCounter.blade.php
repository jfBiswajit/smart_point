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
            background:white;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container{

            position: center;
            display: flex;
            justify-content: center;
            flex-direction: row;
        }
        .image{

            width:400px;
            height: 100px;
            display: inline-block;
            overflow: hidden;}
        .image1{

            width:400px;
            height:400px;
            display: inline-block;
            overflow: hidden;}
        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 5px;
        }
        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }


        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;}

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: white;
        }
    </style>
</head>
<body>

<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="container">
    <div class="">



        <div class="card">

            <img class='image' src="{{asset('assets/images/smartPoint.png')}}">
        </div>

    </div>


</div>


<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="container">
    <div class="">



        <div class="card">

            <img class='image1' src="{{asset('assets/images/glass.jpg')}}">
        </div>

    </div>


</div>

<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">
    <div class="">




        <h1> <span>Put Your Glass Under the Knob</span></h1>
    </div>


</div>

<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="container">
    <div class="">





            <button class="card"><h2>Press To Get water</h2></button>




    </div>


</div>
</body>
</html>
