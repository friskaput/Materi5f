<?php
    // Variabel
    $pemasukan = 50000000;
    $hutang_a = 16500000;
    $bunga_a = 0.05; // 5%
    $hutang_b = 9500000;
    $bunga_b = 0.045; // 4.5%
    
    // Menghitung bunga hutang
    $bunga_hutang_a = $hutang_a * $bunga_a;
    $bunga_hutang_b = $hutang_b * $bunga_b;
    
    // Menghitung total bunga hutang
    $total_bunga_hutang = $bunga_hutang_a + $bunga_hutang_b;
    
    // Menghitung total hutang
    $total_hutang = $hutang_a + $hutang_b;
    
    // Menghitung sisa uang
    $sisa_uang = $pemasukan - $total_hutang;
    
    // Menampilkan hasil
    echo "Berapa sisa uang? : " . number_format($sisa_uang) . "<br>";
    echo "Berapa jumlah total bunga hutang? : " . number_format($total_bunga_hutang) . "<br>";
    echo "Berapa jumlah total hutang? : " . number_format($total_hutang) . "<br>";
    ?>
    