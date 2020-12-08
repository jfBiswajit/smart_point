<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div style="padding: 1rem">
        <button id="red" class="btn" name="red" value="" style="background: red">10 Mins</button>
        <span id="red_clock" style="color: red; font-size: 1.2rem">0 hr 00 min 00 sec</span>
    </div>

    <div style="padding: 1rem">
        <button id="yellow" class="btn" name="red" value="" style="background: yellow">10 Mins</button>
        <span id="yellow_clock" style="color:  rgb(255, 153, 0); font-size: 1.2rem">0 hr 00 min 00 sec</span>
    </div>

    <div style="padding: 1rem">
        <button id="green" class="btn" name="red" value="" style="background: green">10 Mins</button>
        <span id="green_clock" style="color: green; font-size: 1.2rem">0 hr 00 min 00 sec</span>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script>
        $(function () {
            const red = $('#red').val();
            const yellow = $('#yellow').val();
            const green = $('#green').val();

            $('.btn').click(function (e) {
                const currentBtn = this;
                console.log(currentBtn.id);
                currentBtn.disabled = true;
                console.log(currentBtn);
                var now = new Date();
                now.setSeconds(now.getSeconds() + 10);
                now = new Date(now);
                const countdownToTime =
                    `${now.getFullYear()}-${now.getMonth() + 1}-${now.getDate()} ${now.getHours()}:${now.getMinutes()}:${now.getSeconds()}`;

                if (this.id === 'red') {
                    $('#red_clock').countdown(countdownToTime, function (event) {
                        var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                        $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                        if (event.type === 'finish') {
                            this.disabled = false;
                            $.ajax({
                                url: "store_button_data",
                                method: "post",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'red': red,
                                    'yellow': yellow,
                                    'green': green
                                },
                                success: function (response) {
                                    console.log(currentBtn);
                                    currentBtn.disabled = false;
                                },
                                dataType: "json",
                            });
                        }
                    });
                }

                if (this.id === 'yellow') {
                    $('#yellow_clock').countdown(countdownToTime, function (event) {
                        var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                        $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                        if (event.type === 'finish') {
                            this.disabled = false;
                            $.ajax({
                                url: "store_button_data",
                                method: "post",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'red': red,
                                    'yellow': yellow,
                                    'green': green
                                },
                                success: function (response) {
                                    console.log(currentBtn);
                                    currentBtn.disabled = false;
                                },
                                dataType: "json",
                            });
                        }
                    });
                }

                if (this.id === 'green') {
                    $('#green_clock').countdown(countdownToTime, function (event) {
                        var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                        $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                        if (event.type === 'finish') {
                            this.disabled = false;
                            $.ajax({
                                url: "store_button_data",
                                method: "post",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'red': red,
                                    'yellow': yellow,
                                    'green': green
                                },
                                success: function (response) {
                                    console.log(currentBtn);
                                    currentBtn.disabled = false;
                                },
                                dataType: "json",
                            });
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
