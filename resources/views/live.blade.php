@extends("layouts.master")


@section("content")
  <a href="{{ url('/') }}">Home</a>
    <h1 id="show">0.00</h1>
    <script></script>
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


@endsection