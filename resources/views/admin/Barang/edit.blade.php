@extends('admin.layout.index')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Produk</h1>

        <style>
            /* Custom class for black borders */
            .black-border {
                border: 2px solid black;
                box-shadow: none; /* Removes any shadow if present */
            }

            .black-border:focus {
                border-color: black; /* Ensures focus state also has a black border */
                box-shadow: none; /* Removes shadow on focus */
            }
        </style>

        <form action="{{ route('barang.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Produk -->
            <div class="form-group mb-4">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control black-border" name="nama_produk" id="nama_produk"
                    value="{{ old('nama_produk', $barang->nama_produk) }}" placeholder="Masukkan nama produk" required>
            </div>

            <!-- Harga dan Stok (side by side) -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control black-border" name="harga" id="harga"
                        value="{{ old('harga', $barang->harga) }}" placeholder="Masukkan harga" required>
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control black-border" name="stok" id="stok"
                        value="{{ old('stok', $barang->stok) }}" placeholder="Jumlah stok" required>
                </div>
            </div>

            <!-- Deskripsi Produk -->
            <div class="form-group mb-4">
                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                <textarea class="form-control black-border" name="deskripsi" id="deskripsi" rows="4"
                    placeholder="Deskripsi produk...">{{ old('deskripsi', $barang->deskripsi) }}</textarea>
            </div>

            <!-- Gambar Produk -->
            <div class="form-group mb-4">
                <label for="url_gambar" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control black-border" name="url_gambar" id="url_gambar" accept="image/*">
                <small class="form-text text-muted">Format gambar yang diperbolehkan: JPG, PNG, GIF (Max 2MB). Kosongkan jika tidak ingin mengubah gambar.</small>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update Produk</button>
            </div>
        </form>
    </div>
@endsection
