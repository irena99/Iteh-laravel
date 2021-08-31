@extends('master')
@section("content")


<body>
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4" >
                <form action="register" method ="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ime</label>
                        <input type="text" name ="name"class="form-control" id="exampleInputEmail1" placeholder="Unesite ime">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prezime</label>
                        <input type="text" name ="surname"class="form-control" id="exampleInputEmail1" placeholder="Unesite prezime">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Korisničko ime</label>
                        <input type="text" name ="username"class="form-control" id="exampleInputEmail1" placeholder="Unesite korisničko ime">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" name ="email"class="form-control" id="exampleInputEmail1" placeholder="Unesite email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lozinka</label>
                        <input type="password" name = "password"class="form-control" id="exampleInputPassword1" placeholder="Unesite lozinku">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-default">Registruj se</button>
                    <br>
                </form>
            </div>
        </div>
    </div>  
</body>

@endsection