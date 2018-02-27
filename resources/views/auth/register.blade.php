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
            <div class="col-sm-8 col-sm-offset-2 text-center loginnew">
              <div class="login">
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="col-md-12">
                    <h3 style="text-align:left">Personal Details</h3>
                    <hr>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="title" id="title" class="{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" placeholder="Title" required />
                        @if ($errors->has('title'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('title') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
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
                  </div>
                  <div class="col-md-5">
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
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="cell_number" id="cell_number" class="{{ $errors->has('cell_number') ? ' is-invalid' : '' }}" value="{{ old('cell_number') }}" placeholder="Cell Number" required />
                        @if ($errors->has('cell_number'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('cell_number') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="home_number" id="home_number" class="{{ $errors->has('home_number') ? ' is-invalid' : '' }}" value="{{ old('home_number') }}" placeholder="Home Number" />
                        @if ($errors->has('home_number'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('home_number') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <select name="country" id="country" class="{{ $errors->has('country') ? ' is-invalid' : '' }}" style="height:54px" required>
                          <option >--- Select Country ---</option>
                          <option disabled></option>
                          @for($i = 0; $i < count(getCountries()); $i++)
                          <option value="{{ getCountries()[$i] }}">{{ getCountries()[$i] }}</option>
                          @endfor
                        </select>
                        @if ($errors->has('country'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('country') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <hr>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="date" name="date_of_birth" title="Date Of Birth" id="date_of_birth" style="height:54px" class="{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" value="{{ old('date_of_birth') }}" placeholder="Date of Birth" required />
                        @if ($errors->has('date_of_birth'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('date_of_birth') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="occupation" id="occupation" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" value="{{ old('occupation') }}" placeholder="Occupation" required />
                        @if ($errors->has('occupation'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('occupation') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="funds" id="funds" class="{{ $errors->has('funds') ? ' is-invalid' : '' }}" value="{{ old('funds') }}" placeholder="Source of Funds" required />
                        @if ($errors->has('funds'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('funds') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="referral_id" id="referral_id" class="{{ $errors->has('referral_id') ? ' is-invalid' : '' }}" value="{{ old('referral_id') }}" placeholder="Referral Id" />
                        @if ($errors->has('referral_id'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('referral_id') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <h3 style="text-align:left">Contact Details</h3>
                    <hr>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="address" id="address" class="{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" placeholder="Resident Address" required/>
                        @if ($errors->has('address'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('address') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input type="text" name="postal_address" id="postal_address" class="{{ $errors->has('postal_address') ? ' is-invalid' : '' }}" value="{{ old('postal_address') }}" placeholder="Postal Address" required/>
                        @if ($errors->has('postal_address'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('postal_address') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
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
                  </div>
                  <div class="col-md-6">
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
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="group-control">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">
                        Proceed
                      </button>
                    </div>
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
