<?php
session_start();

if(isset($_SESSION["login"])){
    if($_SESSION['login'] == "student"){
        echo "<h1>Welcome Bohan !! Login success</h1>";
        echo "<a href='logout.php'>Logout</a>";
    }else{
        echo "<h1>Failed?? 回到登入頁面</h1>"; 
        header("Refresh:3;url=login.php");
    }
}else{
    echo "<h1>Failed?? 回到登入頁面</h1>"; 
    header("Refresh:3;url=login.php");
}

?>