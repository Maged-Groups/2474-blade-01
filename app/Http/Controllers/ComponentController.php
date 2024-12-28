<?php

namespace App\Http\Controllers;

class ComponentController extends Controller
{

    function input()
    {

        $countries = [
            ['name' => 'Egypt', 'id' => 1],
            ['name' => 'USA', 'id' => 2],
            ['name' => 'Qatar', 'id' => 3],
            ['name' => 'KSA', 'id' => 4],
            ['name' => 'UAE', 'id' => 24],
            ['name' => 'Germany', 'id' => 27],
            ['name' => 'Italy', 'id' => 30],
        ];


        return view('comps.input', compact('countries'));
    }

}
