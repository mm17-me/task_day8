<div class="hero_bg_box">
      <div class="img-box">
        <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
              {{ __('messages.siteTitle') }}
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('homePage') }}">{{ __('messages.home_navbar') }}<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}"> {{ __('messages.about_navbar') }}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('service') }}"> {{ __('messages.service_navbar') }} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('guard') }}"> {{ __('messages.guards_navbar') }} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contactUs') }}">{{ __('messages.contact_navbar') }}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
                
                <li class="nav-item">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">عربي</a>    
                </li>
             
                <!-- <li class="nav-item"> 
                <select name="language-picker-select" id="language-picker-select">
                  <option value="{{ LaravelLocalization::getLocalizedURL('en') }}">English</option>
                  <option value="{{ LaravelLocalization::getLocalizedURL('ar') }}">عربي</option>
                </select>

                </li> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>