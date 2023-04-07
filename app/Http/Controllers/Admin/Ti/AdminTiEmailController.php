<?php

namespace App\Http\Controllers\Admin\Ti;

use App\Http\Controllers\Controller;
use App\Models\AdminTiEmail;
use Illuminate\Http\Request;

class AdminTiEmailController extends Controller
{
    public function index()
    {
        $titulos = ['E-mail','Dominio','Setor','Status','Ações'];
        $emails = AdminTiEmail::all();
        return view('admin.ti.email.index', compact('emails','titulos'));
    }
    public function create()
    {
        return view('admin.ti.email.create');
    }

    public function store(Request $request, AdminTiEmail $adminTiEmail)
    {
        $adminTiEmail->create($request->all());

        if ($adminTiEmail){
            return redirect()->route('admin.ti.email.create')->with('success', 'Email Inserido com Sucesso');
        } else {
            return redirect()->back()->with('error', 'Falha ao Inserir');
        }
    }
}
