@extends('layouts.layout')
@section('content')
    <br>
    <div class="container">
      <h2>Update Product</h2>
      <br>
      <form action="/master_catalog/{{$katalog->id_produk}}/update" method="POST" enctype="multipart/form-data" class="was-validated">
        {{csrf_field()}}  
        <div class="form-group">
          <label for="nama_produk">Product Name :</label>
          <input type="text" class="form-control" id="nama_produk" placeholder="" name="nama_produk" value="{{$katalog->nama_produk}}" required>
        </div>
        <div class="form-group">
          <label for="harga">Price :</label>
          <input type="text" class="form-control" id="harga" placeholder="" name="harga" value="{{$katalog->harga}}" required>
        </div>
        <div class="form-group">
          <label for="deskripsi_produk">Product Description :</label>
            <textarea class="form-control" id="deskripsi_produk" placeholder="" name="deskripsi_produk" required>{{$katalog->deskripsi_produk}}</textarea>
        </div>
        <div class="form-group">
          <label for="gambar_produk">Image :</label>
            <input type="file" id="gambar_produk" name="gambar_produk" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>


@stop
