@extends('admin.layout.index')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Produk Baru</h1>

        <!-- Custom CSS for black borders -->
        <style>
            .black-border {
                border: 2px solid rgb(26, 63, 84);
                box-shadow: none;
            }

            .black-border:focus {
                border-color: black;
                box-shadow: none;
            }
        </style>

        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Kode Produk -->
            <div class="form-group mb-4">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control black-border" name="kode_produk" id="kode_produk" placeholder="Masukkan kode produk" required>
            </div>

            <!-- Nama Produk -->
            <div class="form-group mb-4">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control black-border" name="nama_produk" id="nama_produk" placeholder="Masukkan nama produk" required>
            </div>

            <!-- Harga dan Stok (side by side) -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control black-border" name="harga" id="harga" placeholder="Masukkan harga" required>
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control black-border" name="stok" id="stok" placeholder="Jumlah stok" required>
                </div>
            </div>

            <!-- Deskripsi Produk -->
            <div class="form-group mb-4">
                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                <textarea class="form-control black-border" name="deskripsi" id="deskripsi" rows="4" placeholder="Deskripsi produk..."></textarea>
            </div>

            <!-- Gambar Produk -->
            <div class="form-group mb-4">
                <label for="url_gambar" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control black-border" name="url_gambar" id="url_gambar" accept="image/*" required>
                <small class="form-text text-muted">Format gambar yang diperbolehkan: JPG, PNG, GIF (Max 2MB)</small>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block">Simpan Produk</button>
            </div>
        </form>
    </div>
@endsection
