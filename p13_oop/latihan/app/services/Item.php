<?php
namespace App\Services; 

class Item{
    // cara penulisan property
    public $nama;

    //cara penulisan method
    public function _construct($nama){
        $this-> nama = $nama;
    }

    public function info () {
        // isi method maju()
        return "Item App Services". $this-> nama;
    }
}

?>