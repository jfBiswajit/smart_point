<!DOCTYPE html>
<html>
<head>

    @include('layouts.jsCss')
    @yield("css")
    <style>
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
            background: white;
            position: center;
            display: flex;
            justify-content: center;
            flex-direction: row;
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
        .image{

            width:400px;
            height: 100px;
            display: inline-block;
            overflow: hidden;}
        h2{position: center;
            display: flex;
            justify-content: center;
            flex-direction: row;}
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .card1 {
            box-shadow:10px 10px 8px 5px rgba(0, 0,.3, 0.2);
            padding: 16px;

            background-color: white;
            border-radius: 25px;

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
  flex-direction: row;" class="card">




        <div class="card">

            <img class='image' src="{{asset('assets/images/smartPoint.png')}}">
        </div>



</div>

<div  class="container">
    <div class="card"><h2>Service : Car Charging</h2></div></div>

<div class="container">
    <div class="card1">
    <form action="{{ url("/paymentAuth") }}">
        <input type="hidden" name="id" value="{{$id}}">
        <label for="fname">Type Your Name</label>
        <input style="text-align:left" class="input100" type="text" id="fname" name="name" placeholder="Your full name.." required>



        @if ($id == 1 || $id == 2)
            <label for="country">Duration</label>
            <select id="country" name="duration">
                <option value="5">5 Minuite</option>
                <option value="10">10 Minuite</option>
                <option value="15">15 Minuite</option>
            </select>
        @endif

        <label for="">Select Payment Method</label>
        <select id="" name="payment_method">
            <option value="1">Bkash</option>
            <option value="2">Rocket</option>
            <option value="3">Nogod</option>
            <option value="4">Card</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</div>
</div>
</body>
@yield('ldJs')
</html>