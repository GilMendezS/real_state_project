@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
            <div class="col s12 m6">
                <div class="card white darken-1">
                    <div class="card-content black-text">
                        <span class="card-title"><i class="fa fa-sign-in-alt"></i> Entrar</span>
                        <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="red-text" data-error="wrong" data-success="right">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                    @if ($errors->has('password'))
                                        <span class="red-text" data-error="wrong" data-success="right">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                </div>
                                <div class="input-field col s12">
                                        <div class="switch left" >
                                            <label>
                                            No Recordarme
                                            <input type="checkbox" name="remember">
                                            <span class="lever"></span>
                                            Recordarme
                                            </label>
                                        </div>
                                          
                                </div>
                                <div class="input-field col s12">
                                    <button type="submit" class="btn green left">
                                            {{ __('Login') }}
                                    </button>
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                
                            </div> 
                            
                            
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>


@endsection
