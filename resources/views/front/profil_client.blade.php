
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rypecreative.com/homely/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:30:46 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | Profile</title>

  <!-- CSS file links -->
@include('front/composants/head')

</head>
<body>

@include('front/composants/header_element')

<section class="subheader">
  <div class="container">
    <h1>Profile</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Profile</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module favorited-properties">
  <div class="container">

	<div class="row">
	@include('front/composants/profile_detail')

		<div class="col-lg-9 col-md-9">
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
			<form method="post" action="{{route('postModifierProfil')}}" enctype="multipart/form-data" >
        @csrf
				<div class="row">
					<div class="col-lg-5">
						<div class="edit-avatar">
							<img class="profile-avatar" src="{{asset('front/avatar')}}{{'/'}}{{Auth()->User()->avatar}}" alt="" />
							<a href="" type="file" class="button small">Changer Avatar</a>
              <label for="">Changer Avatar</label>
              <input name="file" type="file" style=" padding: 5px 25px 5px 25px; color: white;border: none;background-color: #48a0dc;display: inline-block;transition: all 0.2s linear;"  name="avatar" />
						</div>
					</div>
					<div class="col-lg-7">

						<div class="form-block">
							<label>Nom</label>
							<input class="border" type="text" name="nom" value="{{Auth()->User()->nom}}" />
						</div>
            <div class="form-block">
							<label>Prenom</label>
							<input class="border" type="text" name="prenom" value="{{Auth()->User()->prenom}}" />
						</div>
						<div class="form-block">
							<label>Email</label>
							<input class="border" type="text" name="email" value="{{Auth()->User()->email}}" />
						</div>
						<div class="form-block">
							<label>Téléphone</label>
							<input class="border" type="text" name="telephone" value="{{Auth()->User()->telephone}}" />
						</div>
					</div>
				</div><!-- end row -->

				<div class="form-block">
					<label>Adresse</label>
					<textarea class="border" name="adresse">{{Auth()->User()->adresse}}</textarea>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<h4>Changer votre Password</h4>
						<div class="divider"></div>
						<div class="form-block">
							<label>Current Password</label>
							<input class="border" type="password" name="" />
						</div>

						<div class="form-block">
							<label>New Password</label>
							<input class="border" type="password" name="new_pass" />
						</div>

						<div class="form-block">
							<label>Confirm New Password</label>
							<input class="border" type="password" name="new_pass_confirm" />
						</div>
					</div>
				</div><!-- end row -->

				<div class="form-block">
					<button type="submit" class="button button-icon"><i class="fa fa-check"></i>Save Changes</button>
				</div>

			</form>

		</div><!-- end col -->
	</div><!-- end row -->

  </div><!-- end container -->
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

<!-- Mirrored from rypecreative.com/homely/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:30:46 GMT -->
</html>
