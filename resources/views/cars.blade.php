@extends('layouts.app')
@section('content')
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

    <div class="content-container">

        <div class="container-fluid">


            <div class="jumbotron">


            </div>

        </div>
    </div>
@endsection