@extends('layouts.app')
<div class="sidebar-container">
    <div class="sidebar-logo">
        Project Name
    </div>
    <ul class="sidebar-navigation">

        @foreach($category as $cat)
            <li>
                <a href="#">
                    {{$cat}}
                </a>
            </li>
        @endforeach
    </ul>
</div>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
