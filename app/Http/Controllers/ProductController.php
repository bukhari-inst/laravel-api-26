<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $data = Product

        return response()->json([
            [
                'id' => 1,
                'nama' => 'Kopi Arabika',
                'harga' => 45000
            ],
            [
                'id' => 2,
                'nama' => 'Teh Hijau',
                'harga' => 25000
            ],
        ]);
    }

    public function show($id)
    {
        return 'Detail produk #' . $id;
    }
}
