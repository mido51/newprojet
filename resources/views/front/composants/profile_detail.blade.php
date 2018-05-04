<div class="col-lg-3 col-md-3 sidebar-left">
  <div class="widget member-card">
    <div class="member-card-header">
      <a href="#" class="member-card-avatar"><img src="{{asset('front/avatar/')}}{{'/'}}{{Auth()->User()->avatar}}" alt="" /></a>
      <h3>{{Auth()->User()->nom}} {{Auth()->User()->prenom }}</h3>
      <p><i class="fa fa-envelope icon"></i>{{Auth()->User()->email}}</p>
    </div>
    <div class="member-card-content">
      <img class="hex" src="{{asset('front/images/hexagon.png')}}" alt="" />
      <ul>
        <li class="active"><a href="{{route('getProfilUser')}}"><i class="fa fa-user icon"></i>Profile</a></li>
        <li><a href="{{route('getPropertiesClient')}}"><i class="fa fa-home icon"></i>Mes Biens</a></li>
        <li><a href="{{route('getAjouterBien')}}"><i class="fa fa-plus icon"></i>Ajouter Bien</a></li>
        <li><a href="{{route('getLogout')}}"><i class="fa fa-reply icon"></i>Logout</a></li>
      </ul>
    </div>
  </div>
</div>
