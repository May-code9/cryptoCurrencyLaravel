@extends('master')
@section('title')
Home
@endsection
@section('content')
<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column "></div>
    </div>
  </div>
</section>

<section id="sp-main-body">
  <div class="row">
    <div id="sp-component" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div id="system-message-container">
          @if(session('success_status'))
          <div class = "alert alert-success">
            {{session('success_status')}}
          </div>
          @endif

          @if(session('failure_status'))
          <div class = "alert alert-danger">
            {{session('failure_status')}}
          </div>
          @endif
        </div>
        <div id="sp-page-builder" class="sp-page-builder  page-1">
          <div class="page-content">
            <section id="section-id-1515777920550" class="sppb-section "  >
              <div class="sppb-row-container">
                <div class="sppb-row">
                  <div class="sppb-col-md-12">
                    <div id="column-id-1515777920549" class="sppb-column" >
                      <div class="sppb-column-addons">
                        <div id="sppb-addon-1515777920553" class="clearfix" >
                          <div class="sppb-addon sppb-addon-module ">
                            <div class="sppb-addon-content">
                              <script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script>
                              <script data-cfasync="false" type="text/javascript">
                              lsjQuery(document).ready(function() {
                                if(typeof lsjQuery.fn.layerSlider == "undefined") {
                                  if( window._layerSlider && window._layerSlider.showNotice) {
                                    window._layerSlider.showNotice('layerslider_1','jquery');
                                  }
                                } else {
                                  lsjQuery("#layerslider_1").layerSlider({createdWith: '6.5.8', sliderVersion: '6.5.202', type: 'fullsize', fullSizeMode: 'hero', preventSliderClip: false, skin: 'v6', globalBGSize: 'cover', navStartStop: false, showCircleTimer: false, popupWidth: 640, popupHeight: 360, skinsPath: 'components/com_layer_slider/base/static/layerslider/skins/', height: 650});
                                }
                              });
                              </script>
                              <div id="layerslider_1" class="ls-wp-container fitvidsignore" style="width:1280px;height:100vh;margin:0 auto;margin-bottom: 0px;">
                                <div class="ls-slide" data-ls="bgsize:cover;duration:4500;kenburnszoom:in;kenburnsscale:1;parallaxtype:3d;parallaxevent:scroll;parallaxaxis:y;">
                                  <img src="images/01.jpeg" class="ls-bg" alt="Slide background" />
                                  <p style="top:86px;left:15px;text-align:left;font-weight:700;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Montserrat;font-size:90px;color:#ffffff;" class="ls-l" data-ls="texttransitionin:true;texttypein:chars_asc;">Best CryptoCurrency</p>
                                  <p style="top:214px;left:16px;text-align:left;font-weight:700;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Montserrat;font-size:90px;color:#ffffff;" class="ls-l" data-ls="delayin:300;texttransitionin:true;texttypein:chars_asc;">Solution for business.</p>
                                  <p style="top:340px;left:18px;text-align:left;font-weight:400;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Montserrat;font-size:45px;color:#ffb426;" class="ls-l" data-ls="delayin:600;">Making investment in digital currencies  <br>
                                    simple and profitable.</p>
                                    <a style="" class="ls-l" href="{{ route('register') }}" target="_self" data-ls="delayin:800;hover:true;hoverbgcolor:#fff;hovercolor:#252525;">
                                      <p style="top:491px;left:19px;text-align:center;font-weight:600;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Open Sans;font-size:16px;color:#ffffff;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;border-radius:50px;background:#ffb426;" class=" btn-yellow">GET STARTED</p>
                                    </a>
                                  </div>
                                  <div class="ls-slide" data-ls="bgsize:cover;duration:3200;kenburnszoom:in;kenburnsscale:1;parallaxtype:3d;parallaxevent:scroll;parallaxaxis:y;">
                                    <img src="images/02.jpg" class="ls-bg" alt="Slide background" />
                                    <p style="top:89px;left:480px;text-align:left;font-weight:700;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Montserrat;font-size:80px;color:#ffffff;" class="ls-l" data-ls="texttransitionin:true;texttypein:chars_asc;">With Professional</p>
                                    <p style="top:200px;left:170px;text-align:left;font-weight:700;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Montserrat;font-size:70px;color:#ffffff;" class="ls-l" data-ls="delayin:350;texttransitionin:true;texttypein:chars_asc;">Research &amp; Chart Analysis</p>
                                    <p style="top:344px;left:150px;text-align:right;font-weight:400;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Montserrat;font-size:45px;color:#ffb426;" class="ls-l" data-ls="delayin:550;">we execute the trades, and we report the returns to you<br> With essentially no effort from you</p>
                                    <a style="" class="ls-l" href="{{ route('register') }}" target="_self" data-ls="delayin:850;hover:true;hoverbgcolor:#fff;hovercolor:#252525;">
                                      <p style="top:487px;left:1053px;text-align:center;font-weight:600;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;mix-blend-mode:normal;font-family:Open Sans;font-size:16px;color:#ffffff;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;border-radius:50px;background:#ffb426;" class=" btn-yellow">SIGN UP NOW</p>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="section-id-1515778166890" class="sppb-section "  >
                <div class="sppb-row-container">
                  <div class="sppb-row">
                    <div class="sppb-col-md-12">
                      <div id="column-id-1515778166889" class="sppb-column" >
                        <div class="sppb-column-addons">
                          <div id="sppb-addon-1515778166893" class="clearfix" >
                            <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
                              <h3 class="sppb-addon-title">Get Started Today</h3>
                              <div class="sppb-addon-content">It's easy, Just carefully follow the steps below<br />and you'll be on your way to making sound investment</div>
                            </div>
                          </div>
                          <div id="section-id-1515778166894" class="sppb-section "  >
                            <div class="sppb-container-inner">
                              <div class="sppb-row">
                                <div class="sppb-col-md-4 zoom">
                                  <div id="column-id-1515778166895" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515778166936" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-addon-single-image-container">
                                              <img class="sppb-img-responsive" src="images/register.jpg" alt="Image" title="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515778166941" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center bit01">
                                          <h3 class="sppb-addon-title">Click Register</h3>
                                          <div class="sppb-addon-content">
                                            <div class="sppb-addon-text">If you already have an account with {{ config('app.name') }}, then login with your email and password. </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sppb-col-md-4 zoom">
                                  <div id="column-id-1515778166898" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515778166951" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-addon-single-image-container">
                                              <img class="sppb-img-responsive" src="images/onRegister.jpg" alt="Image" title="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515778166946" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center bit01">
                                          <h3 class="sppb-addon-title">Complete Form</h3>
                                          <div class="sppb-addon-content">
                                            <div class="sppb-addon-text">Ensure all details are accurate before submitting. Should there be any error in details, click <strong>edit</strong> on the dropdown of your Username </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sppb-col-md-4 zoom">
                                  <div id="column-id-1515778166899" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515778166931" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-addon-single-image-container">
                                              <img class="sppb-img-responsive" src="images/bitcoin03.jpg" alt="Image" title="">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515778166922" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center bit01">
                                          <h3 class="sppb-addon-title">Choose Package</h3>
                                          <div class="sppb-addon-content">
                                            <div class="sppb-addon-text">Details Details Details Details Details Details Details Details Details Details Details Details Details </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="section-id-1515846769748" class="sppb-section "  >
                <div class="sppb-row-container">
                  <div class="sppb-row">
                    <div class="sppb-col-md-3">
                      <div id="column-id-1515846769744" class="sppb-column" >
                        <div class="sppb-column-addons"></div>
                      </div>
                    </div>
                    <div class="sppb-col-md-6">
                      <div id="column-id-1515846769745" class="sppb-column" >
                        <div class="sppb-column-addons">
                          <div id="sppb-addon-1515846769754" class="clearfix" >
                            <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
                              <h3 class="sppb-addon-title">Bitcoin Market Data</h3>
                              <div class="sppb-addon-content">This is a live feed of Bitcoin. We have well trained personels that use this chart amongst many other tools to make Analysis.</div>
                            </div>
                          </div>
                          <div id="sppb-addon-1515846769759" class="clearfix" >
                            <div class="sppb-empty-space  clearfix"></div>
                          </div>
                          <div id="sppb-addon-1515846769751" class="clearfix" >
                            <div class="sppb-addon sppb-addon-raw-html ">
                              <div class="sppb-addon-content">
                                <div class="btcwdgt-chart" bw-theme="light"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="sppb-col-md-3">
                      <div id="column-id-1515846769746" class="sppb-column" >
                        <div class="sppb-column-addons"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="section-id-1515846769761" class="sppb-section "  >
                <div class="sppb-row-container">
                  <div class="sppb-shape-container sppb-top-shape  sppb-shape-flip">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                      <path d="M0,22.3V0H1000V100Z" transform="translate(0 0)" style="opacity:0.66"/>
                      <path d="M0,6V0H1000V100Z" transform="translate(0 0)"/>
                    </svg>
                  </div>
                  <div class="sppb-shape-container sppb-bottom-shape ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                      <path d="M0,22.3V0H1000V100Z" transform="translate(0 0)" style="opacity:0.66"/>
                      <path d="M0,6V0H1000V100Z" transform="translate(0 0)"/>
                    </svg>
                  </div>
                  <div class="sppb-row">
                    <div class="sppb-col-md-12">
                      <div id="column-id-1515846769760" class="sppb-column" >
                        <div class="sppb-column-addons">
                          <div id="sppb-addon-1515846769764" class="clearfix" >
                            <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
                              <h3 class="sppb-addon-title">Why {{ config('app.name') }} ?</h3>
                              <div class="sppb-addon-content">Here at {{ config('app.name') }}, We have a good reputation we intend to keep</div>
                            </div>
                          </div>
                          <div id="section-id-1515846769765" class="sppb-section "  >
                            <div class="sppb-container-inner">
                              <div class="sppb-row">
                                <div class="sppb-col-md-4">
                                  <div id="column-id-1515846769766" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515846769777" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-center feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-icon">
                                              <span class="sppb-icon-container"><i class="fa fa-bitcoin"></i></span>
                                            </div>
                                            <h3 class="sppb-addon-title sppb-feature-box-title">Simple and Profitable</h3>
                                            <div class="sppb-addon-text just">{{ config('app.name') }} makes investment in digital currencies simple and profitable for you. Once you invest, there is essentially no work you need to do.</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515846769871" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sppb-col-md-4">
                                  <div id="column-id-1515846769769" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515846769843" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-center feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-icon">
                                              <span class="sppb-icon-container"><i class="fa fa-history"></i></span>
                                            </div>
                                            <h3 class="sppb-addon-title sppb-feature-box-title">Security Garanteed</h3>
                                            <div class="sppb-addon-text">We use the same technology standards of ethics, integrity, and professionalism.</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515846769876" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sppb-col-md-4">
                                  <div id="column-id-1515846769770" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515846769838" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-center feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-icon">
                                              <span class="sppb-icon-container"><i class="fa fa-gg"></i></span>
                                            </div>
                                            <h3 class="sppb-addon-title sppb-feature-box-title">Investment Planning</h3>
                                            <div class="sppb-addon-text">{{ config('app.name') }} makes investment in digital currencies simple and profitable for you. Once you invest, there is essentially no work you need to do.</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515846769866" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section id="section-id-1515846769880" class="sppb-section "  >
                <div id="packages" class="sppb-row-container">
                  <div class="sppb-row">
                    <div class="sppb-col-md-12">
                      <div id="column-id-1515846769879" class="sppb-column" >
                        <div class="sppb-column-addons">
                          <div id="sppb-addon-1515846769883" class="clearfix" >
                            <div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
                              <h3 class="sppb-addon-title">Our Packages</h3>
                              <div class="sppb-addon-content">Here is a list of all our packages with brief details about how the system works. <br />Carefully read through to select the package that fits your preference.</div>
                            </div>
                          </div>
                          <div id="section-id-1515846769886" class="sppb-section "  >
                            <div class="sppb-container-inner">
                              <div class="sppb-row">
                                <div class="sppb-col-md-4">
                                  <div id="column-id-1515846769892" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515846769917" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-left feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-media">
                                              <div class="pull-left">
                                                <div class="sppb-icon"><span class="sppb-icon-container"><i class="fa fa-bitcoin"></i></span></div>
                                              </div>
                                              <div class="sppb-media-body">
                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Package 1</h3>
                                                <div class="sppb-addon-text">Package Details Package Details Package Details Package Details Package Details Package Details Package</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515846769922" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div>
                                      </div>
                                      <div id="sppb-addon-1515846770027" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-left feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-media">
                                              <div class="pull-left">
                                                <div class="sppb-icon">
                                                  <span class="sppb-icon-container"><i class="fa fa-mobile-phone"></i></span>
                                                </div>
                                              </div>
                                              <div class="sppb-media-body">
                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Package 2</h3>
                                                <div class="sppb-addon-text">Package Details Package Details Package Details Package Details Package Details Package Details Package</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sppb-col-md-4">
                                  <div id="column-id-1515846769892" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515846769917" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-left feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-media">
                                              <div class="pull-left">
                                                <div class="sppb-icon"><span class="sppb-icon-container"><i class="fa fa-bitcoin"></i></span></div>
                                              </div>
                                              <div class="sppb-media-body">
                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Package 3</h3>
                                                <div class="sppb-addon-text">Package Details Package Details Package Details Package Details Package Details Package Details Package</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515846769922" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div>
                                      </div>
                                      <div id="sppb-addon-1515846770027" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-left feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-media">
                                              <div class="pull-left">
                                                <div class="sppb-icon">
                                                  <span class="sppb-icon-container"><i class="fa fa-mobile-phone"></i></span>
                                                </div>
                                              </div>
                                              <div class="sppb-media-body">
                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Package 4</h3>
                                                <div class="sppb-addon-text">Package Details Package Details Package Details Package Details Package Details Package Details Package</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="sppb-col-md-4">
                                  <div id="column-id-1515846769895" class="sppb-column" >
                                    <div class="sppb-column-addons">
                                      <div id="sppb-addon-1515846770022" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-left feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-media">
                                              <div class="pull-left">
                                                <div class="sppb-icon">
                                                  <span class="sppb-icon-container"><i class="fa fa-gratipay"></i></span>
                                                </div>
                                              </div>
                                              <div class="sppb-media-body">
                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Package 5</h3>
                                                <div class="sppb-addon-text">Package Details Package Details Package Details Package Details Package Details Package Details Package</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div id="sppb-addon-1515846769901" class="clearfix" >
                                        <div class="sppb-empty-space  clearfix"></div>
                                      </div>
                                      <div id="sppb-addon-1515846770017" class="clearfix" >
                                        <div class="sppb-addon sppb-addon-feature sppb-text-left feature-style02">
                                          <div class="sppb-addon-content">
                                            <div class="sppb-media">
                                              <div class="pull-left">
                                                <div class="sppb-icon">
                                                  <span class="sppb-icon-container"><i class="fa fa-feed"></i></span>
                                                </div>
                                              </div>
                                              <div class="sppb-media-body">
                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">Package 6</h3>
                                                <div class="sppb-addon-text">Package Details Package Details Package Details Package Details Package Details Package Details Package</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- <section id="section-id-1515846770045" class="sppb-section "   data-sppb-parallax="on">
              <div class="sppb-row-overlay"></div>
              <div class="sppb-row-container">
              <div class="sppb-row">
              <div class="sppb-col-md-6">
              <div id="column-id-1515846770044" class="sppb-column" >
              <div class="sppb-column-addons">
              <div id="sppb-addon-1515846770054" class="clearfix" >
              <div class="sppb-addon sppb-addon-text-block 0 sppb-text-left left_title_border">
              <h3 class="sppb-addon-title">Buy and Sell Bitcoin</h3>
              <div class="sppb-addon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing <br />erat eget risus sollicitudin pellentesque et non erat.<br /><br /> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua.</div>
            </div>
          </div>
          <div id="sppb-addon-1515853939958" class="clearfix" >
          <div class="sppb-empty-space  clearfix"></div>
        </div>
        <div id="sppb-addon-1515846770061" class="clearfix" >
        <div class="sppb-text-left">
        <a href="#contact" id="btn-1515846770061" class="sppb-btn  button_style01 sppb-btn-custom sppb-btn-sm sppb-btn-round">NEW ACCOUNT</a>
      </div>
    </div>
    <div id="sppb-addon-1515853939961" class="clearfix" >
    <div class="sppb-empty-space  clearfix"></div>
  </div>
</div>
</div>
</div>
<div class="sppb-col-md-6">
<div id="column-id-1515846770048" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515846770051" class="clearfix" >
<div class="sppb-addon sppb-addon-single-image sppb-text-center ">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/imac.png" alt="Image" title="">
</div>
</div>
</div>
</div>
<div id="sppb-addon-1515853939966" class="clearfix" >
<div class="video_popup sppb-text-center">
<a class="sppb-modal-selector sppb-magnific-popup" href="https://www.youtube.com/watch?time_continue=3&v=JPNwbWu0tMQ" data-popup_type="iframe" data-mainclass="mfp-no-margins mfp-with-zoom" id="sppb-modal-1515853939966-selector"><span><i class="fa fa-play"></i></span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="section-id-1515859675546" class="sppb-section "  >
<div class="sppb-row-container">
<div class="sppb-row">
<div class="sppb-col-md-12">
<div id="column-id-1515859675545" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675549" class="clearfix" >
<div class="sppb-addon sppb-addon-text-block 0 sppb-text-center content_border">
<h3 class="sppb-addon-title">Our Members</h3>
<div class="sppb-addon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing <br />erat eget risus sollicitudin pellentesque et non erat.</div>
</div>
</div>
<div id="section-id-1515859675550" class="sppb-section "  >
<div class="sppb-container-inner">
<div class="sppb-row">
<div class="sppb-col-md-3">
<div id="column-id-1515859675551" class="sppb-column effect_team" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675563" class="clearfix" >
<div class="sppb-addon sppb-addon-sppb-flibox  fade-flipbox flip_right flipon-hover sppb-text-center">
<div class="sppb-flipbox-panel">
<div class="sppb-flipbox-front flip-box">
<div class="flip-box-inner"></div>
</div>
<div class="sppb-flipbox-back flip-box">
<div class="flip-box-inner">
<ul class="social-network social-circle">
<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="sppb-addon-1515859675629" class="clearfix" >
<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
<h3 class="sppb-addon-title">Arthur Most</h3>
<div class="sppb-addon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit est pellentesque et erat.</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-3">
<div id="column-id-1515859675556" class="sppb-column effect_team" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675609" class="clearfix" >
<div class="sppb-addon sppb-addon-sppb-flibox  fade-flipbox flip_right flipon-hover sppb-text-center">
<div class="sppb-flipbox-panel">
<div class="sppb-flipbox-front flip-box">
<div class="flip-box-inner"></div>
</div>
<div class="sppb-flipbox-back flip-box">
<div class="flip-box-inner">
<ul class="social-network social-circle">
<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="sppb-addon-1515859675582" class="clearfix" >
<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
<h3 class="sppb-addon-title">Erika Doe</h3>
<div class="sppb-addon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit est pellentesque et erat.</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-3">
<div id="column-id-1515859675557" class="sppb-column effect_team" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675619" class="clearfix" >
<div class="sppb-addon sppb-addon-sppb-flibox  fade-flipbox flip_right flipon-hover sppb-text-center">
<div class="sppb-flipbox-panel">
<div class="sppb-flipbox-front flip-box">
<div class="flip-box-inner"></div>
</div>
<div class="sppb-flipbox-back flip-box">
<div class="flip-box-inner">
<ul class="social-network social-circle">
<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="sppb-addon-1515859675624" class="clearfix" >
<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
<h3 class="sppb-addon-title">Michael Trest</h3>
<div class="sppb-addon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit est pellentesque et erat.</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-3">
<div id="column-id-1515859675558" class="sppb-column effect_team" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675614" class="clearfix" >
<div class="sppb-addon sppb-addon-sppb-flibox  fade-flipbox flip_right flipon-hover sppb-text-center">
<div class="sppb-flipbox-panel">
<div class="sppb-flipbox-front flip-box">
<div class="flip-box-inner"></div>
</div>
<div class="sppb-flipbox-back flip-box">
<div class="flip-box-inner">
<ul class="social-network social-circle">
<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" class="icoVimeo" title="Vimeo+"><i class="fa fa-vimeo"></i></a></li>
<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div id="sppb-addon-1515859675634" class="clearfix" >
<div class="sppb-addon sppb-addon-text-block 0 sppb-text-left ">
<h3 class="sppb-addon-title">Vanessa Dow</h3>
<div class="sppb-addon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit est pellentesque et erat.</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="section-id-1515859675672" class="sppb-section "  >
<div class="sppb-row-container">
<div class="sppb-row">
<div class="sppb-col-md-2">
<div id="column-id-1515859675671" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675685" class="clearfix" >
<div class="sppb-addon sppb-addon-single-image sppb-text-center effect_logo">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/01.png" alt="Image" title="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-2">
<div id="column-id-1515859675673" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675734" class="clearfix" >
<div class="sppb-addon sppb-addon-single-image sppb-text-center effect_logo">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/02.png" alt="Image" title="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-2">
<div id="column-id-1515859675674" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675731" class="clearfix" >
<div class="sppb-addon sppb-addon-single-image sppb-text-center effect_logo">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/03.png" alt="Image" title="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-2">
<div id="column-id-1515859675675" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675737" class="clearfix" >
<div class="sppb-addon sppb-addon-single-image sppb-text-center effect_logo">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/05.png" alt="Image" title="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-2">
<div id="column-id-1515859675676" class="sppb-column" >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675743" class="clearfix" >
<div class="sppb-addon sppb-addon-single-image sppb-text-center effect_logo">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/02.png" alt="Image" title="">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="sppb-col-md-2">
<div id="column-id-1515859675677" class="sppb-column " >
<div class="sppb-column-addons">
<div id="sppb-addon-1515859675740" class="clearfix" >

<div class="sppb-addon sppb-addon-single-image sppb-text-center effect_logo">
<div class="sppb-addon-content">
<div class="sppb-addon-single-image-container">
<img class="sppb-img-responsive" src="images/01.png" alt="Image" title=""></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div> -->
</div>
</div>
</div>
</div>
</section>

@endsection
