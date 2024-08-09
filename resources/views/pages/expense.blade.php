@extends('partials.main')
@section('content')
@if(session()->has('errors'))
    <div class="alert alert-danger">
        {{ session()->get('errors') }}
    </div>
@endif
<div class="row align-items-start" >
    <div data-bs-spy="scroll" class="container-fluid col my-3 p-3 border border-success border-2 col-sm" style="width: 45vw; height: 65vh; background-color: #2B2C30; border-radius: 1rem; color: white; overflow-y: auto;">
        <table class="table table-striped">
            <thead class="" style="color: white">
                <th scope="col">No</th>
                <th scope="col">Nominal</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </thead>
            <tbody style="color: white">
                @foreach ($datas as $data)
                <tr style="color: white">
                    <th>{{ $loop ->iteration }}</th>
                    <td>{{ 'Rp ' . number_format( $data ->Nominal , 0, ',', '.') }}</td>
                    <td>{{ $data ->Description }}</td>
                    <td>{{ $data ->Type }}</td>
                    <td>
                        {{-- <a class="btn btn-warning" href="#">Edit</a> --}}
                        <a class="btn btn-danger" href="{{ route('data.destroy',$data->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach



            </tbody>

          </table>
</div>

    <div class="col">
        <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <input type="text" id="Type" name="Type" value="Revenue"> --}}

    {{-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select Type
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" onclick="setType('Revenue')">Revenue</a></li>
            <li><a class="dropdown-item" href="#" onclick="setType('Expense')">Expense</a></li>
        </ul>
    </div> --}}
    <div class="row my-3 input-group  w-50 m-auto">

        <input  type="text" class="form-control end " id="Type" name="Type" placeholder="Expense or Revenue"  style="background-color: #2B2C30; color: #ffffff;">
      </div>

            <div class="row my-3 input-group  w-50 m-auto">

                    <input  type="number" class="form-control end " id="Nominal" name="Nominal" placeholder="Nominal"  style="background-color: #2B2C30; color: #ffffff;">
                  </div>

            <div class="row my-3 input-group  w-50 m-auto">

                    <textarea  aria-label="With textarea" id="Description" name="Description" placeholder="Description" style="background-color: #2B2C30; color: #ffffff;"></textarea>


            </div>
            <div class="col" style="margin-left: 14vw">
                <button type="submit" class="btn w-25" style="margin-right: 1vw; background-color: #00FF58">Add</button>
                <button type="reset" class="btn w-25" style="background-color: #f93d3d">Reset</button>
            </div>
          </form>

        {{-- <div class="row my-3">
            <div class="dropdown w-50" style="margin-left: 11.8vw">
                <select class="form-select form-select-md mb-3" aria-label="Large select example" style="background-color: #2B2C30; color: #ffffff;">
                    <option selected>Tag</option>
                    <option value="Expanse">One</option>
                    <option value="Revenue">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>
        </div> --}}


    </div>

</div>
<style>
    #revenue-link,#expense-link {
    transition: background-color 0.3s, color 0.3s;
}

#revenue-link.active {
    background-color: #00FF58 !important;
    color: black !important;
}
#expense-link.active {
    background-color: #FF9D9D !important;
    color: black !important;
}
</style>
<script>
    const navLinks = document.querySelectorAll('#revenue-link,#expense-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });
    function setType(type) {
        document.getElementById('Type').value = type;
    }
</script>

@endsection

