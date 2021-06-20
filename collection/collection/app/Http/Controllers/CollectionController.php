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
        // $myArray = [1, 9, 3, 4, 5, 3, 5, 7];
        // $collection = collect($myArray);

        // echo $collection[0];
        // echo "<br>";
        // echo $collection[1];
        // echo "<br>";

        // echo $collection;

        // foreach($collection as $value){
        //     echo "$value ";
        // }
        // echo "<br>";

        // collection dari berbagai data
        // $collection = collect(["belajar", "laravel", "uncover", 1, 2, 3]);
        // echo $collection;

        // echo "<br>";

        // // collection dari asosiative array
        // $collection = collect([
        //     "nama" => "Laura",
        //     "sekolah" => "SMA 5 Lampung",
        //     "kota" => "Lampung",
        //     "jurusan" => "IPA"
        // ]);

        // echo $collection;

        $varA = collect([1, 2, 3]);
        $varB = collect(["1" => 1, "2" => 2, "3" => 3]);

        echo $varA;
    }

    public function collectionTiga()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        // Operasi Matematis
        dump($collection->sum()); // 37
        dump($collection->avg()); // 4.625
        dump($collection->max()); // 9 9 dump( $collection->min() ); // 1
        dump($collection->median()); // 4.5
        dump($collection->random());

        // add elemenent
        echo $collection->concat([10, 11, 12]);

        // check data availability
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump($collection->contains(3)); // true 5 dump( $collection->contains(8) );

        // unique data
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        echo $collection->unique();
        // {"0":1,"1":9,"2":3,"3":4,"4":5,"7":7}

        // method all to change collection into array
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump($collection->all()); // [1, 9, 3, 4, 5, 3, 5, 7]

        // method first and last
        dump($collection->first()); // 1
        dump($collection->last()); // 7

        //method count
        dump($collection->count()); // 8

        //method sort smallest to largest
        echo $collection->sort();
    }

    public function collectionEmpat()
    {
        // method get to get data
        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        // Ambil nilai berdasarkan key
        dump($collection->get('sekolah')); // "SMA 5 Lampung"

        // method has to check data
        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        dump($collection->has('jurusan')); // true
        dump($collection->has('umur')); // false

        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        // Ganti isi collection
        $hasil = $collection->replace([
            'sekolah' => 'SMK 2 Palembang',
            'kota' => 'Palembang'
        ]);

        dump($hasil);

        // hapus isi data
        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        dump($collection->forget('sekolah'));

        // method flip membalikkan key menjadi value
        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        dump($collection->flip());

        // method key and values
        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        // Ambil semua key
        dump($collection->keys());

        // Ambil semua value
        dump($collection->values());

        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
        ]);

        dump($collection->search('IPA')); // "jurusan"

        // method each
        $collection->each(function ($val, $key) {
            echo "$key: $val <br>";
        });

        foreach ($collection as $key => $val) {
            echo "$key = $val <br>";
        }
    }
    public function collectionLima()
    {
    }
    public function collectionEnam()
    {
    }
}
