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
          <div class="container"><h2>Verify</h2><h3>With Your Id</h3>
            <div class="sp-module ">
              <div class="sp-module-content">
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i></li>
                  <li><a href="{{ route('crypto_home') }}" class="pathway">Home</a></li>
                  <li class="active">Continue Registration</li>
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
                <li class="active">Continue Registration</li>
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
                <form method="POST" action="#">
                  @csrf
                  <div class="col-md-12">
                    <h3 style="text-align:left">Upload Files</h3>
                    <hr>
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
                      <button type="submit" class="btn btn-primary btn-block">
                        Register
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
