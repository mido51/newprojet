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
          <a href="login.html" class="top-bar-item"><i class="fa fa-sign-in icon"></i>se connecter</a>
          <a href="register.html" class="top-bar-item"><i class="fa fa-user-plus icon"></i>S'inscrire</a>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
  </div>

  <div class="container">

    <!-- navbar header -->
    <div class="navbar-header">

      <div class="header-details">
        <div class="header-item header-search left">
          <table>
              <tr>
              <td><i class="fa fa-search"></i></td>
              <td class="header-item-text">
                <form class="search-form">
                  <input type="text" placeholder="Recherche..." />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td><i class="fa fa-phone"></i></td>
              <td class="header-item-text">
                Contactez-nous<br/>
                <span>(+200) 123 456 5665</span>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td><i class="fa fa-envelope"></i></td>
              <td class="header-item-text">
                Écrivez-nous<br/>
                <span>hello@homely.com</span>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td>
          <a  @if (Auth::check()) href="{{asset('ajouter_bien')}}"

              @else href="{{asset('login_client')}}"
              @endif class="button small alt button-icon"><i class="fa fa-plus"></i>Déposer une annonce</a>

              </td>
            </tr>
          </table>
        </div>

        <div class="clear"></div>
      </div>

      <a class="navbar-brand" href="index-2.html"><img src="{{asset('front/images/logo.png')}}" alt="Homely" /></a>

      <!-- nav toggle -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- main menu -->
    <div class="navbar-collapse collapse">
      <div class="main-menu-wrap">
        <div class="container-fixed">



        <div class="member-actions right">

           <a @if (Auth::check()) href="{{asset('profil_client')}}"
              @else href="{{asset('login_client')}}"
              @endif class="button small ">Espace client</a>
        </div>

              @if (Auth::check())
        <div class="member-actions right">

            <a href="{{asset('logout_client')}}" class="button small"></i>Déconnexion</a>
        </div>
              @endif

        <ul class="nav navbar-nav right">
          <li class="menu-item-has-children current-menu-item">
            <a href="{{route('accueil')}}">Accueil</a>
            <ul class="sub-menu">
              <!--<li><a href="index-2.html">Simple Search</a></li>
              <li><a href="index-slider-1.html">Slider Style 1</a></li>
              <li><a href="index-slider-2.html">Slider Style 2</a></li>
			  <li><a href="index-slider-3.html">Slider Style 3</a></li>
              <li><a href="index-map.html">Google Maps Style 1</a></li>
              <li><a href="index-map-horizontal.html">Google Maps Style 2</a></li>
              <li class="menu-item-has-children">
                <a href="index-2.html">Headers</a>-->
                <ul class="sub-menu">
                  <li><a href="index-2.html">Header Default</a></li>
                  <li><a href="index-header-classic.html">Header Classic</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="property-listing-grid.html">Propriétés</a>
            <ul class="sub-menu">
              <li><a href="property-listing-grid.html">Listing Grid</a></li>
              <li><a href="property-listing-grid-sidebar.html">Listing Grid Sidebar</a></li>
              <li><a href="property-listing-row.html">Listing Row</a></li>
              <li><a href="property-listing-row-sidebar.html">Listing Row Sidebar</a></li>
              <li><a href="property-listing-map.html">Listing Map</a></li>
              <li class="menu-item-has-children">
                <a href="property-single.html">Property Single</a>
                <ul class="sub-menu">
                  <li><a href="property-single.html">Property Single Classic</a></li>
                  <li><a href="property-single-full.html">Property Single Full Width</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="agent-listing-grid.html">Agents</a>
            <ul class="sub-menu">
              <li><a href="agent-listing-grid.html">Agent Listing Grid</a></li>
              <li><a href="agent-listing-grid-sidebar.html">Agent Listing Grid Sidebar</a></li>
              <li><a href="agent-listing-row.html">Agent Listing Row</a></li>
              <li><a href="agent-listing-row-sidebar.html">Agent Listing Row Sidebar</a></li>
              <li><a href="agent-single.html">Agent Single</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="blog-right-sidebar.html">Blog</a>
            <ul class="sub-menu">
              <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
              <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
              <li><a href="blog-full-width.html">Blog Full Width</a></li>
              <li><a href="blog-creative.html">Blog Creative</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
            </ul>
          </li>
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
				  <li><a href="user-profile.html">User Profile</a></li>
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
