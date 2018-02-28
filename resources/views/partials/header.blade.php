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
            <li class="sp-contact-phone"><i class="fa fa-phone"></i> <a href="tel:+1(234)567-890">Phone Number</a></li>
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
              <img class="sp-default-logo hidden-xs" src="images/logo.png" title="{{ config('app.name') }}" alt="{{ config('app.name') }}">
              <img class="sp-default-logo visible-xs" src="images/logo.png" title="{{ config('app.name') }}" alt="{{ config('app.name') }}">
            </a>
          </div>
        </div>
      </div>
      <div id="sp-menu" class="col-xs-4 col-sm-8 col-md-8">
        <div class="sp-column ">
          <div class='sp-megamenu-wrapper'>
            <a id="offcanvas-toggler" class="visible-sm visible-xs" aria-label="Menu" href="#"><i class="fa fa-bars" aria-hidden="true" title="Menu"></i></a>
            <ul class="sp-megamenu-parent menu-drop-in hidden-sm hidden-xs">
              <li class="sp-menu-item current-item @if(isset($index)) {{ $index }} @endif"><a  href="{{ route('crypto_home') }}" >Home</a></li>
              <li class="sp-menu-item"><a  href="{{ route('crypto_home') }}#packages" >Packages</a></li>
              <li class="sp-menu-item @if(isset($about)) {{ $about }} @endif"><a  href="{{ route('crypto_about') }}" >About Us</a></li>
              <li class="sp-menu-item @if(isset($services)) {{ $services }} @endif"><a  href="{{ route('crypto_services') }}" >Services</a></li>
              <!-- <li class="sp-menu-item sp-has-child">
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
              </li> -->

              <!-- <li class="sp-menu-item"><a  href="/index.php/shop" >Shop</a></li> -->
              <!-- <li class="sp-menu-item sp-has-child">
                <a  href="#" >Blog</a>
                <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                  <div class="sp-dropdown-inner">
                    <ul class="sp-dropdown-items">
                      <li class="sp-menu-item"><a  href="/index.php/blog/blog-large" >Blog Large</a></li>
                      <li class="sp-menu-item"><a  href="/index.php/blog/single-blog" >Single Blog</a></li>
                    </ul>
                  </div>
                </div>
              </li> -->
              <li class="sp-menu-item @if(isset($contact)) {{ $contact}} @endif"><a  href="{{ route('crypto_contact') }}" >Contact</a></li>
              @guest
              <li class="sp-menu-item @if(isset($login_active)) {{ $login_active }} @endif"><a  href="{{ route('login') }}" >Login</a></li>
              <li class="sp-menu-item @if(isset($register_active)) {{ $register_active }} @endif"><a  href="{{ route('register') }}" >Register</a></li>
              @elseif(Auth::user()->role > 2)
              <li class="sp-menu-item sp-has-child"><a  href="#" >{{ Auth::user()->first_name }}</a>
                <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                  <div class="sp-dropdown-inner">
                    <ul class="sp-dropdown-items">
                      <li class="sp-menu-item"><a  href="{{ route('cryptoDashboard') }}" >Dashboard</a></li>
                      @if($verify == 0)
                      <li class="sp-menu-item"><a  href="{{ route('Verify.index') }}" >Verify</a></li>
                      @endif
                      <li class="sp-menu-item"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              @else
              <li class="sp-menu-item sp-has-child"><a  href="#" >{{ Auth::user()->first_name }}</a>
                <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                  <div class="sp-dropdown-inner">
                    <ul class="sp-dropdown-items">
                      @if($verify == 0)
                      <li class="sp-menu-item"><a  href="{{ route('Verify.index') }}" >Verify</a></li>
                      @endif
                      <li class="sp-menu-item"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
              @endguest
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
