<section class = "d-flex flex-wrap justify-content-evenly p-2 ">

    <?php foreach ($viewData['pokemons'] as $pokemon) : ?>
    <div id="survol" class = "card d-flex align-items-center p-4 m-2" >
        <a id="lien__home" class = "fw-bold" href="<?= $router->generate('pokemon-list', ['number' => $pokemon->getNumber()]) ?>">
        <img class="card-img-top" src="<?= $BASE_URL . 'img/' . $pokemon->getNumber() . '.png'?>" alt=""></td>
        
        <p class ="card-text">#<?= $pokemon->getNumber() ?> <?= $pokemon->getName() ?></p>
        </a>
    </div>
    
    <?php endforeach; ?>

</section>