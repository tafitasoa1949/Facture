<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Client extends Model
{
    protected $table = "clients";
    use HasFactory;
    public function insert($data){
        DB::table('clients')->insert($data);
    }
    
}
