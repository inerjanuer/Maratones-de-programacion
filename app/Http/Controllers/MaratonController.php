<?php

namespace Maraton\Http\Controllers;

use Illuminate\Http\Request;

class MaratonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function consulta()
    {
        return view('consulta');
    }

    public function exportar()
    {
        return view('exportar');
    }

    public function resultadosMaraton()
    {
        return view('resultadosMaraton');
    }

    public function reglamento()
    {
        return view('reglamento');
    }
}
