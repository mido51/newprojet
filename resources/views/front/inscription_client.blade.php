<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rypecreative.com/homely/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:28:12 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | Register</title>

@include('front/composants/head')
</head>
<body>

@include('front/composants/header_element')

<section class="subheader">
  <div class="container">
    <h1>Creéz Un Compte</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Register</a></div>
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
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <p>Vous avez déja un compte ? <strong><a href="{{route('getLoginClient')}}">Connectez Vous.</a></strong></p>
        <form method="POST" action="{{route('postInscriptionClient')}}" class="login-form">
          @csrf
          <div class="form-block">
            <label>Nom</label>
            <input class="border" type="text" name="nom" value="{{old('nom')}}" placeholder="Votre Nom" />
          </div>

          <div class="form-block">
            <label>Prénom</label>
            <input class="border" type="text" name="prenom" value="{{old('prenom')}}" placeholder="Votre Prénom" />
          </div>

          <div class="form-block">
            <label>Email</label>
            <input class="border" type="email" name="email" value="{{old('email')}}" placeholder="Votre Email" />
          </div>
          <div class="form-block">
            <label>Téléphone</label>
            <input class="border" type="text" name="telephone" value="{{old('telephone')}}" placeholder="Votre Téléphone" />
          </div>
          <div class="form-block">
            <label>Adresse</label>
            <input class="border" type="text" name="adresse" value="{{old('adresse')}}" placeholder="Votre Adresse" />
          </div>
          <div class="form-block">
            <label>Mot de passe</label>
            <input class="border" type="password" name="password" />
          </div>
          <div class="form-block">
            <label>Confirmez Votre Mot de Passe</label>
            <input class="border" type="password" name="password_confirmation" />
          </div>
          <div class="form-block">
            <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Créer Mon Compte</button>
          </div>
          <div class="divider"></div>
          <p class="note">En cliquant sur le bouton "S'inscrire", vous acceptez notre <a href="#"> Conditions générales</a></p>
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

<!-- Mirrored from rypecreative.com/homely/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:28:12 GMT -->
</html>
