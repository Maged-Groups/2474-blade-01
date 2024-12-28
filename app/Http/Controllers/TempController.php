<?php

namespace App\Http\Controllers;

class TempController extends Controller
{
    function page_1()
    {
        return view('temp.page_1');
    }

    function page_2()
    {
        return view('temp.page_2');
    }

    function page_3()
    {
        // $orders = [1, 2, 3, 5, 8, 92];
        $orders = null;

        return view('temp.page_3', compact('orders'));
    }

    function page_4()
    {
        $categories = ['Dairy', 'Vegtables', 'Fruits', 'Beverage', 'Bakery', 'Sauces', 'Healthy', 'Juices'];

        return view('temp.page_4', compact('categories'));
    }
}
