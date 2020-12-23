<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function insert(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('formPet');
        }
        Pet::create($request->all());
        return redirect('/');
    }

    public function list()
    {
        $listaPets = Pet::all();
        return view('home', ['lista' => $listaPets]);
    }

    public function remove($id)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        if ($request->method() == 'GET') {
            $pet = Pet::find($id);
            return view('formEditPet', ['pet' => $pet]);
        }

        $pet = Pet::find($request->id);

        $pet->name = $request->name;
        $pet->breed = $request->breed;
        $pet->size = $request->size;
        $pet->gender = $request->gender;
        $pet->update();
        return redirect('/');
    }
}
