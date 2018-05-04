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
        <th>Nom,Prenom</th>
        <th>Date Inscription</th>
        <th>Last Login</th>
        <th>Action</th>
        </tr>

      <!-- Les biens utilisateurs -->

        @foreach ($users as  $user)

        <tr>
        <td class="property-img">
       <img src="{{asset('front/avatar')}}/{{$user->avatar}}" alt="" /></a></td>

       </td>
       <td class="property-title">
         <a href="#">{{$user->nom}},{{$user->prenom}}</a><br>
         <a href="#">{{$user->id}}</a><br>
        <p class="property-address"><i class="fa fa-envelope-o"></i> {{$user->email}}<br>
        <i class="fa fa-phone" aria-hidden="true"></i> {{$user->telephone}}</p>
        <p class="property-address"><i class="fa fa-map-marker icon"></i>{{$user->adresse}}</p>
      </td>
      <td class="property-date">{{$user->created_at->diffForHumans()}}</td>
      <td class="property-date">{{$user->updated_at->diffForHumans()}}</td>
      <td class="property-actions">
      <a href="{{route('getDeleteAdminUser',$user->id)}}"><i class="fa fa-close icon"></i>Delete</a>
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
@section('css')
include('front/composants/foo')
@endsection
