@extends('layouts.master')

@section('title')
    Edit Admin Profile | WEB IT
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            Edit Admin Profile
                        </h1>
                    </div>
                    <div class="card-body">
                        <form action="/Admin-Update/{{$users->id}}" method="POST">
                            {{csrf_field()}}
                            {{method_field('PUT') }}
                            <div class="mb-3">
                                <label> ID ( If Changed , you will have to Re-LOGIN back again) </label>
                                <input type="text" class="form-control" name="id" value="{{$users->id}}">
                            </div>
                            <div class="mb-3">
                                <label> Name </label>
                                <input type="text" class="form-control" name="name" value="{{$users->name}}">
                            </div>
                            <div class="mb-3">
                                <label> Email address</label>
                                <input type="text" class="form-control" name="email" value="{{$users->email}}">
                            </div>
                            <div class="mb-3">
                                <label> Phone</label>
                                <input type="text" class="form-control" name="phone"value="{{$users->phone}}">
                            </div>
                            <button type="submit" class="btn btn-success" >Update</button>
                            <a href="/Admin-Profile" class="btn btn-danger">Cancel </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection
