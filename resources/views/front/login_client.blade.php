
<!DOCTYPE html>
<html lang="en">


<head>
  @include('front/composants/head')
</head>
<body>

@include('front/composants/header_element')

<section class="subheader">
  <div class="container">
    <h1>Login</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Login</a></div>
    <div class="clear"></div>
  </div>
</section>

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
        <p>Vous n'avez pas de compte? <strong><a href="{{route('getInscriptionClient')}}">Inscrivez-vous ici.</a></strong></p>
        <form method="post" action="{{route('postLoginClient')}}" class="login-form">
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

<section class="module cta newsletter">
  <div class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7">
			<h3>Sign up for our <strong>newsletter.</strong></h3>
			<p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</div>
		<div class="col-lg-5 col-md-5">
			<form method="post" id="newsletter-form" class="newsletter-form">
				<input type="email" placeholder="Your email..." />
				<button type="submit" form="newsletter-form"><i class="fa fa-send"></i></button>
			</form>
		</div>
	</div><!-- end row -->
  </div><!-- end container -->
</section>

@include('front/composants/footer')
<!-- JavaScript file links -->
@include('front/composants/foo')

</body>


</html>
