<?php

namespace App\Http\Controllers;

class BladeController extends Controller
{

    function vars()
    {
        $var_1 = 'Variable 1';
        $var_2 = '<h2>Variable 2</h2>';
        $var_3 = 'Hi<script>console.log("You are under attack!!!");</script>';
        return view('blade.vars', compact('var_1', 'var_2', 'var_3'));
    }

    function array()
    {
        $arr = [
            'var_1' => 'Variable 1',
            'var_2' => '<h2>Variable 2</h2>',
            'var_3' => 'Hi<script>console.log("You are under attack!!!");</script>',
        ];

        return view('blade.array', compact('arr'));
    }

    function extracted()
    {

        $array = [
            'var_1' => 'Variable 1',
            'var_2' => '<h2>Variable 2</h2>',
            'var_3' => 'Hi<script>console.log("You are under attack!!!");</script>',
            'var_4' => [
                'item_1' => 'Item 1',
                'item_2' => 'Item 2',
                'item_3' => 'Item 3',
                'item_4' => 'Item 4',
                'item_5' => 'Item 5',
                'item_6' => 'Item 6',
            ],
        ];


        return view('blade.extracted', compact('array'));
    }
}
