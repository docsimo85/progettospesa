<?php

$link = mysqli_connect("localhost:8889", "root", "root", "spesa");

// Controllo la connessione
if($link === false){
    die("ERRORE: Impossibile connettersi " . mysqli_connect_error());
}

// Escape x sql injection
$articolo = mysqli_real_escape_string($link, $_POST['art']);
//var_dump($articolo);die;

// attempt insert query execution
$sql = "INSERT INTO spesa (articolo) VALUES ('$articolo')";
if(mysqli_query($link, $sql)){
    echo "<script>window.location = '/index.php'; sweetAlert('OK', 'Inserimento avvenuto!', 'success')</script>";
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>

