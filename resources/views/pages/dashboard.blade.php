
@extends('partials.main')
@section('content')
<script>
    function updateTime() {
            var now = new Date();
            var hours = String(now.getHours()).padStart(2, '0');
            var minutes = String(now.getMinutes()).padStart(2, '0');
            var seconds = String(now.getSeconds()).padStart(2, '0');
            var timeString = hours + ':' + minutes + ':' + seconds;

            var greeting;
            if (hours >= 0 && hours < 9) {
                greeting = "Pagi";
            } else if (hours >= 9 && hours < 15) {
                greeting = "Siang";
            } else if (hours >= 15 && hours < 18) {
                greeting = "Sore";
            } else {
                greeting = "Malam";
            }

            document.getElementById('time').innerHTML = "Selamat " + greeting ;
        }
    setInterval(updateTime, 1000);
</script>
<aside style="position: absolute; right: 3.5rem; ">

    </div>
</aside>
<section onload="updateTime()">

    <h1 class="text-light fw-bold" style="font-size: 4rem;margin-left: 3rem" id="time"></h1>
    <h1 class="text-light fw-bold" style="font-size: 4rem;margin-left: 3rem">Andreas Imanuel</h1>

    <div class="d-flex justify-content-sm-around col" style="margin-top: 3rem">
        <div class=" mx-3 p-3 border border-danger border-" style="width: 30vw;height: 35vh; background-color: #2B2C30;border-radius:1rem; color: white">
            <h3 style="margin-bottom: 4rem">Expense</h3>
            <h1 style="margin-left: 4rem; scale: 1.2">{{ $nom2 }}</h1>
        </div>
        <div class=" mr-3 p-3 border border-success border-" style="width: 30vw;height: 35vh; background-color: #2B2C30;border-radius:1rem; color: white">
            <h3 style="margin-bottom: 4rem">Revenue</h3>
            <h1 style="margin-left: 4rem; scale: 1.2">{{ $nom1 }}</h1>
        </div>
        <div class=" ml-3 p-3" style="width: 30vw;height: 35vh; background-color: #00FF58;border-radius:1rem; color: white">
            <h3 style="color: black">Net</h3>
            <h3 style="margin-bottom: 1rem; color: black">Worth</h3>
            <h1 style="margin-left: 4rem; scale: 1.2; color: black">{{ $nom3 }}</h1>
        </div>
    </div>
</section>

@endsection
