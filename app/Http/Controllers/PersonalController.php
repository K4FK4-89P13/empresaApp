<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonal;
use App\Models\Personal;

class PersonalController extends Controller
{
    public function index() {
        $personals = Personal::all();
        return view('personal.index', compact('personals'));
    }

    public function show(Personal $personal) {
        //$personal = Personal::find($id);
        return view('personal.show', compact('personal'));
    }

    public function create() {
        return view('personal.create');
    }

    public function store(StorePersonal $request) {
        $personal = Personal::create($request->all());

        return redirect()->route('personal.show', $personal->id);
    }

    public function destroy(Personal $personal) {
        //$personal = Personal::find($id);
        $personal->delete();
        return redirect()->route('personal.index')->with('success', 'Registro eliminado correctamente');
    }
}
