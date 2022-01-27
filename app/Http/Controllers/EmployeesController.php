<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employees::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = new Employees();
        $employees->nombres = $request->input('nombres');
        $employees->apellidos = $request->input('apellidos');
        $employees->deptoid = $request->input('deptoid');
        $employees->cedula = $request->input('cedula');
        $employees->direccion = $request->input('direccion');
        $employees->telcasa = $request->input('telcasa');
        $employees->telmobil = $request->input('telmobil');
        $employees->salariobase = $request->input('salariobase');
        $employees->descuentos = $request->input('descuentos');
        $employees->salarioneto = $request->input('salarioneto');
        $employees->save();
        if ($employees) {
            echo "success";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employees::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Instancear la clase departments
        $employees = Employees::findOrFail($id);
        $employees->nombres = $request->input('nombres');
        $employees->apellidos = $request->input('apellidos');
        $employees->deptoid = $request->input('deptoid');
        $employees->cedula = $request->input('cedula');
        $employees->direccion = $request->input('direccion');
        $employees->telcasa = $request->input('telcasa');
        $employees->telmobil = $request->input('telmobil');
        $employees->salariobase = $request->input('salariobase');
        $employees->descuentos = $request->input('descuentos');
        $employees->salarioneto = $request->input('salarioneto');
        $employees->save();
        if ($employees) {
            echo "success";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employees::findOrFail($id);
        $employees->delete();
    }
}
