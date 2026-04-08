<?php
namespace kendaraan; //utk membedakan class berdasarkan kelompok
//cara penulisan class mobil

class Mobil{
    // cara penulisan property
    public $warna;
    public $merk;

    //cara penulisnan method
    function maju (){
        // isi method maju()
        return "Mobil maju";
    }

    function berhenti(){
        return "Mobil berhenti";
    }
}

// cara menggunakan namespace
// use kendaraan\Mobil;

//membuat inisialisasi namespace
use kendaraan\Mobil as kmobil;

//menginisiasi object dari name space alias
$mobil_ahmad = new kmobil;

// inisialisasi object
// $mobil_ahmad = new Mobil();
$mobil_anton = new Mobil();

// set property
$mobil_ahmad -> warna = "Hitam";
$mobil_anton -> merk = "Toyota";

// tampilkan property
echo "Mobil Ahmad";
echo "<br>Warna : ", $mobil_ahmad->warna;
echo "<br>Merk : ", $mobil_anton->merk;

//tampilkan method
echo $mobil_ahmad->maju();
echo "<br>";
echo $mobil_anton->berhenti();
?>