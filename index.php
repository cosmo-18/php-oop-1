<?php

include_once __DIR__ . '/classi/class.php';


$salviamoidati = [];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film rate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="text-center">
        <h2>Inserisci le informazioni del film</h2>
    </header>
    <main class="text-center">

        <form action="" method="GET">
            <input type="text" placeholder="Inserisci il nome del film" name="name">
            <input type="text" placeholder="Inserisci il genere del film" name="genre">
            <input type="text" placeholder="Inserisci l'anno del film" name="age">
            <button class="btn btn-primary">Vai</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </main>
</body>

</html>

<?php


if (!empty($_GET) && !empty($_GET['name']) && !empty($_GET['genre']) && !empty($_GET['age'])) {
    $name = $_GET['name'];
    $genre = $_GET['genre'];
    $age = $_GET['age'];

    $movie = new Movies($name, $age, $genre);
    $salviamoidati[] = $movie;
    var_dump($salviamoidati);
    
}

