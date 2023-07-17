@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Barang Pelanggan</label>
                <input type="text" class="form-control" name="pel_no" value="{{ $rowBarang->produk_name }}" disabled></>
            </div>
            <div class="mb-3">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}"></>
            </div>
            <div class="mb-3">
                <label>ALAMAT Pelanggan</label>
                <textarea class="form-control" name="pel_alamat">{{ $row->pel_alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>No Hp Pelanggan</label>
                <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}"></>
            </div>
            <div class="mb-3">
                <label>Ktp Pelanggan</label>
                <input type="text" class="form-control" name="pel_ktp" value="{{ $row->pel_ktp }}" disabled></>
            </div>
            <div class="mb-3">
                <label>Id User Pelanggan</label>
                <input type="text" class="form-control" name="pel_id_user" value="{{ $rowUser->email }}" disabled></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
