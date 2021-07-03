<?php  
// ราคาสินค้า  จำนวนสินค้า   ส่วนลด
// ถ้าราคารวม  > 120  ลด  2%  
// ถ้าราคารวม > 300  ลด  3%


$price = 100;
$quantity = 3;

$totalPrice = $price * $quantity;
$netTotalPrice = 0;

//คำนวณหาส่วนลด 2%
if($totalPrice > 120 && $totalPrice <= 300){
    $netTotalPrice = $totalPrice - ($totalPrice * 0.02);
}else if($totalPrice > 300){
    $netTotalPrice = $totalPrice - ($totalPrice * 0.03);
}

echo  "ราคา : " . $price . " บาท<br>";
echo  "จำนวน : " . $quantity . " ชิ้น<br>";
echo  "ราคารวม : " . $totalPrice . " บาท<br>";
echo  "ราคารวมสุทธิ : " . $netTotalPrice . " บาท<br>";












?>