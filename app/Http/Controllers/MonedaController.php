<?php

namespace App\Http\Controllers;

use App\Models\moneda;
use Illuminate\Http\Request;

class MonedaController extends Controller
{
    

    public function index()
    {   
        $moneda=moneda::paginate(5);
        $datos=['datos'=>$moneda];
        echo view('header');
        echo view('configuracion_parametros_sistema/menu');
        echo view('configuracion_parametros_sistema/moneda/moneda',$datos);
        echo view('footer');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(moneda $moneda)
    {
        //
    }

   
    public function edit(moneda $moneda)
    {
        //
    }

   
    public function update(Request $request, moneda $moneda)
    { 
        $moneda_tipoaux=$moneda->tipo_moneda;
     
        $moneda->tipo_moneda=$request->tipo_moneda;
        $moneda->update();

        if($moneda_tipoaux != $request->tipo_moneda){
        return redirect()->to(asset('moneda'));
        }
    }

  
    public function destroy(moneda $moneda)
    {
        //
    }
}
