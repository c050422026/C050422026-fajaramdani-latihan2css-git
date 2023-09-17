<?php
$saldoAwal = 1000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal; // Saldo awal adalah saldo akhir awalnya

for ($i = 1; $i <= $bulan; $i++) {
    $saldoAkhir += $saldoAkhir * $bunga;
    //lengkapi pada perhitungan $saldo akhir
}

// Format saldo akhir dengan pemisah ribuan
$saldoAkhirFormatted = number_format($saldoAkhir, 0, ',', '.');

echo "Saldo akhir setelah $bulan bulan adalah : Rp. $saldoAkhirFormatted,-";
?>
