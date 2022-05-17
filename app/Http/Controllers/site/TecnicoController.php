<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    public function site(){
        return view('site.tecnicos');
    }
}
