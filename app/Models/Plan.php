<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Plan extends Model
{
    protected $table = "plans";
    use HasFactory;
    public function insert($data){
        DB::table('plans')->insert($data);
    }
}
