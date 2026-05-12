<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerAPIController extends Controller
{
    public function index()
    {
        return Owner::all();
    }

    public function show($id)
    {
        return Owner::find($id);
    }

    public function store(Request $request)
    {
        $owner = new Owner();
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->save();
        return $owner;
    }

    public function update(Request $request, $id)
    {
        $owner = Owner::find($id);
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->save();
        return $owner;
    }

    public function destroy($id)
    {
        Owner::destroy($id);
        return $id;
    }
}
