<?php
session_start();

if(isset($_SESSION["login"])){
    if($_SESSION['login'] == "teacher"){
        echo "<h1>Welcome Andy Boy!! Login success</h1>";
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
<body style="background-color: lightblue;"></body>
<img src = andy.png width=15%>