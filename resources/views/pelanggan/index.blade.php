@extends('layouts.app')

@section('content')
    <h2>Data Pelanggan
        <a class="btn btn-info btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Pelanggan</a>
    </h2>
    <table class="table table-bordered table-hover">
        @if ($rows->isEmpty())
            <h4 class="mt-5 text-center">Tidak Ada Data Pelanggan.<br> Harap Masukkan Data terlebih dahulu</h4>
        @else
            <tr class="table-info">
                <th id="" class="text-center">NO.ID</th>
                <th id="" class="text-center">NAMA BARANG</th>
                <th id="" class="text-center">NAMA PELANGGAN</th>
                <th id="" class="text-center">ALAMAT</th>
                <th id="" class="text-center">NO. HP</th>
                <th id="" class="text-center">ID KTP</th>
                <th id="" class="text-center">EMAIL</th>
                <th id="" class="text-center">HARGA</th>
                <th id="" class="text-center">EDIT</th>
                <th id="" class="text-center">DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr class="table-light">
                    <td class="text-center">{{ $row->pel_id }}</td>
                    <td class="text-center">{{ $row->barang->produk_name }}</td>
                    <td class="text-center">{{ $row->pel_nama }}</td>
                    <td class="text-center">{{ $row->pel_alamat }}</td>
                    <td class="text-center">{{ $row->pel_hp }}</td>
                    <td class="text-center">{{ $row->pel_ktp }}</td>
                    <td class="text-center">{{ $row->user->email }}</td>
                    <td class="text-center">{{ $row->barang->produk_harga }}</td>
                    <td class="text-center">
                        <a class="btn btn-primary" href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a>
                    </td>
                    <td class="text-center">
                        <form class=" btn-sm float-none" action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger justify-content-center">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    @extends('layouts.footer')
@endsection
