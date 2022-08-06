<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flat;

class House extends Model{
    use HasFactory;
    public $timestamps = false;
    
    public function counter($adress){
        $flats = new Flat();
        $flats = $flats->all();
        $counterr = 0;
        foreach($flats as $fl){
            if($adress == $fl->adres){
                $counterr++;
            }
        }
        return($counterr);
    }
}
