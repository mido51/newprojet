@extends('back.layout')
@section('css')
<!-- CSS file links -->
<link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('front/assets/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" media="screen">
<link href="{{asset('front/assets/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet">
<link href="{{asset('front/assets/slick-1.6.0/slick.css')}}" rel="stylesheet">
<link href="{{asset('front/assets/chosen-1.6.2/chosen.min.css')}}" rel="stylesheet">
<link href="{{asset('front/css/nouislider.min.css')}}" rel="stylesheet">
<link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]-->

@endsection
@section('main')
<section class="module my-properties">
  <div class="container">

  <div class="row">
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
      </td>
        <td class="property-post-status"><span class="button small alt">Published</span></td>
        <td class="property-date">2/27/2017</td>
        <td class="property-actions">
          <a href="{{route('getDetailstAdminProperties', $propertie->id )}}"><i class="fa fa-eye icon"></i>View</a>
          <a href="{{route('getDeleteAdmintPropertie', $propertie->id)}}"><i class="fa fa-close icon"></i>Delete</a>
        </td>
        </tr>
        @endforeach



          <!-- Fin Les biens utilisateurs -->
      </table>

    </div><!-- end col -->
  </div><!-- end row -->

  </div><!-- end container -->
</section>
@endsection
@section('js')
include('front/composants/foo')
@endsection
