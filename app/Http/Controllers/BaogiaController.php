<?php

namespace App\Http\Controllers;

use App\Mail\BaoGia;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BaogiaController extends Controller
{
    function baogia()
    {
        $data = Product::all();
        $mail_user = "";
        foreach ($data as $key) {
            $mail_user = $key['mail_user'];
        }


        Mail::to($mail_user)->send(new BaoGia($data));
    }
}
