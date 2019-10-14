<?php

namespace Realtebo\Blackhole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Realtebo\Blackhole\Models\CatchedEmail;

class BlackholeController extends Controller
{
    public function test() 
    {
        
        return view('blackhole::test');
    }

    public function index()
    {
        $all_mails = CatchedEmail::all();

        return view('blackhole::index', [
            'all_mails' => $all_mails
        ]);
    }

}