@extends('layouts.master')

@section('title')
    Registered Users | WEB IT
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Users Table </h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
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
                                Delete
                            </th>
                            </thead>
                            <tbody>
                            @foreach($users as $row)
                                @if($row->usertype=='')
                            <tr>
                                <td>
                                    {{$row->name}}
                                </td>
                                <td>
                                    {{$row->email}}
                                </td>
                                <td>
                                    {{$row->phone}}
                                </td>
                                    @if($row->usertype =='admin')
                                    <a href="Admin-Profile" class="btn btn-success">Edit </a>
                                    @endif
                                </td>
                                <td>
                                    <form method="post" action="/User-deleted{{$row->id}}}" >
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
