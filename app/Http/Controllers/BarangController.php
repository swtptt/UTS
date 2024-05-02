<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // BarangController.php

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_barang_id' => 'required',
        ]);

        // tambahkan logika untuk menyimpan barang
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barang,kode_barang,'.$id,
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
            'satuan_barang_id' => 'required',
        ]);

        // tambahkan logika untuk mengupdate barang
    }

}
