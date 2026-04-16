<?php

session_start();

$sID = "bohan";
$sPWD = "a1133313";

$tID = "andy";
$tPWD = "950506";

$aID = "bobo";
$aPWD = "123";

$uID = $_POST["uName"];
$uPWD = $_POST["uPWD"];
$date = strtotime("+5 days", time());


if($sID == $uID && $sPWD == $uPWD){
    $_SESSION["login"] = "student";
    setcookie("uName",$uID,$udate);
    header("Location:student.php");
}else if($tID == $uID && $tPWD == $uPWD){
    $_SESSION["login"] = "teacher";
    setcookie("uName",$uID,$udate);
    header("Location:teacher.php");
}else if($aID == $uID && $aPWD == $uPWD){
    $_SESSION["login"] = "admin";
    setcookie("uName",$uID,$udate);
    header("Location:admin.php");
}else{
    echo "登入失敗ㄛ!!";
    header("Refresh:2;url=login.php");
}

?>