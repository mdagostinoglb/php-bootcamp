<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guests;

class GuestsController extends Controller
{

    public function index()
    {
        return Guests::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Surname' => 'required',
            'Name' => 'required',
            'Age' => 'required|numeric',
            'Rooms_id' => 'required|numeric'
        ]);
        
        if ($validator->fails()) {
            return $validator->errors()->all();
        }
        
        $newGuest = Guests::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $guest = Guests::find($id);
        $guest->Surname = $request->input('Surname');
        $guest->Name = $request->input('Name');
        $guest->Age = $request->input('Age');
        $guest->Rooms_id = $request->input('Rooms_id');
        $guest->save();
    }
}