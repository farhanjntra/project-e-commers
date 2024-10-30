@extends('admin.layout.index')
@section('menuBarang', 'active')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Produk</h1>

        <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Kode Produk</th>
                    <th>Kategori</th>
                    <th>Tanggal Masuk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $product)
                    <tr>
                        <td>
                            @if($product->url_gambar)
                                <img src="{{ Storage::url($product->url_gambar) }}" alt="{{ $product->nama_produk }}" width="100">

                            @else
                                <img src="{{ asset('images/default.png') }}" alt="Default Image" width="100">
                            @endif
                        </td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>{{ $product->Kode_product }}</td>
                        <td>{{ $product->category->name ?? 'N/A' }}</td> <!-- Asumsi Anda memiliki relasi ke kategori -->
                        <td>{{ $product->created_at->format('Y-m-d') }}</td>
                        <td>Rp {{ number_format($product->harga, 2, ',', '.') }}</td>
                        <td>{{ $product->deskripsi ?? 'Tidak ada deskripsi' }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>
                             <!-- Tombol Edit -->
                             <a href="{{ route('barang.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>

                             <!-- Tombol Delete -->
                             <form action="{{ route('barang.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                             </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
