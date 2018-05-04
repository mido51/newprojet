<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rypecreative.com/homely/property-listing-grid-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:28:14 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | Properties Grid Sidebar</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@include('front/composants/head')
</head>
<body>

@include('front/composants/header_element')

<section class="subheader subheader-listing-sidebar">
  <div class="container">
    <h1>List Bien</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Properties</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">

	<div class="row">
		<div class="col-lg-8 col-md-8">

			<div class="property-listing-header">
				<span class="property-count left">8 properties found</span>
				<form action=""  class="right">

					<select name="sort_by" id ="onchange"  >
            <option><a href="{{route('test')}}">Tout</a></option>
						<option value="date_desc">New to Old</option>
						<option value="date_asc">Old to New</option>
						<option value="price_desc">Price (High to Low)</option>
						<option value="price_asc">Price (Low to High)</option>
					</select>
				</form>
				<div class="property-layout-toggle right">
					<a href="property-listing-grid-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-th-large"></i></a>
					<a href="property-listing-row-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-bars"></i></a>
				</div>
				<div class="clear"></div>

			</div><!-- end property listing header -->


			<div class="row">

      <div id='resultat'>
  @foreach ($properties as $propertie)

          @include('front/composants/search_properties_refresh')

@endforeach
      </div>

			</div><!-- end row -->

			<div class="pagination">
		{{ $properties->links() }}
				<div class="clear"></div>
			</div>

		</div><!-- end listing -->
    <div class="col-lg-4 col-md-4 sidebar">

      <div class="widget widget-sidebar sidebar-properties advanced-search">
        <h4><span>Advanced Search</span> <img src="{{asset('front/images/divider-half-white.png')}}" alt="" /></h4>
        <div class="widget-content box">
        <form method="post" action = "{{route('search')}}">

            @csrf
          <div class="form-block border">
          <label for="location">Ville</label>
          <select id="location" class="border">
            @foreach ($locations as $location)
            <option value="{{$location->id}}">{{$location->location_nom}}</option>
            @endforeach
          </select>
          </div>
          <div class="form-block border">
          <label for="property-status">Transaction</label>
          <select id="transaction" class="border">
            @foreach ($transactions as $transaction)
            <option value="{{$propertie->transaction->id}}">{{$transaction->transaction_nom}}</option>
            @endforeach
          </select>
          </div>

          <div class="form-block border">
          <label for="categorie">Type des Biens</label>
          <select id="categorie" class="border">
            @foreach ($categories as $categorie)
            <option value="{{$propertie->transaction->id}}">{{$categorie->categorie_nom}}</option>
            @endforeach
          </select>
          </div>
          <div class="form-block">
          <label>prix</label>
          <input type="number" name="prixmin" class="area-filter border"  id='prixmin' placeholder="Min" />
          <input type="number" name="prixmax" class="area-filter border" id='prixmax' placeholder="Max" />
          <div class="clear"></div>
          </div>
          <div class="form-block">
          <input type="submit" class="button" value="Find Properties" />
          </div>
        </form>
        </div><!-- end widget content -->
      </div><!-- end widget -->

      <div class="widget widget-sidebar recent-properties">
        <h4><span>Recent Properties</span> <img src="{{asset('front/images/divider-half.png')}}" alt="" /></h4>
        <div class="widget-content">
          @foreach ($lastproperties as $lastpropertie)
            <div class="recent-property">
              <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="{{asset('front/image_projet')}}/{{$lastpropertie->photos->first()->nom_image}}" alt="" /></a></div>
              <div class="col-lg-8 col-md-8 col-sm-8">
                <h5><a href="#">Beautiful Waterfront Condo</a></h5>
                <p><strong>$ {{$lastpropertie->prix}}</p>
              </div>
              </div>
            </div>
          @endforeach




        </div><!-- end widget content -->
      </div><!-- end widget -->

    </div><!-- end sidebar -->


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

<!-- Mirrored from rypecreative.com/homely/property-listing-grid-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jul 2017 10:28:15 GMT -->
</html>
<script>

$(document).ready(function(){
$("#onchange").change(function(){
var search=$(this).val();
var searchby = {search};
$('#resultat').html(' ');
$.ajax
({
type: "GET",
url: "{{route('test1')}}",
data: searchby,
success: function(properties)
{ console.log(properties);

  $.each(properties,function(i,value){
$('#resultat').append('<div class="col-lg-6 col-md-6"><div class="property shadow-hover"><a href='+value.id+' class="property-img"><div class="img-fade"></div><div class="property-tag button status"></div><div class="property-price">Prix:'+ value.prix +'DT</div><div class="property-color-bar"></div><img src={{asset("front/image_projet")}}/'+value.image+' alt="" /></a><div class="property-content"><div class="property-title"><h4><a href="#">'+value.titre_bien+'</a></h4><p class="property-address"><i class="fa fa-map-marker icon"></i>'+value.address_bien+'</p></div><table class="property-details"><tr><td><i class="fa"></i> '+value.nombre_piece +' Piece</td><td><i class="fa"></i> '+value.garages+' garages</td></tr></table></div><div class="property-footer"><span class="left"><i class="fa fa-calendar-o icon"></i>'+value.created_at+'</span><span class="right"><a href="#"><i class="fa fa-heart-o icon"></i></a></span><div class="clear"></div></div></div></div><!-- end row -->');
});


 }

});

    });
});
</script>
