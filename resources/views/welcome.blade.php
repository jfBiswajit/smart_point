<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1 id="show">0.00</h1>
    <button name="red" value="" style="background: red">10 Mins</button>
    <button name="yellow" value="" style="background: yellow">10 Mins</button>
    <button name="green" value="" style="background: green">10 Mins</button>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        setInterval(function () {
          $h1 = $('#show');
            $.ajax({
                url: "show_data",
                method: "post",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function (response) {
                    $h1.html(response.val);
                },
                dataType: "json",
            });
        }, 1000);
    </script>
</body>

</html>
