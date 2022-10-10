<?php
    
    function rupiah($harga){
    $harga = $harga * 14312;
    $RP= 'Rp. ' . number_format ($harga,0,',','.');
    return $RP;
    }
?>