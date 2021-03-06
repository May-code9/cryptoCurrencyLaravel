@extends('master')
@section('title')
Login
@endsection
@section('content')
<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title"style="background-color: #f7f7f7;">
          <div class="container"><h2>Login your account</h2><h3>Login Form</h3>
            <div class="sp-module ">
              <div class="sp-module-content">
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i></li>
                  <li><a href="{{ route('crypto_home') }}" class="pathway">Home</a></li>
                  <li class="active">Login</li>
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
                <li class="active">Login</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sp-breadc">
  <div class="row bs-wizard col-xs-offset-1" style="border-bottom:0">

    <div class="col-xs-5 bs-wizard-step active">
      <div class="text-center bs-wizard-stepnum">Step 1</div>
      <div class="progress"><div class="progress-bar"></div></div>
      <a href="#" class="bs-wizard-dot"></a>
      <div class="bs-wizard-info text-center darker">Login with Email and Password</div>
    </div>

    <div class="col-xs-5 bs-wizard-step disabled"><!-- complete -->
      <div class="text-center bs-wizard-stepnum">Step 2</div>
      <div class="progress"><div class="progress-bar"></div></div>
      <a href="#" class="bs-wizard-dot"></a>
      <div class="bs-wizard-info text-center dark">Login with One Time Password</div>
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
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <div class="group-control">
                      <input type="email" name="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" required autofocus/>
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
                  <div class="checkbox">
                    <label>
                      <input id="remember" type="checkbox" name="remember" class="inputbox" value="yes">
                      Remember me
                    </label>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                      Log in
                    </button>
                  </div>
                </form>
              </div>
              <div class="form-links">
                <ul>
                  <li>
                    <a href="#">
                      Forgot your password?
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sp-bottom">
  <div class="container">
    <div class="row">
      <div id="sp-bottom1" class="col-sm-6 col-md-4">
        <div class="sp-column ">
          <div class="sp-module ">
            <h3 class="sp-module-title">FOOTER MENU</h3>
            <div class="sp-module-content">
              <div class="mod-sppagebuilder  sp-page-builder" >
                <div class="page-content">
                  <div id="section-id-1516037004857" class="sppb-section "  >
                    <div class="sppb-container-inner">
                      <div class="sppb-row">
                        <div class="sppb-col-md-6">
                          <div id="column-id-1516037004855" class="sppb-column" >
                            <div class="sppb-column-addons">
                              <div id="sppb-addon-1516037004863" class="clearfix" >
                                <div class="sppb-addon sppb-addon-text-block 0  ">
                                  <div class="sppb-addon-content">
                                    <ul>
                                      <li><a href="#">About Us</a></li>
                                      <li><a href="#">Services</a></li>
                                      <li><a href="#">Pages</a></li>
                                      <li><a href="#">Shop</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="sppb-col-md-6">
                          <div id="column-id-1516037004856" class="sppb-column" >
                            <div class="sppb-column-addons">
                              <div id="sppb-addon-1516037004860" class="clearfix" >
                                <div class="sppb-addon sppb-addon-text-block 0  ">
                                  <div class="sppb-addon-content"><ul>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">New account</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Blog</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">.sp-page-builder .page-content #section-id-1516035640162{padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516035640161{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516035640165 {color:#fafafa;}.sp-page-builder .page-content #section-id-1516034312127{padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516034312126{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516034312130 {color:#fafafa;}#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1516034312133 .sppb-empty-space {height:30px;}}@media (max-width:767px) {#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}}#sppb-addon-1516034312136 .sppb-optin-form-icon {font-size:82px;}.sppb-optin-form-popup-wrap > #sppb-addon-1516034312136 {width:600px;}#sppb-addon-1516036908476 {color:#fafafa;}.sp-page-builder .page-content #section-id-1516037004857{padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516037004855{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516037004863 {color:#fafafa;}#column-id-1516037004856{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516037004860 {color:#fafafa;}
                </style>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="sp-bottom2" class="col-sm-6 col-md-5">
      <div class="sp-column ">
        <div class="sp-module ">
          <h3 class="sp-module-title">NEWSLETTER SIGNUP</h3>
          <div class="sp-module-content">
            <div class="mod-sppagebuilder  sp-page-builder" >
              <div class="page-content">
                <div id="section-id-1516034312127" class="sppb-section "  >
                  <div class="sppb-container-inner">
                    <div class="sppb-row">
                      <div class="sppb-col-md-12">
                        <div id="column-id-1516034312126" class="sppb-column" >
                          <div class="sppb-column-addons">
                            <div id="sppb-addon-1516034312130" class="clearfix" >
                              <div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
                                <div class="sppb-addon-content">By subscribing to our mailing list you will always be update with the latest news from us.</div>
                              </div>
                            </div>
                            <div id="sppb-addon-1516034312133" class="clearfix" >
                              <div class="sppb-empty-space  clearfix"></div>
                            </div>
                            <div id="sppb-addon-1516034312136" class="clearfix" >
                              <div class="sppb-addon sppb-addon-optin-forms optintype-normal newsletter sppb-text-left grid">
                                <div class="sppb-optin-form-box sppb-row ">
                                  <div class="sppb-optin-form-info-wrap media-position-top sppb-col-sm-12">
                                    <div class="sppb-optin-form-img-wrap  sppb-optin-form-icon"></div>
                                    <div class="sppb-optin-form-details-wrap"></div>
                                  </div>
                                  <div class="sppb-optin-form-content sppb-col-sm-12">
                                    <form class="sppb-optin-form form-inline">
                                      <div class="sppb-form-group email-wrap">
                                        <input type="email" name="email" class="sppb-form-control" placeholder="Email" required="required">
                                      </div>
                                      <input type="hidden" name="platform" value="mailchimp">
                                      <input type="hidden" name="hidename" value="1">
                                      <input type="hidden" name="pageid" value="0">
                                      <input type="hidden" name="addonId" value="1516034312136">
                                      <div class="button-wrap ">
                                        <button type="submit" id="btn-1516034312136" class="sppb-btn sppb-btn-primary sppb-btn-rounded sppb-btn-flat"><i class="fa"></i> JOIN</button>
                                      </div>
                                    </form>
                                    <div style="display:none;margin-top:10px;" class="sppb-optin-form-status"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="sppb-addon-1516036908476" class="clearfix" >
                              <div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
                                <div class="sppb-addon-content">We don't spam.</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style type="text/css">.sp-page-builder .page-content #section-id-1516035640162{padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516035640161{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516035640165 {color:#fafafa;}.sp-page-builder .page-content #section-id-1516034312127{padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516034312126{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516034312130 {color:#fafafa;}#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}@media (min-width:768px) and (max-width:991px) {#sppb-addon-1516034312133 .sppb-empty-space {height:30px;}}@media (max-width:767px) {#sppb-addon-1516034312133 .sppb-empty-space {height:20px;}}#sppb-addon-1516034312136 .sppb-optin-form-icon {font-size:82px;}.sppb-optin-form-popup-wrap > #sppb-addon-1516034312136 {width:600px;}#sppb-addon-1516036908476 {color:#fafafa;}</style>	</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sp-bottom3" class="col-sm-6 col-md-3">
        <div class="sp-column ">
          <div class="sp-module ">
            <h3 class="sp-module-title">GET IN TOUCH</h3>
            <div class="sp-module-content">
              <div class="mod-sppagebuilder  sp-page-builder" >
                <div class="page-content">
                  <div id="section-id-1516035640162" class="sppb-section "  >
                    <div class="sppb-container-inner">
                      <div class="sppb-row">
                        <div class="sppb-col-md-12">
                          <div id="column-id-1516035640161" class="sppb-column" >
                            <div class="sppb-column-addons">
                              <div id="sppb-addon-1516035640165" class="clearfix" >
                                <div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
                                  <div class="sppb-addon-content">
                                    <strong>Phone</strong>: +1 (234) 567-890<br />
                                    <strong>Email:</strong> contact@yourmail.com<br /><br />228 Park Ave SNew York, NY 10003-1502US<br /><br />
                                    <a title="Google Map" href="https://www.google.com/maps/place/228+Park+Ave,+New+York,+NY+10017,+USA/@40.7543298,-73.9783973,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258fdf71d54cd:0x824fb82f415fb12f!8m2!3d40.7543258!4d-73.9762086?hl=en" target="_blank" rel="noopener noreferrer">Open In Google Map</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <style type="text/css">.sp-page-builder .page-content #section-id-1516035640162{padding-top:8px;padding-right:0px;padding-bottom:8px;padding-left:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;}#column-id-1516035640161{box-shadow:0 0 0 0 #fff;}#sppb-addon-1516035640165 {color:#fafafa;}</style>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
