<?php

namespace App\Http\Controllers\Admin\Ti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTiEmailController extends Controller
{
    public function create()
    {
        return view('admin.ti.email.create');
    }
}
