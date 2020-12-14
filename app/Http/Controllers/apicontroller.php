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

    public function insert_data(Request $request)
    {
        $data = new Product;
        $data->name = $request->name;
        $data->desc = $request->desc;
        $data->category = $request->category;
        $status  = $data->save();
        if($status){
            return [
                "message" => "data insered"
            ];
        }
        else{
            return [
                "message" => "data not insered"
            ];
        }

        }

    public function update_by_id(Request $request)
    {
        $data = Product::find($request->id);
        $data->name = $request->name;
        $data->desc = $request->desc;
        $data->category = $request->category;
        $status = $data->save();
        if($status){
            return[
                'message'=>'updated'
            ];
        }
        else{
            return[
                'message'=>'not updated'
            ];
        }
    }
}
