@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Barang</h3>
        <form action="{{ url('/barang') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NAMA BARANG</label>
                <input type="text" class="form-control" name="produk_name">
            </div>
            <div class="mb-3">
                <label>STOK BARANG</label>
                <input type="text" class="form-control" name="produk_stok">
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="produk_harga">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection