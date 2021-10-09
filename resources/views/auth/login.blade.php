@extends('layouts.app')

@section('content')
<div class="FontC">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br/>
                <div class="card-header" style="font-size: larger;color: white">{{ __('Login') }}</div>
                <br/>
                <div class="form-group-row">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br/>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br/>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <br/>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="font-size: large" >
                                    {{ __('Login') }}
                                </button>
                                <br/>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: #f8fafc" href="{{ route('password.request') }}">
                                        <br/>
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <br/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
