@extends("layouts.master")
@section("content")

  <a href="{{ url('show_data') }}">Live Data</a>
    <div style="padding: 1rem">
        <button id="red" class="btn" name="red" value="0" style="background: red">10 Mins</button>
        <span id="red_clock" style="color: red; font-size: 1.2rem">0 hr 00 min 00 sec</span>
    </div>

    <div style="padding: 1rem">
        <button id="yellow" class="btn" name="red" value="0" style="background: yellow">10 Mins</button>
        <span id="yellow_clock" style="color:  rgb(255, 153, 0); font-size: 1.2rem">0 hr 00 min 00 sec</span>
    </div>

    <div style="padding: 1rem">
        <button id="green" class="btn" name="red" value="0" style="background: green">10 Mins</button>
        <span id="green_clock" style="color: green; font-size: 1.2rem">0 hr 00 min 00 sec</span>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script>
        $(function () {
            $('.btn').click(function (e) {
                var currentBtn = this;
                currentBtn.disabled = true;
                var now = new Date();
                now.setSeconds(now.getSeconds() + 10);
                now = new Date(now);
                var countdownToTime =
                    `${now.getFullYear()}-${now.getMonth() + 1}-${now.getDate()} ${now.getHours()}:${now.getMinutes()}:${now.getSeconds()}`;

                if (this.id === 'red') {
                    currentBtn.value = 1
                    var red = $('#red').val();
                    var yellow = $('#yellow').val();
                    var green = $('#green').val();
                    console.log(red, yellow, green);

                    $.ajax({
                        url: "store_button_data",
                        method: "post",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'red': red,
                            'yellow': yellow,
                            'green': green
                        },
                        success: function (response) {},
                        dataType: "json",
                    });

                    $('#red_clock').countdown(countdownToTime, function (event) {
                        var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                        $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                        if (event.type === 'finish') {
                            currentBtn.disabled = false;
                            currentBtn.value = 0;
                            var red = $('#red').val();
                            var yellow = $('#yellow').val();
                            var green = $('#green').val();
                            console.log(red, yellow, green);

                            $.ajax({
                                url: "store_button_data",
                                method: "post",
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'red': red,
                                    'yellow': yellow,
                                    'green': green
                                },
                                success: function (response) {},
                                dataType: "json",
                            });
                        }
                    });
                }

                if (this.id === 'yellow') {
                    currentBtn.value = 1
                    var red = $('#red').val();
                    var yellow = $('#yellow').val();
                    var green = $('#green').val();
                    console.log(red, yellow, green);

                    $.ajax({
                        url: "store_button_data",
                        method: "post",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'red': red,
                            'yellow': yellow,
                            'green': green
                        },
                        success: function (response) {},
                        dataType: "json",
                    });


                    $('#yellow_clock').countdown(countdownToTime, function (event) {
                        var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                        $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                        if (event.type === 'finish') {
                            currentBtn.disabled = false;
                            currentBtn.value = 0;
                            var red = $('#red').val();
                            var yellow = $('#yellow').val();
                            var green = $('#green').val();
                            console.log(red, yellow, green);

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

                                },
                                dataType: "json",
                            });
                        }
                    });
                }

                if (this.id === 'green') {
                    currentBtn.value = 1
                    var red = $('#red').val();
                    var yellow = $('#yellow').val();
                    var green = $('#green').val();
                    console.log(red, yellow, green);

                    $.ajax({
                        url: "store_button_data",
                        method: "post",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'red': red,
                            'yellow': yellow,
                            'green': green
                        },
                        success: function (response) {},
                        dataType: "json",
                    });

                    $('#green_clock').countdown(countdownToTime, function (event) {
                        var totalHours = event.offset.totalDays * 24 + event.offset.hours;
                        $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
                        if (event.type === 'finish') {
                            currentBtn.disabled = false;
                            currentBtn.value = 0;
                            var red = $('#red').val();
                            var yellow = $('#yellow').val();
                            var green = $('#green').val();
                            console.log(red, yellow, green);

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

                                },
                                dataType: "json",
                            });
                        }
                    });
                }
            });
        });
    </script>

@endsection