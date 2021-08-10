@extends('layouts.layout')
@section('content')
    <br>
    <div class="container">
      <h2>Buy Product</h2>
      <br>
      <form action="/store/{{Route::input('id_produk')}}" method="POST" class="was-validated">
        {{csrf_field()}}  
        <div class="form-group">
          <label for="nama_pembeli">Nama Pembeli :</label>
          <input type="text" class="form-control" id="nama_pembeli" placeholder="" name="nama_pembeli" required>
        </div>
        <div class="form-group">
          <label for="email_pembeli">Email Pembeli :</label>
          <input type="text" class="form-control" id="email_pembeli" placeholder="" name="email_pembeli" required>
        </div>
        <div class="form-group">
          <label for="tlp_pembeli">Telepon Pembeli :</label>
          <input type="text" class="form-control" id="tlp_pembeli" placeholder="" name="tlp_pembeli" required>
        </div>
        <div class="form-group">
          <label for="alamat_pembeli">Alamat Pembeli :</label>
            <textarea class="form-control" id="alamat_pembeli" name="alamat_pembeli" required></textarea>
        </div>
        <div class="form-group">
          <label for="jumlah_beli">Jumlah Product :</label>
          <input type="number" class="form-control" id="jumlah_beli" placeholder="" name="jumlah_beli" style="width:150px;" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
@endsection