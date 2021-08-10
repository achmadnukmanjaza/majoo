@extends('layouts.layout')
@section('content')
    <br>
    
    @if (session('alert'))
        <div class="alert alert-success" role="alert">
            {{ session('alert') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            @foreach($katalog as $katalog)
            <div class="col-md-3">
                <div class="img">
                    <img src="assets/images/{{$katalog->gambar_produk}}" alt="">
                </div>
                <div>
                    <div><p class="text-center"><b>{{$katalog->nama_produk}}</b></p></div>
                    <div><p class="text-center"><i>Rp. {{number_format($katalog->harga)}}</i></p></div>
                    <div style="height:260px;"><p>{{$katalog->deskripsi_produk}}</p></div>
                </div>
                <div>
                    <center>
                        <a href="/buy/{{$katalog->id_produk}}"><button class="btn btn-success">Beli</button></a><br>
                    </center>
                </div><br><br><br>
            </div>
            @endforeach
        </div> 
    </div>
    

    

@stop