<?php

namespace Realtebo\Blackhole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlackholeController extends Controller
{
    public function test() {
        
        return view('blackhole:test');
    }

}