<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    //
    public function showPanelClient()
    {
        return view('dashboard');
    }
}
