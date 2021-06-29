@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>   
                <h2> Show Kendaraan</h2>
            </div>
            <br>  
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
     <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Plat:</strong>
                {{ $product->plat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Merek:</strong>
                {{ $product->merek }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe:</strong>
                {{ $product->tipe }}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto Kendaraan:</strong>
            <br>
            <img src="{{ asset('img/'. $product->foto)}}" alt="" width="100px" height="170px"> <br>
            <a href="{{ asset('img/'. $product->foto)}}" target="_blank">Lihat Gambar</a>
        </div>
    </div>
    </div>
@endsection