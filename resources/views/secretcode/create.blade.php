@extends('layouts.admin_layout')

@section('content')
<div class=" start-top ">

    <div class="jumbotron bg-white shadow p-3 mb-5 rounded-0 ">
	  <div class="container">
	   <form method="POST" action="{{ route('codestore') }}" aria-label="{{ __('Code') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="lot" class="col-md-4 col-form-label text-md-right">{{ __('Lot de codes') }}</label>

                            <div class="col-md-2">
                                <input id="lot" type="text" class="form-control{{ $errors->has('lot') ? ' is-invalid' : '' }}" name="lot" value="{{ old('lot') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn bg-menu text-white">
                                    {{ __('Générer') }}
                                </button>
                            </div>
                        </div>
                    </form>
	    
	  </div>
	</div>

</div>
@endsection
