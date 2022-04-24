<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class KriptografiController extends Controller
{
    public function encrypt(Request $request)
    {
        return response()->json([
            "data" => Crypt::encrypt($request->text)
        ]);
    }

    public function decrypt(Request $request)
    {
        return response()->json([
            "data" => Crypt::decrypt($request->text)
        ]);
    }
}
