<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductoController extends Controller
{
    public function getCrear(){
    	return view("producto.crear");
    }
}
