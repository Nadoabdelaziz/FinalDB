@extends('layouts.master')

@section('title')
    Admin Profile | WEB IT
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Admin Profiles Table </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Edit
                            </th>


                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                @if($row->usertype =='admin')
                                    <tr>
                                        <td>
                                            {{$row->id}}
                                        </td>
                                        <td>
                                            {{$row->name}}
                                        </td>
                                        <td>
                                            {{$row->email}}
                                        </td>
                                        <td>
                                            {{$row->phone}}
                                        </td>
                                        <td>
                                        <a href="/Admin-edit{{$row->id}}" class="btn btn-success">Edit </a>
                                        </td>
                                    </tr>
                            </tbody>
                            @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection


@section('scripts')
@endsection
