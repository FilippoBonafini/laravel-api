<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTecnologyRequest;
use App\Http\Requests\UpdateTecnologyRequest;
use App\Models\Tecnology;
use Illuminate\Support\Str;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologies = Tecnology::all();
        return view('admin.tecnologies.index', compact('tecnologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tecnologies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTecnologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTecnologyRequest $request)
    {
        $data = $request->validated();

        $tecnology = new Tecnology();
        $tecnology->fill($data);

        $tecnology->slug =  Str::slug($data['name']);

        $tecnology->save();

        return redirect()->route('admin.tecnologies.index')->with('message', 'Teconologia creata con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnology $tecnology)
    {
        return view('admin.tecnologies.show', compact('tecnology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function edit(Tecnology $tecnology)
    {
        return view('admin.tecnologies.edit', compact('tecnology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTecnologyRequest  $request
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTecnologyRequest $request, Tecnology $tecnology)
    {
        $data = $request->validated();
        $tecnology->slug =  Str::slug($data['name']);
        $tecnology->update($data);

        return redirect()->route('admin.tecnologies.index', $tecnology->id)->with('message', 'Tecnology ' . $tecnology->id . ' modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnology  $tecnology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();

        return redirect()->route('admin.tecnologies.index')->with('message', "Tecnology cancellata con successo");
    }
}
