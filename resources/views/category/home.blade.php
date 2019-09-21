
@extends('layouts.app')
@section('content')
    <div class="sidebar-container">
        <div class="sidebar-logo">
            <p>Motor</p>
        </div>
        <ul class="sidebar-navigation">

            @foreach($category as $cat)
                <li>
                    <a href="/category/{{$cat->name}}">
                        {{$cat->name}}
                        <img src="{{asset('images/'.$cat->image)}}" height="40" width="40" />
                    </a>
                </li>
            @endforeach

        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                {{$category}}
            </div>

        </div>
    </div>


@endsection