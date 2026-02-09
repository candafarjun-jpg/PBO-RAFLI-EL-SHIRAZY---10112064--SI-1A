<?php
public string $namapembeli="ani"
    public string $namaBarang="sabun"
    public int $hargaBarang=5000;
    public int $jumlahBarang=2;
    public float $totalBayar;
    public float $diskon;

    public static float $pajak = 0.02

}

class Belanja { // ini adalah class belanja



    public ini $hargaBarang=5000;
    public ini $jumlahBarang=2;
    public float $totalBayar;
    public float $diskon;

    public static float $pajak = 0.02;

    public function __construct {$namapembeli}{
        $this->namapembeli = $namapembeli;
    }

public function tampilRincian {$namapembeli}: void{
    echo "nama pembeli :" . $this->namapembeli . "<br>";
    echo "nama barang :" . $this->namabarang . "<br>";
    echo "harga barang :" . $this->hargabarang . "<br>";
    echo "jumlah barang :" . $this->jumlahbarang . "<br>";

}


}

$belanja = new Belanja(namapembeli: "ani");
$belanja->tampilRincian(namapembeli: $belanja1->namapembeli);

}

?>