@extends('master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-6">
            <img class = "detail-img"src="{{ $product['gallery'] }}" alt="">
    </div>
     <div class="col-sm-6">
        <button ><a href="/">Nazad</a></button>
        <h2>{{ $product ['name']}}</h2>
        <h3>Cena : {{ $product['price'] }} rsd</h3>
        <h4>Opis : {{ $product['description']}}</h4>
        <h4>Kategorija : {{ $product['category'] }}</h4>
        <br><br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{ $product['id'] }} id="">
        <button class="btn btn-primary">Dodaj u korpu</button>
        </form>
        <br><br>
        <button class="btn btn-succes">Kupi</button>
        <br><br>
    </div>
</div>
</div>
@endsection