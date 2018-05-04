
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | My Properties</title>

  <!-- CSS file links -->
  @include('front/composants/head')
</head>
<body>

  @include('front/composants/header_element')

<section class="subheader">
  <div class="container">
    <h1>My Properties</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">MEs Properties</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module my-properties">
  <div class="container">

	<div class="row">
	@include('front/composants/profile_detail')

		<div class="col-lg-9 col-md-9">
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
			<table class="my-properties-list">
			  <tr>
				<th>Image</th>
				<th>Bien</th>
				<th>Post Status</th>
				<th>Date Created</th>
				<th>Actions</th>
			  </tr>

      <!-- Les biens utilisateurs -->

        @foreach ($properties as  $propertie)

        <tr>

              <td class="property-img"><a href="{{route('getDetailstProperties', $propertie->id )}}"><img src="{{asset('front/image_projet')}}/{{$propertie->photos->first()["nom_image"]}}" alt="" /></a></td>

        <td class="property-title">
          <a href="{{route('getDetailstProperties', $propertie->id )}}">{{$propertie->titre_bien}}</a><br/>
          <p class="property-address"><i class="fa fa-map-marker icon"></i>{{$propertie->address_bien}}</p>
          <p><strong>{{$propertie->prix}}</strong></p>
        </td>
        <td class="property-post-status"><span class="button small alt">Published</span></td>
        <td class="property-date">2/27/2017</td>
        <td class="property-actions">
          <a href="{{route('getDetailstProperties', $propertie->id )}}"><i class="fa fa-eye icon"></i>View</a>
          <a href="{{route('getDeletetPropertie')}}"><i class="fa fa-pencil icon"></i>Edit</a>
          <a href="{{route('getDeletetPropertie', $propertie->id)}}"><i class="fa fa-close icon"></i>Delete</a>
        </td>
        </tr>
        @endforeach



          <!-- Fin Les biens utilisateurs -->
			</table>

			<div class="pagination">
				<div class="center">
				{{ $properties->links() }}
				</div>
				<div class="clear"></div>
			</div>
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
