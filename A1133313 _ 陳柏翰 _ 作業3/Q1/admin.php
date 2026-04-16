<?php
session_start();

if(isset($_SESSION["login"])){
    if($_SESSION['login'] == "admin"){
        echo "<h1>Welcome BOBO!! Login success</h1>";
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