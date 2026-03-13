<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ !empty($meta_title) ? $meta_title : '' }}</title>
  @if (!empty($meta_keywords))
    <meta content="{{ $meta_keywords }}" name="keywords" />
  @endif
  @if (!empty($meta_description))
    <meta content="{{ $meta_description }}" name="description" />
  @endif

  @php
    //$getHeaderSetting = App\Models\SettingModel::getSingle();
  @endphp
  <link href="" rel="icon" type="image/jpg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Create an Account</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Enter your personal details to create account</p>

      @include('_message')

      <form action="" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="text" class="form-control" required name="name" value="{{ old('name') }}" placeholder="Your Name" required>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div style="color: red;">{{ $errors->first('name') }}</div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" required name="email" value="{{ old('email') }}" placeholder="Your Email" required>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div style="color: red;">{{ $errors->first('email') }}</div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div style="color: red;">{{ $errors->first('password') }}</div>

        <div class="input-group mb-3">

          <div class="icheck-primary">
              <input type="checkbox" id="acceptTerms" name="terms" required>
              <label for="acceptTerms">
                I agree and accept the <a href="{{ url('terms-conditions') }}">terms and conditions</a>
              </label>
            </div>
        
        
        </div>

        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Create Account</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->
      
      <p class="mb-1">
        Already have an account? <a href="{{ url('login') }}">Login</a>
      </p>
    
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
