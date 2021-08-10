@extends('layouts.layout')
@section('content')

    <style>
        h1{
            text-align:left;
            padding-top:2%;
            padding-left:3%;
        }
        .text p{
            font-weight:bold;
        }
        .button button{
            bottom: 0%;
            text-align: bottom;
        }
        
    </style>
    
    <div class="row">
        <div class="col">
            <h1>Pesanan</h1>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id Produk</th>
                        <th>Nama Pembeli</th>
                        <th>Email Pembeli</th>
                        <th>Telfon Pembeli</th>
                        <th>Alamat Pembeli</th>
                        <th>Jumlah Beli</th>
                        <th>Status Proses</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beli as $beli)
                    <tr>
                        <td>{{$beli->id_produk}}</td>
                        <td>{{$beli->nama_pembeli}}</td>
                        <td>{{$beli->email_pembeli}}</td>
                        <td>{{$beli->tlp_pembeli}}</td>
                        <td>{{$beli->alamat_pembeli}}</td>
                        <td>{{$beli->jumlah_beli}}</td>
                        <td>{{$beli->proses}}</td>
                        <td>
                            <a href="/pesanan/{{$beli->id_beli}}/edit"><button class="btn btn-warning btn-sm">Update Proses</button></a><br>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop