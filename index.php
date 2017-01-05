<!doctype html>

<?php

$browser = $_SERVER["HTTP_USER_AGENT"];
//var_dump($_GET["user"]);die;
$ip = $_SERVER["REMOTE_ADDR"];
echo '<div class="alert alert-info" style="text-align: center"><p><strong>I dati della connessione sono registrati</strong><br>
Browser: '. $browser . '<br>
IP: ' . $ip . ' </p></div>';

//var_dump($_GET);die;

include_once("config.php");

$query = $mysqli->query("SELECT articolo FROM spesa WHERE attivo=1 ORDER BY id DESC");

$row = $query->fetch_all();

//var_dump($row);

?>

<html lang="it">
<head>
    <meta charset="utf-8">

    <title>Prova</title>
    <meta name="description" content="Progetto spesa">
    <meta name="author" content="Doc">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <link rel="stylesheet" href="css/stile.css">
    <!-- Latest compiled and minified CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<div class="header">
    <h1><a href="/index.php">Lista della spesa</a></h1>
    <button class="btn btn-success" id="btn-aggiungi">Aggiungi prodotti</button>
    <button class="btn btn-success" id="btn-torna"><a href="index.php">Torna alla lista</a></button>
</div>

<div class="container-fluid">
    <div id="aggiungi-lista">
        <form action="script.php" id="form-aggiungi" method="post">
            <div class="form-group">
                <label for="art">Articolo:</label>
                <input type="text" name="art" id="art">
            </div>
            <div class="pulsante"><input type="submit" class="btn btn-default"></div>
        </form>
    </div>
    <div id="lista">
        <?php
        foreach ($row as $articolo) {
            ?>
            <div id="articolo_<?php echo $articolo[0] ?>" class="articolo">
                <p style="line-height: 100px; font-weight: 500; font-size: 30px"><?php echo $articolo[0] ?></p>
<!--                <button class="btn btn-danger elimina">Tocca per eliminare</button>-->
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src='js/js.js'></script>
<script src="dist/sweetalert.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
</body>
</html>