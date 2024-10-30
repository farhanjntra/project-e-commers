<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Menampilkan daftar sumber daya.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('admin.Barang.index', compact('barangs'));
    }

    /**
     * Menampilkan formulir untuk membuat sumber daya baru.
     */
    public function create()
    {
        return view('admin.Barang.create');
    }

    /**
     * Menyimpan sumber daya yang baru dibuat ke dalam penyimpanan.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'url_gambar' => 'required|image|max:2048',
            'stok' => 'required|integer',
        ]);

        // Memproses unggahan gambar
        if ($request->hasFile('url_gambar')) {
            $image = $request->file('url_gambar');
            $imageName = $image->store('products', 'public'); // Menyimpan gambar ke storage/app/public/products
            $validateData['url_gambar'] = $imageName; // Menyimpan path gambar ke dalam database
        }

        Barang::create($validateData);

        return redirect()->route('barang.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Menampilkan sumber daya yang ditentukan.
     */
    public function show(Barang $barang)
    {
        // Opsional: Menampilkan produk tertentu
    }

    /**
     * Menampilkan formulir untuk mengedit sumber daya yang ditentukan.
     */
    public function edit(Barang $barang)
    {
        return view('admin.Barang.edit', compact('barang'));
    }

    /**
     * Memperbarui sumber daya yang ditentukan dalam penyimpanan.
     */
    public function update(Request $request, Barang $barang)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'stok' => 'required|integer',
            'url_gambar' => 'nullable|image|max:2048',
        ]);

        // Memperbarui field produk
        $barang->nama_produk = $request->nama_produk;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->stok = $request->stok;

        // Menangani unggahan gambar
        if ($request->hasFile('url_gambar')) {
            // Menghapus gambar lama jika ada
            if ($barang->url_gambar) {
                \Storage::delete($barang->url_gambar);
            }
            // Menyimpan gambar baru
            $image = $request->file('url_gambar');
            $imageName = $image->store('products', 'public');
            $barang->url_gambar = $imageName; // Menyimpan path gambar baru
        }

        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Produk berhasil diperbarui');
        
    }

    /**
     * Menghapus sumber daya yang ditentukan dari penyimpanan.
     */
    public function destroy(string $id)
    {
        Barang::destroy($id);
        return redirect()->route('barang.index')->with('success', 'Berhasil dihapus');
    }
}
