<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Facture extends Model
{
    protected $table = "factures";
    use HasFactory;
    public function insert($data){
        DB::table('factures')->insert($data);
    }
    public function getID(){
        //sequence
        $nextValue = DB::select("SELECT nextval('idc') AS next_value");
        $nextValue = $nextValue[0]->next_value;
        if (strlen($nextValue) < 3) {
            $idvaovao = str_pad($nextValue, 3, '0', STR_PAD_LEFT);
        }
        //mois
        $currentMonth = DB::select("SELECT EXTRACT(MONTH FROM CURRENT_DATE) AS current_month");
        $currentMonth = $currentMonth[0]->current_month;
        //annee
        $currentYear = DB::select("SELECT EXTRACT(YEAR FROM CURRENT_DATE) AS current_year");
        $currentYear = $currentYear[0]->current_year;
        $concater = "DTX-".$currentMonth."-".$currentYear."-".$idvaovao;
        return $concater;
    }
}
