<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function get_data()
    {
        return[
            'name'=>'anil'
        ];
    }
}
