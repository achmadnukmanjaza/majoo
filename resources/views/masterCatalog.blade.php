@extends('layouts.layout')
@section('content')

    <style>
        h1{
            text-align:left;
            padding-top:5%;
            padding-left:5%;
            padding-right:5%;
        }
        .text p{
            font-weight:bold;
        }
        .button button{
            bottom: 0%;
            text-align: bottom;
        }
        
    </style>
    
    <br>
    @if (session('alert'))
        <div class="alert alert-success" role="alert">
            {{ session('alert') }}
        </div>
    @endif
    <div class="container">
    <div class="row">
        <div class="col-md" style="text-align:left;">
            <h1>Master Catalog</h1>
        </div>
        <div class="col-md" style="text-align:right;justify-content: center;">
            <a href="/master_catalog/create/"><button class="btn btn-success">Input Product</button></a>
        </div>
    </div>
    <br>

        <div class="table-responsive">
        <table class="table" width="100%">
            <thead>
                <tr>
                    <th align="center" width="30%"><b>Product Image</b></th>
                    <th align="center" width="15%"><b>Product Name</b></th>
                    <th align="center" width="15%"><b>Price</b></th>
                    <th align="center" width="30%"><b>Product Desc</b></th>
                    <th align="center" width="10%"><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach($katalog as $katalog)
                    <tr>
                        <td><img src="assets/images/{{$katalog->gambar_produk}}" alt=""></td>
                        <td>{{$katalog->nama_produk}}</td>
                        <td>Rp. {{number_format($katalog->harga)}}</td>
                        <td>{{$katalog->deskripsi_produk}}</td>
                        <td>    
                            <a href="/master_catalog/{{$katalog->id_produk}}/edit" class="btn btn-warning btn-sm" style="width:80px;"><b>Edit</b></a><br>
                            <a href="/master_catalog/{{$katalog->id_produk}}/delete" class="btn btn-danger btn-sm" onclick="return confirm ('Anda Yakin Ingin Menghapus?')" style="width:80px;"><b>Delete</b></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

@stop