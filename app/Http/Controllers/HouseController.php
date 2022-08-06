<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Flat;

class HouseController extends Controller{
    public function home(){
        $housess = new House();
        return view(view: 'houses', data: ['housess'=>$housess->all()]);
    }
    public function check(Request $request){
        $valid = $request->validate([
            'adres' => 'required|min:4|max:100'
        ]);
        $houses = new House();
        $houses->adres = $request->input(key: 'adres');
        $houses->save();
        return redirect()->route('houses');
    }
    public function destroy($adres){
        $houses = new House();
        $houses = $houses->all();
        foreach($houses as $house){
            if($house->adres == $adres){
                $house->delete();
            }
        }
        return redirect()->route('houses');
    }
}
