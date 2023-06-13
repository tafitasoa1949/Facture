<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PlanController extends Controller
{
    //
    public function voir_compte(){
        return view('grandlivre.compte',[
            'client' => Plan::all()
        ]);
    }
    public function ajouter(Request $request){
        $numero = $request->input('numero');
        if (strlen($numero) < 5) {
            $vaovao = str_pad($numero, 5, '0', STR_PAD_RIGHT);
        }
        $data = array(
            'numero' => $vaovao,
            'intitule' => $request->input('intitule')
        );
        $plan = new Plan();
        $plan->insert($data);
        return redirect()->route('compte');
    }
    public function detail($numero){
        return view('grandlivre.detail');
    }
}
