<?php

namespace App\Http\Controllers;

use App\Models\Parque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ParqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if($request->buscar) {
            $parques = Parque::where('NOMBRE_PARQUE', 'like', '%'.$request->buscar.'%')->get();
        } else {
            $parques = Parque::all();
        }

        return view('parque.index', ['parques' => $parques]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parque.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'NOMBRE_PARQUE' => 'required|max:100',
                'FECHA_VISITA' => 'required|date',
                'VALOR_ENTRADA' => 'required|int',
                'DIRECCION_PARQUE' => 'required|max:200',
                'RECORRIDO_REALIZADO' => 'required|max:100',
                'KILOMETROS_RECORRIDOS' => 'required|int',
            ],
            [
                'NOMBRE_PARQUE.required' => 'campo requerido',
                'NOMBRE_PARQUE.max' => 'máximo 100 caracteres',
                'FECHA_VISITA.required' => 'campo requerido',
                'VALOR_ENTRADA.required' => 'campo requerido',
                'VALOR_ENTRADA.int' => 'solo números',
                'DIRECCION_PARQUE.required' => 'campo requerido',
                'DIRECCION_PARQUE.max' => 'máximo 200 caracteres',
                'RECORRIDO_REALIZADO.required' => 'campo requerido',
                'RECORRIDO_REALIZADO.max' => 'máximo 100 caracteres',
                'KILOMETROS_RECORRIDOS.int' => 'solo números',
                'KILOMETROS_RECORRIDOS.required' => 'campo requerido'
            ]
        );

        $parque = Parque::create($request->all());
        return redirect()->route('parque.show', $parque);


    }

    /**
     * Display the specified resource.
     */
    public function show(Parque $parque)
    {
        return view('parque.show', ['parque' => $parque]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parque $parque)
    {
        return view('parque.edit', ['parque' => $parque]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parque $parque)
    {
        $request->validate(
            [
                'NOMBRE_PARQUE' => 'required|max:100',
                'FECHA_VISITA' => 'required|date',
                'VALOR_ENTRADA' => 'required|int',
                'DIRECCION_PARQUE' => 'required|max:200',
                'RECORRIDO_REALIZADO' => 'required|max:100',
                'KILOMETROS_RECORRIDOS' => 'required|int',
            ],
            [
                'NOMBRE_PARQUE.required' => 'campo requerido',
                'NOMBRE_PARQUE.max' => 'máximo 100 caracteres',
                'VALOR_ENTRADA.required' => 'campo requerido',
                'DIRECCION_PARQUE.required' => 'campo requerido',
                'DIRECCION_PARQUE.max' => 'máximo 200 caracteres',
                'RECORRIDO_REALIZADO.required' => 'campo requerido',
                'RECORRIDO_REALIZADO.max' => 'máximo 100 caracteres',
                'KILOMETROS_RECORRIDOS.required' => 'campo requerido'
            ]
        );

        $parque->update($request->all());
        return redirect()->route('parque.show', $parque);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parque $parque)
    {
        $parque->delete();
        return redirect()->route('parque.index');
    }
}
