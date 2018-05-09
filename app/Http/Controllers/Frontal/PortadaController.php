<?php

namespace App\Http\Controllers\Frontal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortadaController extends Controller
{
    public function portada()
    {
        return view('frontal/portada');
    }
}
