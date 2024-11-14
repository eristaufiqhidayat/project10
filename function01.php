<?php
function hitungLuasLingkaran($jariJari) {
    return pi() * pow($jariJari, 2);  // pi() = 3.14159..., pow() = pangkat
}
function hitungLuasSegiempat($panjang,$lebar) {
    return $panjang*$lebar;  
}
echo "Luas Luas Segiempat: ".hitungLuasSegiempat(5,8);  // Output: Luas lingkaran: 153.9380400259
?>
