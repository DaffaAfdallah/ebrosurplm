<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fasilitas = Fasilitas::orderByDesc('id')->paginate(10);
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        //
    }
}