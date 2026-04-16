<?php

function each(&$array){
    $res = array();
    $key = key($array);
    if($key !== null){
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    }else{
        $res = false;
    }
    return $res;
}

echo "<h2>您的購物車內容：</h2>";
echo "<table border = '1' bgcolor = '#3fdfed'>";
echo "<tr><td>功能</td><td>編號</td><td>名稱</td><td>價格</td><td>數量</td><tr>";

$total = 0;
$flag = true;

reset($_COOKIE);
while (list($arr ,  $value) = each($_COOKIE)){

    if(isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])){
        if($flag){
            $flag = false;
            $color = "#e0a7a7";
        }else{
            $flag = true;
            $color = "#e0a7a7";
        }

        echo "<tr bgcolor='".$color."'>";
        echo "<td><a href='delete.php?Id=".$arr."'>刪除</a></td>";
        
        $price = 0;
        $quantity = 0; //顯示選購的商品資料
        
        while(list($name , $value) = each($_COOKIE[$arr])){
            //使用表格顯示
            echo "<td>" . $value . "</td>";
            if ($name == "Price") $price = $value;
            if ($name == "Quantity") $quantity = $value;
        }
        $total += $price * $quantity; //計算總金額
        echo "</tr>";
    }
}
echo "</table>";
echo "<h3>總金額 = NT$" . $total . "元</h3>";
echo "<hr><a href='catalog.php'>商品目錄</a>";
?>
<title>您的購物車</title>