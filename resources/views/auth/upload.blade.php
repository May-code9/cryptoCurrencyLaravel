@extends('master')
@section('title')
Verify Your Account | Registration
@endsection
@section('content')
<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title"style="background-color: #f7f7f7;">
          <div class="container"><h2>Verify</h2><h3>Your Account</h3>
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

<section id="sp-breadc">
  <div class="row bs-wizard" style="border-bottom:0">

    <div class="col-xs-3 bs-wizard-step complete">
      <div class="text-center bs-wizard-stepnum">Step 1</div>
      <div class="progress"><div class="progress-bar"></div></div>
      <a href="#" class="bs-wizard-dot"></a>
      <div class="bs-wizard-info text-center darker">Complete Registration Form</div>
    </div>

    <div class="col-xs-3 bs-wizard-step complete"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 2</div>
      <div class="progress"><div class="progress-bar"></div></div>
      <a href="#" class="bs-wizard-dot"></a>
      <div class="bs-wizard-info text-center dark">Google Authentication</div>
    </div>

    <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 3</div>
      <div class="progress"><div class="progress-bar"></div></div>
      <a href="#" class="bs-wizard-dot"></a>
      <div class="bs-wizard-info text-center dark">Upload Id Card and Proof of Residence</div>
    </div>

    <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 4</div>
      <div class="progress"><div class="progress-bar"></div></div>
      <a href="#" class="bs-wizard-dot"></a>
      <div class="bs-wizard-info text-center">Await Approval</div>
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
                <form method="POST" action="{{ route('Verify.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-12">
                    <h3 style="text-align:left">Upload Files</h3>
                    <hr>
                  </div>
                  <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="group-control">
                        <label>Upload a copy of your Valid Id Card (Drivers License, International Passport, Voters Card, National ID)</label>
                        <input type="file" name="id_card" id="id_card" required />
                        @if ($errors->has('id_card'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('id_card') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <hr>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="group-control">
                        <label>Upload a copy of your proof of Address (Light Bill, Water Bill, Utility Bill)</label>
                        <input type="file" name="resident_address" id="resident_address" required />
                        @if ($errors->has('resident_address'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('resident_address') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">
                        Upload
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
