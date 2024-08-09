@extends('partials.main')
@section('content')
<div class="row align-items-center" >
    <div data-bs-spy="scroll" class="container-fluid col m-3 p-3 border border-success border-2 col-sm" style="width: 45vw; height: 65vh; background-color: #2B2C30; border-radius: 1rem; color: white; overflow-y: auto;">
        <table class="table table-striped">
            <thead class="" style="color: white">
                <th scope="col">No</th>
                <th scope="col">Nominal</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
            </thead>
            <tbody style="color: white">
                @foreach ($datas as $data)
                <tr style="color: white">
                    <th>{{ $loop ->iteration }}</th>
                    <td>{{ 'Rp ' . number_format( $data ->Nominal , 0, ',', '.') }}</td>
                    <td>{{ $data ->Description }}</td>
                    <td>{{ $data ->Type }}</td>

                </tr>
                @endforeach



            </tbody>

          </table>
</div>

    <div class="col">

        <div class="row my-3" >
            <div class="  p-3 border border-success border-" style="width: 25vw;height: 30vh; background-color: #2B2C30;border-radius:1rem; color: white">
                <h3 style="margin-bottom: 4rem">Revenue</h3>
            <h1 style="margin-left: 4rem; scale: 1.2">{{ $nom1 }}</h1>
        </div>
        <div class="row my-3">
            <div class="  p-3 border border-danger border-" style="width: 25vw;height: 30vh; background-color: #2B2C30;border-radius:1rem; color: white">
                <h3 style="margin-bottom: 4rem">Expense</h3>
                <h1 style="margin-left: 4rem; scale: 1.2">{{ $nom2 }}</h1>
        </div>

    </div>

</div>
@endsection
