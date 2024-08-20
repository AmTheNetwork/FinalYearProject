@extends('layouts.main')
@section('content')
<body>
    <!-- https://dribbble.com/shots/15392711-Dashboard-Login-Sign-Up/-->
<style>
    .swiper-container {
    width: 100%; /* or any specific width */
    height: 300px; /* or the height you want for your slides */
    overflow: hidden; /* Ensures anything outside this container is not shown */
}

</style>
<div class="login-container">
    <div class="login-form">
      <div class="login-form-inner">
        <div class="logo"><svg height="512" viewBox="0 0 192 192" width="512" xmlns="http://www.w3.org/2000/svg">
            <path d="m155.109 74.028a4 4 0 0 0 -3.48-2.028h-52.4l8.785-67.123a4.023 4.023 0 0 0 -7.373-2.614l-63.724 111.642a4 4 0 0 0 3.407 6.095h51.617l-6.962 67.224a4.024 4.024 0 0 0 7.411 2.461l62.671-111.63a4 4 0 0 0 .048-4.027z" />
          </svg></div>
        <h1>Login</h1>
        <p class="body-text">See your growth and get consulting support!</p>
  
        <br />
        <hr>
        <br /> 

        <form method="POST" action="{{ route('login') }}">
     @csrf
        <div class="login-form-group">
          <label for="email">Email <span class="required-star">*</span></label>
          <input  name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email">

          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="login-form-group">
          <label for="pwd">Password <span class="required-star">*</span></label>
          <input autocomplete="off" type="password"   name="password" required autocomplete="current-password" id="pwd">

          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
  
        <div class="login-form-group single-row">
          <div class="custom-check">
            <input autocomplete="off" type="checkbox" checked id="remember"><label for="remember">Remember me</label>
          </div>
  
          <a href="#" class="link forgot-link">Forgot Password ?</a>
        </div>
  
        <button  type="submit" class="rounded-button login-cta">Login</button>
  
      </div>
  
    </div>
    <div class="onboarding">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide color-1">
            <div class="slide-image">
              <img src="images/refr.jpg" loading="lazy" alt="" />
            </div>
            <div class="slide-content">
              <h2>Turn your ideas into reality.</h2>
              <p>Consistent quality and eperience across all platform and devices</p>
            </div>
          </div>
          <div class="swiper-slide color-1">
            <div class="slide-image">
              <img src="images/rfrw.jpg" loading="lazy" alt="" />
            </div>
            <div class="slide-content">
              <h2>Turn your ideas into reality.</h2>
              <p>Consistent quality and eperience across all platform and devices</p>
            </div>
          </div>
  
          <div class="swiper-slide color-1">
            <div class="slide-image">
              <img src="images/re.jpg" loading="lazy" alt="" />
            </div>
            <div class="slide-content">
              <h2>Turn your ideas into reality.</h2>
              <p>Consistent quality and eperience across all platform and devices</p>
            </div>
          </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</body>
</html>

@endsection


