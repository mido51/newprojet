<header class="header-default">

  <div class="top-bar">
    <div class="container">
        <div class="top-bar-left left">
          <ul class="top-bar-item right social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="top-bar-right right">
          @if (Auth::check()&&Auth()->User()->type_id == '2'){
            <a href="{{route('getLogout')}}" class="top-bar-item"><i class="fa fa-sign-in icon"></i>Deconnexion</a>
            <a href="{{route('getProfilUser')}}" class="top-bar-item"><i class="fa fa-user"></i> {{Auth()->User()->nom}}</a>
          }@else{
          <a href="{{route('postLoginClient')}}" class="top-bar-item"><i class="fa fa-sign-in icon"></i>se connecter</a>
          <a href="{{route('getInscriptionClient')}}" class="top-bar-item"><i class="fa fa-user-plus icon"></i>S'inscrire</a>
        }@endif
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
  </div>

  <div class="container">

    <!-- navbar header -->


    <!-- main menu -->
    <div class="navbar-collapse collapse">
      <div class="main-menu-wrap">
        <div class="container-fixed">



        <div class="member-actions right">

            <a  href="{{route('getAjouterBien')}}" class="button small alt button-icon"><i class="fa fa-plus"></i>Déposer une annonce</a>
        </div>

              @if (Auth::check()&&Auth()->User()->type_id == '2')
        <div class="member-actions right">

            <a href="{{route('getLogout')}}" class="button small alt button-icon"></i>Déconnexion</a>
        </div>

              @else
              <div class="member-actions right">

                  <a href="{{route('getLoginClient')}}" class="button small alt button-icon"></i>Connecter</a>
              </div>
              @endif

        <ul class="nav navbar-nav right">
          <li class="current-menu-item">
            <a href="{{route('index')}}">Accueil</a>
          </li>
          <li >
            <a href="{{route('getListProperties')}}">Propriétés</a>
          </li>
          <li>
            <a href="agent-listing-grid.html">Agents</a>
          </li>
          @if (Auth::check()&&Auth()->User()->type_id == '2')
          <li>
            <a href="{{route('getProfilUser')}}">Profil</a>
          </li>
          @endif
          <li class="menu-item-has-children">
            <a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="about.html">À propos</a></li>
              <li><a href="{{asset('faq')}}">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="login.html">Se connecter</a></li>
              <li><a href="register.html">s'inscrire</a></li>
			  <li class="menu-item-has-children">
                <a href="user-my-properties.html">User Pages</a>
                <ul class="sub-menu">
				  <li><a href="{{route('getProfilUser')}}">User Profile</a></li>
                  <li><a href="user-my-properties.html">My Properties</a></li>
				  <li><a href="user-favorite-properties.html">Favorited Properties</a></li>
                  <li><a href="user-submit-property.html">Ajoutez votre bien                                                                                                                                    </a></li>
                </ul>
              </li>
              <li><a href="elements.html">Elements</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="clear"></div>

      </div>

      </div><!-- end main menu wrap -->
    </div><!-- end navbar collaspe -->

  </div><!-- end container -->
</header>
