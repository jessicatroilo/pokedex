<section>
    <p class= " fw-bold text-white"> Cliquez sur un type pour voir tous les Pokémons de ce type </p>
    <div class="d-flex flex-row flex-wrap">
    <?php foreach ($viewData ['types'] as $type) : ?>
        <div id="survol" class = "card d-flex align-items-center p-4 m-1" style = "background-color : #<?= $type->getColor() ?>;" >
            <a id="lien__type" class = "fw-bold" href="<?= $router->generate('pokemon-typelist', ['id' => $type->getId()]) ?>">
            <p  class ="card-text"><?=$type->getName() ?></p>
            </a>
        </div>
    <?php endforeach; ?>
    </div>

</section>

