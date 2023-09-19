<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("producto/productoIndex");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("producto/productoCreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view("producto/productoStore");
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view("producto/productoShow");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view("producto/productoEdit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        return view("producto/productoUpdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        return view("producto/productoDestroy");
    }
}
