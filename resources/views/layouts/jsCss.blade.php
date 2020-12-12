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