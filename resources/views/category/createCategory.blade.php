
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
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form  action="{{url('/createCategory')}}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}




                    <div class="form-group">
                        <label for="">name</label>
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="imageInput">Enter Image</label>
                        <input  type="file" id="imageInput" name="image">

                    </div>
                    <div class="form-group">
                        <label for="">Submit</label>
                        <input class="form-control" type="submit">
                    </div>
                </form>

            </div>

        </div>
    </div>


@endsection