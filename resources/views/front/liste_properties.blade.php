<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | Properties Row</title>

  <!-- CSS file links -->
  @include('front/composants/head')
</head>
<body>

@include('front/composants/header_element')

<section class="subheader">
  <div class="container">
    <h1>Property Listing Row</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Properties</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">

	<div class="property-listing-header">

		<span class="property-count left">{{$properties->count()}} properties found</span>
		<form action="#" method="get" class="right">
			<select name="sort_by" onchange="this.form.submit();">
				<option value="date_desc">New to Old</option>
				<option value="date_asc">Old to New</option>
				<option value="price_desc">Price (High to Low)</option>
				<option value="price_asc">Price (Low to High)</option>
			</select>
		</form>
		<div class="property-layout-toggle right">
			<a href="property-listing-grid.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a>
			<a href="property-listing-row.html" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
		</div>
		<div class="clear"></div>
	</div><!-- end property listing header -->

@foreach ($properties as $propertie)

  <div class="property property-row shadow-hover">
      <a href="#" class="property-img">
        <div class="img-fade"></div>

          <div class="property-tag button status">{{$propertie->categorie->categorie_nom}}</div>

        <div class="property-price">${{$propertie->prix}} </div>
        <div class="property-color-bar"></div>
        <img src="{{asset('front/image_projet')}}/{{$propertie->photos->first()["nom_image"]}}" alt="" />
      </a>
      <div class="property-content">
        <div class="property-title">
          <h4><a href="#">{{$propertie->titre_bien}}</a></h4>
          <p class="property-address"><i class="fa fa-map-marker icon"></i>{{$propertie->address_bien}}</p>
          <div class="clear"></div>
          <p class="property-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...</p>
        </div>
        <table class="property-details">
          <tr>
            <td><i class="fa fa-bed"></i> {{$propertie->nombre_piece}} Beds </td>
            <td><i class="fa fa-tint"></i> {{$propertie->nombre_bain}} Baths </td>
            <td><i class="fa fa-expand"></i> {{$propertie->surface}} m²</td>
          </tr>
        </table>
      </div>
      <div class="property-footer">
        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
        <span class="right">
          <a href="#"><i class="fa fa-heart-o icon"></i></a>
          <a href="#"><i class="fa fa-share-alt"></i></a>
          <a href="#" class="button button-icon"><i class="fa fa-angle-right"></i>Details</a>
        </span>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
  </div>
@endforeach




	<div class="pagination">
        <div class="center">
            <ul>
              <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
              <li class="current"><a href="#" class="button small grey">1</a></li>
              <li><a href="#" class="button small grey">2</a></li>
              <li><a href="#" class="button small grey">3</a></li>
              <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

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

<!-- Mirrored from rypecreative.com/homely/property-listing-row.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:28:15 GMT -->
</html>
