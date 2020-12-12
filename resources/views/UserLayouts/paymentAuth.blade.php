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

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .container {

            position: center;
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

        .image {
            background-color: #999;
            width: 200px;
            height: 180px;
            display: inline-block;
            overflow: hidden;
        }

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
            padding: 20px;
        }

        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }


        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
        }

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
    @include("/layouts/jsCss")
    @yield('ldCSS')
</head>

<body>
@include("/layouts/jsCss")
@yield('content')
    <div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">
        <h2>Complete You Payment</h2>

    </div>
    <div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">
        <div class="">



            <div class="card">
                @php
                if ($paymentMethod == 1) {
                $img = 'bkash.jpg';
                } else if ($paymentMethod == 2) {
                $img = 'rocket.jpg';
                } else if ($paymentMethod == 3) {
                $img = 'nogod.jpg';
                } else {
                $img = 'card.jpg';
                }
                @endphp
                <img class='image' src="{{asset("assets/images/$img")}}">
            </div>
            <h1>Total Amount To pay: <span>{{ $amount }} Taka</span></h1>
        </div>


    </div>
    <div class="container">
        <form action="{{ url(url("/counter")) }}">
            <label for="fname">Type Account Number</label>
            <input type="text" id="fname" name="account_number" placeholder="Account Number" required>
            <input type="hidden" name="amount" value="{{$amount}}">
            <input type="submit" value="Proceed To Payment">
        </form>
    </div>
</body>
@yield('ldJs')
</html>
