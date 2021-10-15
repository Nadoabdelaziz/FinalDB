@extends('layouts.master')

@section('title')
    Movies List
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 style="align-content: center;padding-top: 20px">Movies List</h3>
            <br/>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div style="alignment: right">
                <a href="{{route('movie.create')}}" class="btn btn-primary">ADD </a>
                <br/>
                <br/>
            </div>
            <table class="table table-hover"style="font-size: larger">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Rating</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($movies as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['description']}}</td>
                        <td>{{$row['rating']}}</td>
                        <td> <a href="{{action('App\Http\Controllers\MoviesController@edit',$row['id'])}}" class="btn btn-warning">
                                Edit
                            </a></td>

                        <td>
                            <form method="post" class="delete_form" action="{{action('App\Http\Controllers\MoviesController@destroy',$row['id'])}}" >
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
    @section('script')
    <script>
        $(document).ready(function (){
           $('.delete_form').on('submit',function (){
              if(confirm("Are you sure you want to delete it ?")){
                    return true;
              }
              else {
                  return false;
              }
           });
        });
    </script>
@endsection



