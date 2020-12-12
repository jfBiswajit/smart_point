@section('css')
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
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
            box-shadow:10px 10px 8px 5px rgba(0, 0,.3, 0.2);
            padding: 16px;
            text-align: center;
            background-color: white;
            border-radius: 25px;
        .card1 {
            box-shadow:10px 10px 8px 5px rgba(0, 0,.3, 0.2);
            padding: 16px;

            background-color: white;
            border-radius: 25px;

        }
    </style>


@endsection

@section('js')


    @endsection

@section('content')
    <div class="loader">
        <h2 class="animate">Loading</h2>
    </div>
    @endsection

@section("ldCSS")
    <style media="screen">

        @keyframes load {
            0%{
                opacity: 0.08;
                /*         font-size: 10px; */
                /* 				font-weight: 400; */
                filter: blur(5px);
                letter-spacing: 3px;
            }
            100%{
                /*         opacity: 1; */
                /*         font-size: 12px; */
                /* 				font-weight:600; */
                /* 				filter: blur(0); */
            }
        }
        .loader{
            position:fixed;
            z-index:99;
            top:0;
            left:0;
            width:100%;
            height: 100%;
            background:black;
            display:flex;

        }

        .loader.hidden{
            animation: fadeOut 2s;
            animation-fill-mode: forwards;
        }

        @keyframes fadeOut {
            100%{
                opacity: 0;
                visibility:hidden;
            }
        }

        .animate {
            display:flex;
            justify-content: center;
            align-items: center;
            height:100%;
            margin: auto;
            /* 	width: 350px; */
            /* 	font-size:26px; */
            font-family: Helvetica, sans-serif, Arial;
            animation: load 2s infinite 0s ease-in-out;
            animation-direction: alternate;
            text-shadow: 0 0 1px white;
        }
        body, html{
            height: 96vh;

            color:black;
        }
    </style>

    @endsection


@section('ldJs')
    <script text="text/javascript">
        window.addEventListener("load", function () {
            const loader = document.querySelector(".loader");
            loader.className += " hidden";
        });
    </script>
    @endsection