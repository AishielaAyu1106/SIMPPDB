@extends('Dashboard.Admin.Layout.index')


@section('content')
    <div class="card-body p-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
        </div>
    </div>

    
@endsection
