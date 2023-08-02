<?php

namespace App\Http\Controllers\BackendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function trangchu()
    {
        return view('Backend.Layout.TrangChu');
    }
}
