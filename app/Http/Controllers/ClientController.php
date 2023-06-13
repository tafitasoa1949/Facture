<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function listclient(){
        return view('client.list',[
            'client' => Client::all()
        ]);
    }
    public function ajouter(Request $request){
        $client = new Client();
        $client->nom = $request->input('nom');
        $client->adresse = $request->input('adresse');
        $client->mail = $request->input('mail');
        $client->telephone = $request->input('telephone');
        $client->nomresponsable = $request->input('nomresponsable');
        $client->save();
        return redirect()->route('listclient');
    }
}
