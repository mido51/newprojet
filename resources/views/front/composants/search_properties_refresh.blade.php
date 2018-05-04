
<div class="col-lg-6 col-md-6">
  <div class="property shadow-hover">
  <a href="{{route('getDetailstProperties',$propertie->id)}}" class="property-img">
    <div class="img-fade"></div>
    <div class="property-tag button status">{{$propertie->transaction->transaction_nom}}</div>
    <div class="property-price">${{$propertie->prix}}</div>
    <div class="property-color-bar"></div>
    <img src="{{asset('front/image_projet')}}/{{$propertie->photos->first()->nom_image}}" alt="" />
  </a>
  <div class="property-content">
    <div class="property-title">
    <h4><a href="#">{{$propertie->categorie->categorie_nom}}</a></h4>
    <p class="property-address"><i class="fa fa-map-marker icon"></i>{{$propertie->address_bien}}</p>
    </div>
    <table class="property-details">
    <tr>
      <td><i class="fa fa-bed"></i>{{$propertie->nombre_piece}}</td>
      <td><i class="fa fa-tint"></i>{{$propertie->nombre_bain}}</td>
      <td><i class="fa fa-expand"></i> {{$propertie->surface}}</td>
    </tr>
    </table>
  </div>
  <div class="property-footer">
    <span class="left"><i class="fa fa-calendar-o icon"></i>{{$propertie->created_at->diffForHumans()}}</span>
    <span class="right">
    <a href="#"><i class="fa fa-heart-o icon"></i></a>
    <a href="#"><i class="fa fa-share-alt"></i></a>
    </span>
    <div class="clear"></div>
  </div>
  </div>

</div>
