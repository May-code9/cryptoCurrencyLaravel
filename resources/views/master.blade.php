<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- head -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Bitcoin Joomla template" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>@yield('title')</title>
  @if(Route::currentRouteName() == 'crypto_home')
  @include('partials.links.index')
  @elseif(Route::currentRouteName() == 'crypto_about')
  @include('partials.links.about')
  @elseif(Route::currentRouteName() == 'crypto_contact')
  @include('partials.links.contact')
  @elseif(Route::currentRouteName() == 'crypto_services')
  @include('partials.links.services')
  @endif
</head>
<body class="site com-sppagebuilder view-page no-layout no-task itemid-101 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">
  <div class="body-wrapper">
    <div class="body-innerwrapper">
      <section id="sp-top-bar">
        <div class="container">
          <div class="row">
            <div id="sp-top1" class="col-sm-6 col-md-6">
              <div class="sp-column ">
                <ul class="social-icons">
                  <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <div id="sp-top2" class="col-sm-6 col-md-6">
              <div class="sp-column ">
                <ul class="sp-contact-info">
                  <li class="sp-contact-phone"><i class="fa fa-phone"></i> <a href="tel:+1(234)567-890">+1 (234) 567-890</a></li>
                  <li class="sp-contact-email"><i class="fa fa-envelope"></i> <a href="mailto:contact@yourmail.com">contact@yourmail.com</a></li>
                  <li class="sp-contact-time"><i class="fa fa-clock-o"></i>Mon - Fri: 8:00 - 17:30</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <header id="sp-header">
        <div class="container">
          <div class="row">
            <div id="sp-logo" class="col-xs-8 col-sm-2 col-md-2">
              <div class="sp-column ">
                <div class="logo">
                  <a href="/">
                    <img class="sp-default-logo hidden-xs" src="images/logo.png" alt="Bitcoin - Mining and Cryptocurrency Joomla Template">
                    <img class="sp-default-logo visible-xs" src="images/logo.png" alt="Bitcoin - Mining and Cryptocurrency Joomla Template">
                  </a>
                </div>
              </div>
            </div>
            <div id="sp-menu" class="col-xs-4 col-sm-8 col-md-8">
              <div class="sp-column ">
                <div class='sp-megamenu-wrapper'>
                  <a id="offcanvas-toggler" class="visible-sm visible-xs" aria-label="Menu" href="#"><i class="fa fa-bars" aria-hidden="true" title="Menu"></i></a>
                  <ul class="sp-megamenu-parent menu-drop-in hidden-sm hidden-xs">
                    <li class="sp-menu-item current-item active"><a  href="/index.php" >Home</a></li>
                    <li class="sp-menu-item"><a  href="/index.php/about-us" >About Us</a></li>
                    <li class="sp-menu-item"><a  href="/index.php/services" >Services</a></li>
                    <li class="sp-menu-item sp-has-child">
                      <a  href="/index.php/pages" >Pages</a>
                      <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                        <div class="sp-dropdown-inner">
                          <ul class="sp-dropdown-items">
                            <li class="sp-menu-item"><a  href="/index.php/pages/login" >Login</a></li>
                            <li class="sp-menu-item"><a  href="/index.php/pages/create-an-account" >Create an account</a></li>
                            <li class="sp-menu-item"><a  href="/index.php/pages/faq" >Faq</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="sp-menu-item"><a  href="/index.php/shop" >Shop</a></li>
                    <li class="sp-menu-item sp-has-child">
                      <a  href="#" >Blog</a>
                      <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                        <div class="sp-dropdown-inner">
                          <ul class="sp-dropdown-items">
                            <li class="sp-menu-item"><a  href="/index.php/blog/blog-large" >Blog Large</a></li>
                            <li class="sp-menu-item"><a  href="/index.php/blog/single-blog" >Single Blog</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="sp-menu-item"><a  href="/index.php/contact" >Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="sp-search" class="col-sm-2 col-md-2 hidden-sm hidden-xs">
              <div class="sp-column ">
                <div class="sp-module ">
                  <div class="sp-module-content">
                    <div class="j2store_cart_module_103">
                      <div class="j2store-minicart-button">
                        <span class="cart-item-info">
                          <a class="link" href="/index.php/component/j2store/carts">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="cart-item-count">0</span>
                          </a>
                        </span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      @yield('content')


      <footer id="sp-footer">
        <div class="container">
          <div class="row">
            <div id="sp-footer1" class="col-sm-12 col-md-12">
              <div class="sp-column "><span class="sp-copyright">© 2018</span></div>
            </div>
          </div>
        </div>
      </footer>
    </div> <!-- /.body-innerwrapper -->
  </div> <!-- /.body-innerwrapper -->

  <!-- Off Canvas Menu -->
  <div class="offcanvas-menu">
    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
    <div class="offcanvas-inner">
      <div class="sp-module _menu">
        <div class="sp-module-content">
          <ul class="nav menu">
            <li class="item-101  current active"><a href="/index.php" > Home</a></li>
            <li class="item-103"><a href="/index.php/about-us" > About Us</a></li>
            <li class="item-104"><a href="/index.php/services" > Services</a></li>
            <li class="item-105  deeper parent">
              <a href="/index.php/pages" > Pages</a>
              <span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-105"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span>
              <ul class="collapse" id="collapse-menu-105">
                <li class="item-109"><a href="/index.php/pages/login" > Login</a></li>
                <li class="item-110"><a href="/index.php/pages/create-an-account" > Create an account</a></li>
                <li class="item-111"><a href="/index.php/pages/faq" > Faq</a></li>
              </ul>
            </li>
            <li class="item-106"><a href="/index.php/shop" > Shop</a></li>
            <li class="item-107  deeper parent">
              <a href="#" > Blog</a>
              <span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-107"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span>
              <ul class="collapse" id="collapse-menu-107">
                <li class="item-120"><a href="/index.php/blog/blog-large" > Blog Large</a></li>
                <li class="item-119"><a href="/index.php/blog/single-blog" > Single Blog</a></li>
              </ul>
            </li>
            <li class="item-108"><a href="/index.php/contact" > Contact</a></li>
          </ul>
        </div>
      </div>
    </div> <!-- /.offcanvas-inner -->
  </div> <!-- /.offcanvas-menu -->
</body>
</html>
