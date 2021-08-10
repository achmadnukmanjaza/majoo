@extends('layouts.layout')
@section('content')
    <br>
    <div class="container">
      <h2>Input Product</h2>
      <br>
      <form action="/master_catalog/store" method="POST" enctype="multipart/form-data" class="was-validated">
        {{csrf_field()}}  
        <div class="form-group">
          <label for="nama_produk">Product Name :</label>
          <input type="text" class="form-control" id="nama_produk" placeholder="" name="nama_produk" required>
        </div>
        <div class="form-group">
          <label for="harga">Price :</label>
          <input type="number" class="form-control" id="harga" placeholder="" name="harga" required>
        </div>
        <div class="form-group">
          <label for="deskripsi_produk">Product Description :</label>
            <textarea class="form-control" id="deskripsi_produk" placeholder="" name="deskripsi_produk" required></textarea>
        </div>
        <div class="form-group">
          <label for="gambar_produk">Image :</label>
            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>


@stop