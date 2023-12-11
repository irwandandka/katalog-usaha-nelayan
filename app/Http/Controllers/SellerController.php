<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function get()
    {
        $sellers = DB::table('sellers')->select('id','name','phone_number','address')->get();
        return response()->json($sellers);
    }
}
