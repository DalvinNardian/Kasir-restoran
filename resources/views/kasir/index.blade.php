@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kasir.create') }}"> Create</a>
            </div>
        </div>
    </div>

    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('error'))
        <div class="alert alert-warning">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th width="110px">Action</th>
        </tr>
        @foreach ($transaksis as $transaksi)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $transaksi->nama_pelanggan }}</td>
            <td>{{ $transaksi->nama_menu }}</td>
            <td>{{ $transaksi->jumlah }}</td>
            <td>Rp {{ number_format($transaksi->total_harga,0,',','.') }}</td>
            <td>{{ $transaksi->nama_pegawai }}</td>
            <td>{{ $transaksi->created_at->format('d-m-Y') }}</td>
            <td>
                <form action="{{ route('kasir.destroy',$transaksi->id) }}" method="POST">     
                    <a href="/kasir/transaksi/struk/{{ $transaksi->id }}" class="btn btn-warning" target="_blank">
                        <i class="fa-solid fa-file-invoice"></i>
                    </a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $transaksis->links() !!}
    
@endsection