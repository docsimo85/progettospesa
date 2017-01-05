<!doctype html>

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
    <h1><a href="/index.php">Prova</a></h1>
    <button><a href="index.php">Pagina principale</a></button>
</div>

<div class="container-fluid">

    <form action="script.php" method="post">
        <div class="form-group">
            <label for="art">Articolo:</label>
            <input type="text" name="art" id="art">
        </div>
        <div class="pulsante"><input type="submit" class="btn btn-default"></div>
    </form>

</div>



<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="js/js.js"></script>
<script src="dist/sweetalert.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>