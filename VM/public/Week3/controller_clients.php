<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\clients;
use Log;
use Validator;

class ClientsController extends Controller
{
    public function index()
    {
       return Client::all(); 
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'surname' => 'required|string',
                'name' => 'required|string',
                'age' => 'required|numeric',
                'room_id' => 'required|numeric'
            ]);
           if ($validator->fails()) {
               return $validator->errors()->all();
           
        }
             $room=$request->input('room_id');
             $false=Room::where('id', $room)->first();
             $false->free = 0;
             $false->save();
             $newClient = Client::create($request->all());
             return $newClient;
    }
    
    public function client($id)
    {
        return Client::where('id',$id)->get();
    }

    public function update(Request $request, $id)
    {
            $client=Client::where('id',$id)->first();
            $client->surname = $request->input('surname');
            $client->name = $request->input('name');
            $client->age = $request->input('age');
            $client->room_id = $request->input('room_id');
            $client->save();
            $room=$request->input('room_id');
            $false=Room::where('id', $room)->first();
            $false->free = 0;
            $false->save();
            return $client;
    }
    
}
