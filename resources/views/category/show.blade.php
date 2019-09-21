
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
                        <img src="{{asset('images/'.$cat->image)}}" height="60" width="60" />
                    </a>
                </li>
            @endforeach

        </ul>
    </div>

    <div class="content-container">

        <div class="container-fluid">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                @foreach($cars as $car)
                <div class="card" style="width: 14rem; display: inline-table">
                    <img src="{{asset('images/'.$car->image)}}" height="200" />

                    <div class="card-body">
                        <h5 class="card-title"> {{$car->name}}      </h5>
                        <p class="card-text">Motor=>  {{$car->motor}} CC قدره الوتور</p>
                        <p class="card-text">Price=>  {{$car->price}} اسعار الوكيل الرسميه </p>
                        <a href="#" class="btn btn-success">{{$car->price}}</a>
                        <a href="{{url('/edit/'.$car->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{url('/delete/'.$car->id)}}" class="btn btn-danger">Delete</a>
                    </div>

                </div>
                @endforeach

<div class="pagination" style="align-content: center !important;">
                        {{ $cars->links() }}
</div>


            </div>

        </div>
    </div>


@endsection