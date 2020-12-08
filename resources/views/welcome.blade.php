<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2 id="clock">0 hr 00 min 00 sec</h2>
    <button id="red" class="btn" name="red" value="" style="background: red">10 Mins</button>
    <button id="yellow" class="btn" name="yellow" value="" style="background: yellow">10 Mins</button>
    <button id="green" class="btn" name="green" value="" style="background: green">10 Mins</button>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script>
        $(function () {
            const red = $('#red').val();
            const yellow = $('#yellow').val();
            const green = $('#green').val();

            $('.btn').click(function (e) {
              var now = new Date();
              now.setSeconds(now.getSeconds() + 10);
              now = new Date(now);
              const countdownToTime =
              `${now.getFullYear()}-${now.getMonth() + 1}-${now.getDate()} ${now.getHours()}:${now.getMinutes()}:${now.getSeconds()}`;

                $('#clock').countdown(countdownToTime, function (event) {
                    var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                    $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                });
            });
        });
    </script>
</body>

</html>
