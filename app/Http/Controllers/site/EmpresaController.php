<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function site(){
        $empresas = Empresa::all();    
        return view('site.empresas', ['empresas'=>$empresas]);
    }    
}
