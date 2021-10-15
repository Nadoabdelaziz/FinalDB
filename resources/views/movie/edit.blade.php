@extends('layouts.master')

@section('title')

    Edit Your Movie
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 style="align-content: center;padding-top: 20px">Edit Movie</h3>
            <br/>

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" style="font-size: larger" action="{{action('App\Http\Controllers\MoviesController@update',$movies->id)}}">
                <input type="hidden" name="_method" value="PATCH" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                {{--    <input type="hidden" name="_method" value="PUT"/>--}}
                <div class="form-group">
                    <input type="text" name="id" class="form-control" value="{{$movies['id']}}" placeholder="Enter Movie ID"/>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" value="{{$movies['name']}}" placeholder="Enter Movie Name"/>
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" value="{{$movies['description']}}" placeholder="Enter Movie Description"/>
                </div>
                <div class="form-group">
                    <input type="text" name="rating" class="form-control" value="{{$movies['rating']}}" placeholder="Enter Movie Rating"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Update"/>
                    <a href="/movie" class="btn btn-danger">Cancel </a>
                </div>
            </form>
        </div>
    </div>
@endsection
