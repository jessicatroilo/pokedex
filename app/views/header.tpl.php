<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!--CSS-->
<link href="<?= $BASE_URL . '/css/style.css' ;?>" rel="stylesheet">

<!--FavIcone-->
<link rel="icon" type="image/png" href="<?= $BASE_URL?>/img/25.png" />

</head>
<body>
    <div id="container">
        <header class="card-header mt-0">
            <nav id="nav__bar" class="navbar navbar-expand-lg px-2 py-1 m-2">
                <h1> <a class="navbar-brand fw-bold" href="<?= $router->generate('main-home')?>"> Pokédex</a></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav fw-bold">
                <a class="nav-link" href="<?= $router->generate ('main-home')?>">Liste</a>
                <a class="nav-link" href="<?= $router->generate ('pokemon-type')?>">Types</a>
            </nav>
        </header>
        <main>
