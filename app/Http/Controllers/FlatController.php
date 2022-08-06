<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Flat;

class FlatController extends Controller{
    public function home($adres){
        $houses1 = new House();
        $houses2 = new House();
        $houses1 = $houses1->all();
        for($i=0;$i<count($houses1);$i++){
            if($houses1[$i]->adres==$adres){
                $houses2 = $houses1[$i];
            }
        }
        $flatss = new Flat();
        return view(view: 'flats', data: ['houses'=>$houses2, 'flatss'=>$flatss->all()]);
    }
    public function check(Request $request){
        $valid = $request->validate([
            'adres' => 'required|min:4|max:100',
            'number' => 'required|min:1|max:4',
            'rooms' => 'required|min:1|max:2',
            'square' => 'required|min:2|max:3',
            'owner' => 'required|min:3|max:100'
        ]);
        $flats = new Flat();
        $flats2 = new Flat();
        $flats2 = $flats2->all();
        $flats->adres = $request->input(key: 'adres');
        $flats->number = $request->input(key: 'number');
        $flats->rooms = $request->input(key: 'rooms');
        $flats->square = $request->input(key: 'square');
        $flats->owner = $request->input(key: 'owner');
        $flag = true;
        for($i=0;$i<count($flats2);$i++){
            if($flats2[i]->number == $flats->number){
                $flag = false;
            }
            elseif($flats2[i]->number <= 0 ){
                $flag = false;
            }
            elseif($flats2[i]->rooms <= 0 ){
                $flag = false;
            }
            elseif($flats2[i]->square <= 0 ){
                $flag = false;
            }
        }
        if($flag == true){
            $flats->save();
        }
        $houses1 = new House();
        $houses2 = new House();
        $houses1 = $houses1->all();
        for($i=0;$i<count($houses1);$i++){
            if($houses1[$i]->adres == $request->input(key: 'adres')){
                $houses2 = $houses1[$i];
            }
        }
        $flatss = new Flat();
        return view(view: 'flats', data: ['houses'=>$houses2, 'flatss'=>$flatss->all()]);
    }
    public function destroy($id){
        $flats = new Flat();
        $sflat = new Flat();
        $flats = $flats->all();
        foreach($flats as $flat){
            if($flat->id == $id){
                $sflat = $flat;
                $flat->delete();
            }
        }
        $houses1 = new House();
        $houses2 = new House();
        $houses1 = $houses1->all();
        for($i=0;$i<count($houses1);$i++){
            if($houses1[$i]->adres == $sflat->adres){
                $houses2 = $houses1[$i];
            }
        }
        $flatss = new Flat();
        return view(view: 'flats', data: ['houses'=>$houses2, 'flatss'=>$flatss->all()]);
    }
}