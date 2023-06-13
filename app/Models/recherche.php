<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recherche extends Model
{
    protected $table = "facture";
    use HasFactory;
    public function insert($data){
        DB::table('facture')->insert($data);
    }
    
}
