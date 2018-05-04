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
    <div class="col-lg-6 col-md-6">
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
      <table class="table table-bordered table-striped">
	       <caption style="text-align:center;"><strong>Liste des Categories</strong></caption>
	        <tr class="success">
        <td><strong>Nom categorie</strong></td>
        @foreach ($categories as  $categorie)

        <td >
          {{$categorie->categorie_nom}}

        </td>
      @endforeach

        </tr>
        <tr>
          <td><strong>Action</strong></td>
          @foreach ($categories as  $categorie)
        <td>
          <a href="{{route('adminDeleteCategorie',$categorie->id)}}"><i class="fa fa-close icon"></i>Delete</a>
        </td>
          @endforeach

        </tr>
      </table>

    </div><!-- end col -->
  </div><!-- end row -->

  </div><!-- end container -->
</section>
<section class="module my-properties">
  <div class="container">

  <div class="row">
    <div class="col-lg-6 col-md-6">
      @if (session('sta'))
        <div class="alert alert-success">
            {{ session('sta') }}
        </div>
      @endif
      <table class="table table-bordered table-striped">
	       <caption style="text-align:center;"><strong>Liste des Transaction</strong></caption>
	        <tr class="success">
        <td><strong>Nom Transaction</strong></td>
        @foreach ($transactions as  $transaction)

        <td >
          {{$transaction->transaction_nom}}

        </td>
      @endforeach

        </tr>
        <tr>
          <td><strong>Action</strong></td>
          @foreach ($transactions as  $transaction)
        <td  >
          <a href="{{route('adminDeleteTransaction',$transaction->id)}}"><i class="fa fa-close icon"></i>Delete</a>
        </td>
          @endforeach

        </tr>
      </table>

    </div><!-- end col -->
  </div><!-- end row -->

  </div><!-- end container -->
</section>
<section class="module my-properties">
  <div class="container">

  <div class="row">
    <div class="col-lg-6 col-md-6">
      @if (session('statu'))
        <div class="alert alert-success">
            {{ session('statu') }}
        </div>
      @endif
      <table class="table table-bordered table-striped">
	       <caption style="text-align:center;"><strong>Liste des Locations</strong></caption>
	        <tr class="success">
        <td><strong>Nom Location</strong></td>
        @foreach ($locations as  $location)

        <td >
          {{$location->location_nom}}

        </td>
      @endforeach

        </tr>
        <tr>
          <td><strong>Action</strong></td>
          @foreach ($locations as  $location)
        <td  >
          <a href="{{route('adminDeleteLocation',$location->id)}}"><i class="fa fa-close icon"></i>Delete</a>
        </td>
          @endforeach

        </tr>
      </table>

    </div><!-- end col -->
  </div><!-- end row -->

  </div><!-- end container -->
</section>
@endsection
