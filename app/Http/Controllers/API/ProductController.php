<?php

namespace App\Http\Controllers\API;


use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function all (Request $request)
    {
        // id digunakan untuk mengambil data berdasarkan id
        $id = $request->input('id');
        // limit digunakan untuk membatasi jumlah data yang akan ditampilkan
        $limit = $request->input('limit', 6);
        // name digunakan untuk mengambil data berdasarkan nama
        $name = $request->input('name');
        
        // type digunakan untuk mengambil data berdasarkan type
        $type = $request->input('type');
        // price_from digunakan untuk mengambil data berdasarkan harga dari
        $price_from = $request->input('price_from');
        // price_to digunakan untuk mengambil data berdasarkan harga sampai
        $price_to = $request->input('price_to');

        // cek inputan ID ada atau tidak dalam request
        if ($id)
        {
            $product = Product ::with ('galleries')->find($id);

            if ($product) 
            
                return ResponseFormatter :: success($product, 'Produk berhasil diambil');        
            else
                return ResponseFormatter :: error(null, 'Produk tidak ditemukan', 404);
            
        }

       

        $product = Product ::with ('galleries');

        if ($name)
            $product->where('name', 'like', '%' . $name . '%');

            if ($type)
            $product->where('type', 'like', '%' . $name . '%');     

        if($price_from)
            $product->where('price', '>=', $price_from);

            if($price_to)
            $product->where('price', '<=', $price_to);

            return ResponseFormatter :: success($product->paginate($limit), 'Produk berhasil diambil');

    }
}
