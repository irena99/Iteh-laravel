@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <td>Cena</td>
                <td>{{ $total }} rsd</td>
              </tr>
              <tr>
                <td>Postarina</td>
                <td>300 rsd</td>
              </tr>
              <tr>
                <td>Ukupna cena</td>
                <td>{{ $total+ 300}} rsd</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderPlace" method="POST">
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Unesite svoju adresu"class="form-control" id="address"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Nacin placanja</label><br>
                  <input type="radio" value="card" name="payment"> Placanje platnom karticom<span></span><br><br>
                  <input type="radio" value="cash" name="payment"> Placanje pouzećem<span></span> <br><br>                  
                </div>
                <button type="submit" class="btn btn-success">Poruči</button>
              </form>
          </div>
    </div>
</div>
@endsection