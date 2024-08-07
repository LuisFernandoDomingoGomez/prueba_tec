<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Empresa;
use App\Http\Requests\EmpleadoRequest;
use PDF;

/**
 * Class EmpleadoController
 * @package App\Http\Controllers
 */
class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::paginate(10);

        return view('empleado.index', compact('empleados'))
            ->with('i', (request()->input('page', 1) - 1) * $empleados->perPage());
    }

    public function pdf()
    {
        $empleados = Empleado::paginate(200);
        $pdf = PDF::loadView('empleado.pdf', ['empleados' => $empleados])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function downloadPdf()
    {
        $empleados = Empleado::paginate(200);
        $pdf = PDF::loadView('empleado.pdf', ['empleados' => $empleados]);

        return $pdf->setPaper('a4')->download('empleado.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empleado = new Empleado();
        $empresas = Empresa::pluck('name','id');
        return view('empleado.create', compact('empleado', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmpleadoRequest $request)
    {
        Empleado::create($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        return view('empleado.show', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $empresas = Empresa::pluck('name','id');

        return view('empleado.edit', compact('empleado', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmpleadoRequest $request, Empleado $empleado)
    {
        $empleado->update($request->validated());

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado editado con exito');
    }

    public function destroy($id)
    {
        Empleado::find($id)->delete();

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado eliminado con exito');
    }
}
