<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Detailfacture extends Model
{
    protected $table = "detailfactures";
    use HasFactory;
    public function insert($data){
        DB::table('detailfactures')->insert($data);
    }

}
