@extends('layouts.layout')
@section('content')
    <br>
    <div class="container">
      <h2>Update Proses</h2>
      <br>
      <form action="/pesanan/{{$beli->id_beli}}/update" method="POST" class="was-validated">
        {{csrf_field()}}  
        <div class="form-group">
            <label for="proses">Proses Pesanan :</label>
            <select name="proses" id="proses" class="form-control">
                <option value="Belum Diproses" @if($beli->status == 'Belum Diproses') selected @endif>Belum Diproses</option>
                <option value="Proses" @if($beli->status == 'Proses') selected @endif>Proses</option>
                <option value="Selesai Proses" @if($beli->status == 'Selesai Proses') selected @endif>Selesai Proses</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>


@stop
