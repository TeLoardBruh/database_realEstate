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
                <div class="col-sm-12 mb-3 mb-sm-0">
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
              <div class="form-group">
                <input type="text" class="form-control form-control-user form-control{{ $errors->has('gov_id') ? ' is-invalid' : '' }}" id="exampleInputEmail" placeholder="National ID Card" name="gov_id" value="{{ old('gov_id') }}" required>
                @if ($errors->has('gov_id'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('gov_id') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user orm-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Phone Number" name="phone_number" required>
                  @if ($errors->has('phone_number'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user orm-control{{ $errors->has('sec_phone_number') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Second Phone Number" name="sec_phone_number" required>
                  @if ($errors->has('sec_phone_number'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sec_phone_number') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">D.O.B</label>
                <div class="col-sm-10 mb-3 mb-sm-0">
                  <input class="form-control form-control-user " type="date" value="2011-08-19" name="dob" id="example-date-input">
                </div>
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
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user orm-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Gender" name="gender" required>
                  @if ($errors->has('gender'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('gender') }}</strong>
                  </span>
                  @endif
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