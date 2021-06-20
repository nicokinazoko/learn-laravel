<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $myArray = [1, 9, 3, 4, 5, 3, 5, 7];
        $collection = collect($myArray);
        echo "<pre>";
        var_dump($collection);
        echo "</pre>";
    }

    public function collectionDua()
    {
    }

    public function collectionTiga()
    {
    }

    public function collectionEmpat()
    {
    }
    public function collectionLima()
    {
    }
    public function collectionEnam()
    {
    }
}
