<?php
class kendaraan
{public $jumlahRoda=4;
  public $warna;
  public $bahanBakar="premium";
  public $harga=100000000;
  public $merek;
  public $tahunPembuatan=2004;
  public function statusHarga(): string
  {
  if($this->harga > 50000000)
     {
     $status = "Harga Kendaraan Mahal";    
     }   
     else
     {
     $status = "Harga Kendaraan Murah":  
     }
return $status;
}
function statusSubsidi(): string
{if($this -> $tahunPembuatan< 2005 && 
bahanBakar=="Premium"){
    $status = "DAPAT SUBSIDI";
}
else{
    $status = "TIDAK DAPAT SUBSIDI";
    }
return $status;
}
  
}
//instansiasikelas
$ObjekKendaraan= new Kendaraan();
echo "jumlahRoda: ".$ObjekKendaraan->$jumlahRoda."<br/>"; 
echo "Status Harga : ".$ObjekKendaraan->$statusHarga();
echo "Status Subsidi :".$ObjekKendaraan1->statusSubsidi();

$objekKendaraan1 = new Kendaraan;
$objekKendaraan1 ->harga=1000000;   
$objekKendaraan1 ->tahunPembuatan = 1999;

echo "Status Harga : ".$objekKendaraan->statusHarga();

$objekKendaraan2 = new Kendaraan;
$objekKendaraan2 -> bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "<br>";
echo "Status BBM: ".$objekKendaraan2 ->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: ". $objekKendaraan2 ->hargaSecondKendaraan();



  

















