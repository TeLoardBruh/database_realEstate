@extends('admin')
@section('content')

<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Register Agent</h1>
            </div>
            <form class="user" method="POST" action='{{ url("/admin/register_agent") }}' aria-label="{{ __('Register') }}">
              @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="orm-control{{ $errors->has('name') ? ' is-invalid' : '' }}" class="form-control form-control-user" id="exampleFirstName" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>

              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-user form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user orm-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Password" name="password" required>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation" required>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
              </button>
              <hr>

            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="login.html">Already have an account?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection