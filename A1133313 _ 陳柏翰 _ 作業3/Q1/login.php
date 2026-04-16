<?php

if(isset($_COOKIE['uName'])){
    echo $_COOKIE['uName'] ."歡迎回來~~";
    echo "<a href = 'cookdel.php'>刪除COOKIE</a>";
}
?>

<body style="background-color: lightblue;">

    <form action="logincheck.php" method="POST">
        <br>
        ID:<input type="text" palceholder="Your name" name="uName"><br>
        <br>
        Passwoed:<input type="password" name="uPWD"><br>
        <input type="submit">
    </form> 
</body>