@extends('layouts.guest')

@section('content')

<h1>registreer</h1>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
    
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="formTotal">
           <label for="name">
                Naam:
            </label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
               
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif 
        </div>                        
     </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="formTotal">
           <label for="email">
                E-mailadres:
            </label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>                      
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="formTotal">
            <label for="password">
                Wachtwoord:
            </label>
            <input id="password" type="password" class="form-control" name="password" required>
               
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>                       
    </div>

    <div class="form-group">
        <div class="formTotal">
            <label for="password-confirm">
                Bevesitg wachtwoord:
            </label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>

    <div class="form-group">
        <div class="formTotal">
            <button type="submit" class="btn btn-primary">
                Registreer
            </button>
        </div>
    </div>
</form>
@endsection
