@extends('layouts.guest')

@section('content')
<h1>Login</h1>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    
    {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="formTotal">
               <label for="email">
                   E-Mail Address
                </label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                Password
                </label>
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
 
    <!--   
    <div class="form-group">
        <div class="formTotal">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
            </div>
        </div>
    </div>
    -->

    <div class="form-group">
        <div class="formTotal">
            <button type="submit" class="btn btn-primary">
                Login
            </button>
         </div>
    </div>
     
    <div class="formTotal">
        <a class="btn btn-link" href="{{ url('/password/reset') }}">
            Wachtwoord vergeten?
        </a>
    </div>
         
    <div class="formTotal">
        <a class="btn btn-link" href="{{ url('/password/reset') }}">
            Nog geen account?
        </a>
    </div>

</form>
             
@endsection
