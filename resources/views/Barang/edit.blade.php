@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Barang</h3>
        <form action="{{ url('/barang/' . $row->produk_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>NAMA BARANG</label>
                <input type="text" class="form-control" name="produk_name" value="{{ $row->produk_name }}"></>
            </div>
            <div class="mb-3">
                <label>STOK BARANG</label>
                <input type="text" class="form-control" name="produk_stok" value="{{ $row->produk_stok }}"></>
            </div>
            <div class="mb-3">
                <label>HARGA</label>
                <input type="text" class="form-control" name="produk_harga" value="{{ $row->produk_harga }}"></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-end" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection