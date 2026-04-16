<?php
$id = $_GET["Id"]; // 取得網址傳來的商品 ID
if ( isset($_COOKIE[$id]) ) {
    // 遍歷該商品陣列，將所有項目的效期設為過期
    foreach ($_COOKIE[$id] as $name => $value) {
        setcookie($id."[".$name."]", "", time()-3600);
    }
}
header("Location: shoppingcart.php"); // 刪除後轉址回購物車
?>  