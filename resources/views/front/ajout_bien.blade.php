<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | Submit Property</title>

@include('front/composants/head')
</head>
<body>

@include('front/composants/header_element')
<section class="subheader">
  <div class="container">
    <h1>Ajouter Votre Bien</h1>
    <div class="breadcrumb right">Acceuil <i class="fa fa-angle-right"></i> <a href="#" class="current">Ajouter Votre Bien</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module property-submit">
  <div class="container">

    <div class="row">
    <div class="col-lg-10 col-lg-offset-1">


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
    <form class="multi-page-form" method="post" action = {{route('postAjouterBien')}} enctype="multipart/form-data" >
      @csrf
      <div class="center">
        <div class="form-nav">

          <div class="clear"></div>
        </div>
      </div>

      <div class="multi-page-form-content active">


        <table class="property-submit-title">
          <tr>
            <td><span class="property-submit-num">-</span></td>
            <td>
              <h4>Complétez Ces Informations</h4>
            </td>
          </tr>
        </table>



            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Votre Nom*</label>
                  <input class="border required" type="text" name="nom" value="{{Auth()->User()->nom}}"  />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Votre Prénom*</label>
                  <input class="border" type="text" name="prenom" value="{{Auth()->User()->prenom}}" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Votre Email*</label>
                  <input class="border required" type="text" name="email" value="{{Auth()->User()->email}}" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Votre Téléphone*</label>
                  <input class="border" type="text" value="{{Auth()->User()->telephone}}" name="telephone" />
                </div>
              </div>
            </div>
            <div class="form-block border">
                  <label>Type Bien</label>
                  <select name="categorie_id" class="border">
                    <option>Choisir</option>

                  @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->categorie_nom}}</option>
                  @endforeach;
                   </select>
            </div>
            <div class="form-block border">
                  <label>Location</label>
                  <select name="location_id" class="border">
                    <option>Choisir</option>
                    @foreach ($locations as $location)
                      <option value="{{$location->id}}">{{$location->location_nom}}</option>
                    @endforeach;
                  </select>
            </div>
            <div class="form-block border">
                  <label>Transaction</label>
                  <select name="transaction_id" class="border">
                    <option>Choisir</option>
                    @foreach ($transactions as $transaction)
                      <option value="{{$transaction->id}}">{{$transaction->transaction_nom}}</option>
                    @endforeach;
                  </select>
            </div>
            <div class="form-block">
              <label>Titre du Bien*</label>
              <input class="border required" type="text" name="titre_bien" />
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Prix*</label>
                  <input class="border required" type="text" name="prix" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Surface*</label>
                  <input class="border" type="text" name="surface" />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Nombre de Pièces</label>
                  <input class="border" type="text" name="nombre_piece" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Nombre Salles de Bain</label>
                  <input class="border" type="text" name="nombre_bain" />
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-block">
                  <label>Garages</label>
                  <input class="border" type="text" name="garages" />
                </div>
              </div>
            </div>
            <div class="form-block">
              <label>Address</label>
              <textarea class="border" name="address_bien" required=""></textarea>
            </div>
            <div class="form-block">
              <label>Description</label>
              <textarea class="border" name="description"></textarea>
            </div>
            <div class="form-block gallery">
          <label>Gallery Images</label>
          <div class="additional-img-container">
                <table>
                    <tr>
                    <td>
                    <div class="media-uploader-additional-img">
                    <input type="file" class="additional_img" name="additional_img1" value="" />
                    <span class="delete-additional-img right"><i class="fa fa-trash"></i> Supprimer</span>
                    </div>
                    </td>
                    </tr>
                </table>
            </div>
            <span class="button small add-additional-img">Ajouter Image</span>
        </div>

            <div class="form-block">
              <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Ajouter Votre Bien</button>
            </div>
            <div class="clear"></div>

      </div><!-- end basic info -->






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

</html>
