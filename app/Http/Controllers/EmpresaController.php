<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Http\Requests\EmpresaRequest;

/**
 * Class EmpresaController
 * @package App\Http\Controllers
 */
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::paginate();

        return view('empresa.index', compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * $empresas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empresa = new Empresa();
        return view('empresa.create', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmpresaRequest $request)
    {
        Empresa::create($request->validated());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa creado con exito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
        $empresa->update($request->validated());

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa editado con exito');
    }

    public function destroy($id)
    {
        Empresa::find($id)->delete();

        return redirect()->route('empresas.index')
            ->with('success', 'Empresa eliminado con exito');
    }
}
