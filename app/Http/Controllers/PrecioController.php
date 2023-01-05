<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Precio;

class PrecioController extends Controller
{
    public function getAll(){
        $precios = Precio::all();

        return $precios;
    }
}
