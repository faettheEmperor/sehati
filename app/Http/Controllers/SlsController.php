<?php

namespace App\Http\Controllers;

use App\Models\Sls;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlsController extends Controller
{
    //

    public function index()
    {
        return view('tagging.index', [
        ]);
    }


    public function edit()
    {
        return view('tagging.edit');
    }

    public function show()
    {
        return view('tagging.show');
    }

    public function create()
    {
        return view('tagging.create');
    }
}