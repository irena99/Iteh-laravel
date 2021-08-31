@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
      <div class="tranding-wrapper">
        <h4>Moje porudžbine</h4>
        @foreach ($orders as $item)
        <div class="row searched-item cart-list-devider">
        <div class="col-sm-3">
            <a href="detail/{{ $item->id }}">
                <img class ="trending-image" src="{{ $item->gallery}}" >
                </a>
        </div>
        <div class="col-sm-3">
                <div class="">
                  <h2>Naziv : {{ $item->name }}</h2>
                  <h5>Status porudžbine : {{ $item->status }}</h5>
                  <h5>Adresa : {{ $item->address }}</h5>
                  <h5>Status isplate : {{ $item->payment_status}}</h5>
                  <h5>Način plaćanja : {{ $item->payment_method }}</h5>
                </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>
</div>
@endsection