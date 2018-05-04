<!DOCTYPE html>
<html lang="en">


<head>
  @include('front/composants/head')
</head>
<body>

<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <form method="post" action="{{route('postLoginAdmin')}}" class="login-form">
          @csrf
          <div class="form-block">
            <label>Email</label>
            <input class="border" type="text" name="email" />
          </div>
          <div class="form-block">
            <label>Password</label>
            <input class="border" type="password" name="password" />
          </div>
          <div class="form-block">
            <label><input type="checkbox" name="remember" />Remember Me</label><br/>
          </div>
          <div class="form-block">
            <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Login</button>
          </div>
          <div class="divider"></div>
          <p class="note"><a href="#">I don't remember my password.</a> </p>
        </form>
      </div>
    </div><!-- end row -->

  </div>
</section>

<!-- JavaScript file links -->
@include('front/composants/foo')

</body>


</html>
