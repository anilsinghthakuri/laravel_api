<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function get_data()
    {
        $data  = Product::all();
        return $data;
    }
    public function get_data_by_id($id)
    {
        $data = Product::find($id);
        return $data;
    }
}
