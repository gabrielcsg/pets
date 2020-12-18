<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function insert(Request $request) {
        if ($request->method() == 'GET') {
            return view('formPet');
        }
        Pet::create($request->all());
        return redirect('/');
    }

    public function list() {
        $listaPets = Pet::all();
        return view('home', ['lista' => $listaPets]);
    }

    public function remove($id) {
        $pet = Pet::find($id);
        $pet->delete();
        return redirect('/');
    }
}
