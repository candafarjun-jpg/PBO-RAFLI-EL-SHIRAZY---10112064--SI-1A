<?php

// Input
$kartu = "ya"; // isi "ya" atau "tidak"
$totalBelanja = 334000;

$diskon = 0;

if ($kartu == "ya") {

    if ($totalBelanja > 100000) {
        $diskon = 15000;
    } else if ($totalBelanja > 500000) {
        $diskon = 50000;
    }

} else {

    if ($totalBelanja > 100000) {
        $diskon = 5000;
    }

}

// Perhitungan total bayar
$totalBayar = $totalBelanja - $diskon;

// Output
echo "Apakah ada kartu member: " . $kartu . "\n";
echo "Total belanjaan: " . $totalBelanja . "\n";
echo "Total Bayar: Rp " . $totalBayar;

?>