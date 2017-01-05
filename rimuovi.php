<?php
define('HOST','localhost:8889');
define('USERNAME', 'root');
define('PASSWORD','root');
define('DB','spesa');

$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

//var_dump($_POST["username"]);die;

$sql = "update spesa set attivo=0,data_eliminazione=NOW() where articolo='".$_POST['articolo']."'";

if(mysqli_query($con, $sql)){
//    var_dump('si');die;
    echo 'success';
}
else {
    echo 'KO';
}
?>
