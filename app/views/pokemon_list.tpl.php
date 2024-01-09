<section class="d-flex flex-wrap justify-content-start p-2 ">

    <?php foreach ($viewData['bytype'] as $byType) : ?>
    
    <div id="survol" class = "card d-flex align-items-center p-4 m-2" >
        <a id="lien__home" class = "fw-bold" href="<?= $router->generate('pokemon-list', ['number' => $byType->getNumber()]) ?>">
        <img class="card-img-top" src="<?= $BASE_URL . 'img/' . $byType->getNumber() . '.png'?>" alt="">
        
        <p class ="card-text">#<?= $byType->getNumber() ?> <?= $byType->getName() ?></p>
        </a>
    </div>
    
    <?php endforeach; ?>

</section>

