@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
      <div class="tranding-wrapper">
        <h2>Korpa</h2>
        <br>
        
        @foreach ($products as $item)
        <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
            <a href="detail/{{ $item->id }}">
                <img class ="trending-image" src="{{ $item->gallery}}" >
                </a>
        </div>
        <div class="col-sm-3">
                <div class="">
                  <h4>{{ $item->name }}</h4>
                  <h5>{{ $item->description }}</h5>
                </div>
        </div>
        <div class="col-sm-3">
          <a href="/removeCart/{{ $item->cart_id }}"class="btn btn-warning">Ukloni</a>
        </div>
      </div>
      @endforeach
    </div>
    <a class="btn btn-succes" href="ordernow">Poruči</a> <br><br>
    </div>
</div>
@endsection