<?php

function formatRupiah($angka): string {
    Return "Rp " . number_format(num: $angka, decimals: 0, decimal_separator: ','. THOUSANDS_SEP);
}

class BelanjaWarung {

public $namapembeli;
public $namaBarang;
public $hargaBarang;
public $JumlahBeli;

public function hitungsubtotal(): float|int {
    return $this->hargaBarang * $this->JumlahBeli;      
}

public function hitungdiskon($subtotal): 
}