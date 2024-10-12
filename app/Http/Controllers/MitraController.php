<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMitraRequest;
use App\Models\Mitra;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mitras = Mitra::orderByDesc('id')->paginate(10);
        return view('admin.mitra.index', compact('mitras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMitraRequest $request)
    {
        //
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = $imagePath;
            }

            $newMitra = Mitra::create($validated);
        });

        return redirect()->route('admin.mitras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitra $mitra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mitra $mitra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        //
        DB::transaction(function () use ($mitra) {
            $mitra->delete();
        });

        return redirect()->route('admin.mitras.index');
    }
}
