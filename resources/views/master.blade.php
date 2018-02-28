<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- head -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Bitcoin Joomla template" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  @if(Route::currentRouteName() == 'crypto_home')
  @include('partials.links.index')
  @elseif(Route::currentRouteName() == 'crypto_about')
  @include('partials.links.about')
  @elseif(Route::currentRouteName() == 'crypto_contact')
  @include('partials.links.contact')
  @elseif(Route::currentRouteName() == 'crypto_services')
  @include('partials.links.services')
  @elseif(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' || Route::currentRouteName() == 'Verify.index')
  @include('partials.links.login')
  @endif
  <link rel="stylesheet" href="{{asset('css/may.css')}}" type="text/css">
</head>
@if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' || Route::currentRouteName() == 'Verify.index')
<body class="site com-users view-login no-layout no-task itemid-109 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">
@else
<body class="site com-sppagebuilder view-page no-layout no-task itemid-101 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">
@endif
  <div class="body-wrapper">
    <div class="body-innerwrapper">
      @include('partials.header')

      @yield('content')

      @include('partials.footer')

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
