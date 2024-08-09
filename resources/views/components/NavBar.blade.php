

<div class="btn-group selection:d-flex bg-dark  rounded-pill mx-5 mt-5 w-40 justify-content-between">
    <nav class="nav nav-pills d-inline-flex  ">
        <a class="d-flex text-sm-center text-light nav-link px-5  rounded-pill  {{ $active == 'dashboard' ? 'active bg-light text-dark' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
        <a class="d-flex text-sm-center text-light nav-link px-5 rounded-pill {{ $active == 'expense' ? 'active bg-light text-dark' : '' }}" href="{{ route('expense') }}">Revenue & Expense</a>
        <a class="d-flex text-sm-center text-light nav-link px-5 rounded-pill {{ $active == 'report' ? 'active bg-light text-dark' : '' }}" href="{{ route('report') }}">Report</a>
    </nav>
</div>


