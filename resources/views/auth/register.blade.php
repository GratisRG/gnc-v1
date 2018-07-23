@extends('layouts.app')

@section('content')

<div class="container start_top_pad">
    @if($errors->any())
    <div class="alert alert-primary" role="alert">
      {{$errors->first()}}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pseudo" class="col-md-4 col-form-label text-md-right">{{ __('Pseudo') }}</label>

                            <div class="col-md-6">
                                <input id="pseudo" type="text" class="form-control{{ $errors->has('pseudo') ? ' is-invalid' : '' }}" name="pseudo" value="{{ old('pseudo') }}" required autofocus>

                                @if ($errors->has('pseudo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pseudo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code_parrain" class="col-md-4 col-form-label text-md-right">{{ __('Sponsor Code') }}</label>

                            <div class="col-md-6">
                                <input id="code_parrain" type="text" class="form-control{{ $errors->has('code_parrain') ? ' is-invalid' : '' }}" name="code_parrain" value="{{ old('code_parrain') }}" required autofocus>

                                @if ($errors->has('code_parrain'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code_parrain') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code_activation" class="col-md-4 col-form-label text-md-right">{{ __('Activation Code') }}</label>

                            <div class="col-md-6">
                                <input id="code_activation" type="text" class="form-control{{ $errors->has('code_activation') ? ' is-invalid' : '' }}" name="code_activation" value="{{ old('code_activation') }}" required autofocus>

                                @if ($errors->has('code_activation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('code_activation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Mobile number') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control{{ $errors->has('telephone') ? ' is-invalid' : '' }}" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
