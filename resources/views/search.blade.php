@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-4">
      <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
    <div class="tranding-wrapper">
          <h2>Rezultati pretrage</h2>
          <br>
          @foreach ($products as $item)
          <div class="searched-item">
            <a href="detail/{{ $item['id'] }}">
            <img class ="trending-image" src="{{ $item ['gallery']}}" >
            <div class="">
              <h4>{{ $item['name'] }}</h4>
              <h5>{{ $item['description'] }}</h5>
              <br>
            </div>
            </a>
        </div>
        @endforeach
    </div>
    </div>
    
      

</div>
@endsection