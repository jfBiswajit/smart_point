<!DOCTYPE html>
<html>
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
    .image{background-color: #999;
        width: 200px;
        height: 180px;
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
</style>
<body>
<div style="display: flex;
  justify-content: center;
  flex-direction: row;" class="row">
    <div class="">



        <div class="card">

            <img class='image' src="{{asset('assets/images/smartPoint.png')}}">
        </div>
        <h1>Total Amount To pay: <span>50 Taka</span></h1>
    </div>


</div>
<h2>SMART Point</h2>

<div class="container">
    <form action="{{ url("/paymentAuth") }}">
        <label for="fname">Type Your Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>



        <label for="country">Duration</label>
        <select id="country" name="country">
            <option value="">10 Minuite</option>
            <option value="">20 Minuite</option>
            <option value="">30 Minuite</option>
            <option value="">1 Hour</option>
        </select>

        <label for="">Select Payment Method</label>
        <select id="" name="country">
            <option value="">Bkash</option>
            <option value="">Rocket</option>
            <option value="">Nogod</option>
            <option value="">DBBL</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
