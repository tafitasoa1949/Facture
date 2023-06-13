<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Detailfacture;
use App\Models\Ecriture;
use App\Models\Facture;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use League\CommonMark\Reference\Reference;

class FactureController extends Controller
{
    //
    public function index($id){
        return view('facture.insert',['idclient' => $id]);
    }
    public function validation(Request $request){
        $avance = $request->input('avance');
        $intitule = $request->input('intitule');
        if(empty($avance)){
            $avance = 0;
        }
        $idclient = $request->input('idclient');
        $taille = $request->input('taille');
        $donnees=[];
        $total_prix_hors_taxe = 0;
        for($i=0 ; $i<$taille ; $i++){
            $indice = array(
                'designation' => $request->input('design'.$i),
                'unite' => $request->input('unite'.$i),
                'quantite' => $request->input('quantite'.$i),
                'prix' => $request->input('prix'.$i),
                'montant' => $request->input('montant'.$i)
            );
            $total_prix_hors_taxe = $total_prix_hors_taxe + $indice['montant'];
            array_push($donnees,$indice);
        }
        $tva_20 = $total_prix_hors_taxe * 0.2;
        $ttc = $total_prix_hors_taxe + $tva_20;
        $montant_a_payer = $ttc - $avance;
        return view('facture.validation',[
            'idclient' => $idclient,
            'data' => $donnees,
            'hors_taxe' => $total_prix_hors_taxe,
            'tva' => $tva_20,
            'ttc' => $ttc,
            'avance' => $avance,
            'intitule'=>$intitule,
            'montant_a_payer' => $montant_a_payer
        ]);
    }
    public function processForm(Request $request)
    {
        $data = $request->input('data');
        $idclient = $request->input('idclient');
        $hors_taxe = $request->input('hors_taxe');
        $tva = $request->input('tva');
        $ttc = $request->input('ttc');
        $avance = $request->input('avance');
        $intitule = $request->input('intitule');
        $montant_a_payer = $request->input('montant_a_payer');
        //insert facture
        $facture = new Facture();
        $idfacture = $facture->getID();
        $don = array(
            'idfacture'=>$idfacture,
            'idclient'=>$idclient,
            'montan_hors_taxe'=>$hors_taxe,
            'tva'=>$tva,
            'ttc'=>$ttc,
            'avance'=>$avance,
            'montant_payer'=>$montant_a_payer
        );
        $facture->insert($don);
        //insert detailfacture
        foreach($data as $row){
            $detail = new Detailfacture();
            //currentdate
            $now = Carbon::now();
            $formattedDateTime = $now->format('Y-m-d H:i:s');
            $data = array(
                'idfacture' => $idfacture,
                'designation' =>$row['designation'],
                'unite' =>$row['unite'],
                'quantite'=>$row['quantite'],
                'prix'=>$row['prix'],
                'montant'=>$row['montant'],
                'created_at' => $formattedDateTime
            );
            $detail->insert($data);
        }
        //compte
        $client = new Client();
        //vente
        $vente = new Ecriture();
        $vente->reference=$client->getNom($idclient);
        $vente->compte=70000;
        $vente->tiers="FRNS";
        $vente->intitule="Vente";
        $vente->libelle=$intitule;
        $vente->debit=0;
        $vente->credit=$hors_taxe;
        $vente->save();
        //tva
        $tva_compte = new Ecriture();
        $tva_compte->reference=$client->getNom($idclient);
        $tva_compte->compte=44570;
        $tva_compte->tiers="";
        $tva_compte->intitule="TVA";
        $tva_compte->libelle=$intitule;
        $tva_compte->debit=0;
        $tva_compte->credit=$tva;
        $tva_compte->save();
        //client
        $client_compte = new Ecriture();
        $client_compte->reference=$client->getNom($idclient);
        $client_compte->compte=41100;
        $client_compte->tiers="CLTS";
        $client_compte->intitule="Clients";
        $client_compte->libelle=$intitule;
        $client_compte->debit=$ttc;
        $client_compte->credit=0;
        $client_compte->save();
        //
        return redirect()->route('listfacture');
    }
    public function listfacture(){
        $facture = Facture::all();
        foreach($facture as $row){
            $client = new Client();
            $row['idclient'] = $client->getNom($row['idclient']);
        }
        return view('facture.list',[
            'facture' => $facture
        ]);
    }
    public function detail($idfacture){
        $donnes = DB::table('detailfactures')
            ->where('idfacture','=',$idfacture)
            ->get();
        return view('facture.detail',[
            'data' => $donnes
        ]);
    }
    public function recherche(Request $request){
        $search = $request->input('search');
        $resultats = Facture::where('idfacture', 'LIKE', '%' . $search . '%')->get();
        // $resultats = Facture::paginate(10);
        // if ($resultats->count() > 0) {
        //     // Il y a des résultats
        //     // Effectuez les actions appropriées
        //     return "misy";
        // } else {
        //     // Aucun résultat trouvé
        //     // Effectuez les actions appropriées
        //     return 'tsisy';
        // }
    }
}
