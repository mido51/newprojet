<div class="col-lg-4 col-md-4 sidebar">

  <div class="widget widget-sidebar sidebar-properties advanced-search">
    <h4><span>Advanced Search</span> <img src="{{asset('front/images/divider-half-white.png')}}" alt="" /></h4>
    <div class="widget-content box">
    <form>

      <div class="form-block border">
      <label for="property-status">Ville</label>
      <select id="property-status" class="border">
        @foreach ($locations as $location)
        <option value="{{$propertie->transaction->id}}">{{$location->location_nom}}</option>
        @endforeach
      </select>
      </div>
      <div class="form-block border">
      <label for="property-status">Transaction</label>
      <select id="property-status" class="border">
        @foreach ($transactions as $transaction)
        <option value="{{$propertie->transaction->id}}">{{$transaction->transaction_nom}}</option>
        @endforeach
      </select>
      </div>

      <div class="form-block border">
      <label for="property-type">Type des Biens</label>
      <select id="property-type" class="border">
        @foreach ($categories as $categorie)
        <option value="{{$propertie->transaction->id}}">{{$categorie->categorie_nom}}</option>
        @endforeach
      </select>
      </div>
      <div class="form-block">
      <label>prix</label>
      <input type="number" name="prixmin" class="area-filter border" placeholder="Min" />
      <input type="number" name="prixmax" class="area-filter border" placeholder="Max" />
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
