@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="FontC">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in as a user ! ,
(Only Admins have access to the Dashboard)') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
