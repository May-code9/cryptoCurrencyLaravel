@extends('master')
@section('title')
Register
@endsection
@section('content')
<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title"style="background-color: #f7f7f7;">
          <div class="container"><h2>Create your account</h2><h3>Registration Form</h3>
            <div class="sp-module ">
              <div class="sp-module-content">
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i></li>
                  <li><a href="{{ route('crypto_home') }}" class="pathway">Home</a></li>
                  <li class="active">Register</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sp-breadc">
  <div class="container">
    <div class="row">
      <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
        <div class="sp-column ">
          <div class="sp-module ">
            <div class="sp-module-content">
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i></li>
                <li><a href="{{ route('crypto_home') }}" class="pathway">Home</a></li>
                <li class="active">Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sp-main-body">
  <div class="container">
    <div class="row">
      <div id="sp-component" class="col-sm-12 col-md-12">
        <div class="sp-column ">
          <div id="system-message-container">
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center loginnew">
              <div class="login">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group">
                    <div class="group-control">
                      <input type="text" name="first_name" id="first_name" class="{{ $errors->has('first_name') ? ' is-invalid' : '' }}" value="{{ old('first_name') }}" placeholder="First Name" required />
                      @if ($errors->has('first_name'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="group-control">
                      <input type="text" name="last_name" id="last_name" class="{{ $errors->has('last_name') ? ' is-invalid' : '' }}" value="{{ old('last_name') }}" placeholder="Last Name" required/>
                      @if ($errors->has('last_name'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="group-control">
                      <input type="text" name="phone_number" id="phone_number" class="{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" value="{{ old('phone_number') }}" placeholder="Phone Number" required />
                      @if ($errors->has('phone_number'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="group-control">
                      <input type="email" name="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" required/>
                      @if ($errors->has('email'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="group-control">
                      <input type="password" name="password" id="password" placeholder="Password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" required/>
                      @if ($errors->has('password'))
                      <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="group-control">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
