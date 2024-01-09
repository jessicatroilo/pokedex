
<?php //var_dump ($viewData['pokemon']);
$currentPokemon = $viewData['pokemon'][0];?>
<section class="text-white">

    <h2 class ="text-center"> Détails de <?= $currentPokemon->getName()?> </h2>
    <div class="d-flex align-items-center justify-content-center">
        <img class="p-5" src="<?= $BASE_URL . 'img/' . $currentPokemon->getNumber() . '.png'?>" alt=""> 
        

        <div id="container__stat" class = " border-none rounded p-4 m-2 text-white" >    
            <h3 class="fw-bold px-2 py-3 my-2">#<?= $currentPokemon->getNumber(). ' '.  $currentPokemon->getName() ?></h3>
            
            <?php foreach ($viewData['pokemon'] as $pokemonType) : ?>
            <span  class ="rounded p-2 mx-1 my-5" style = "background-color : #<?= $pokemonType->getTypeColor() ?>;"><?= $pokemonType->getTypeName() ?></span>
            <?php endforeach; ?>
            
            <h4 class="fw-bold px-2 py-3 my-2">Statistiques</h4>
            <table class="table-primary text-white" >
                <tbody > 
                    <tr>   
                        <th class="p-2" scope="row">PV</th>
                        <th class="px-5"><?=$currentPokemon->getHp() ?></th>
                        <th><progress id="progressbar" max="255" value="<?=$currentPokemon->getHp() ?>"></progress></th> 
                    </tr>
                    <tr >    
                        <th class="p-2"  scope="row">Attaque</th>
                        <th class="px-5"><?=$currentPokemon->getAttack() ?></th>
                        <th><progress id="progressbar" max="255" value="<?=$currentPokemon->getAttack() ?>"></progress></th> 
                    </tr>
                    <tr>   
                        <th class="p-2"  scope="row">Défense</th>
                        <th class="px-5"><?=$currentPokemon->getDefense() ?></th>
                        <th><progress id="progressbar" max="255" value="<?=$currentPokemon->getDefense() ?>"></progress></th> 
                    </tr>
                    <tr>   
                        <th class="p-2"  scope="row">Attaque spé.</th>
                        <th class="px-5"><?=$currentPokemon->getSpeAttack() ?></th>
                        <th><progress id="progressbar" max="255" value="<?=$currentPokemon->getSpeAttack() ?>"></progress></th> 
                    </tr>
                    <tr>   
                        <th class="p-2" scope="row">Défense spé. </th>
                        <th class="px-5"><?=$currentPokemon->getSpeDefense() ?></th>
                        <th><progress id="progressbar" max="255" value="<?=$currentPokemon->getSpeDefense() ?>"></progress></th> 
                    </tr>
                    <tr>   
                        <th class="p-2" scope="row">Vitesse</th>
                        <th class="px-5"><?=$currentPokemon->getSpeed() ?></th>
                        <th><progress id="progressbar" max="255" value="<?=$currentPokemon->getSpeed() ?>"></progress></th> 
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>
    <p class="text-center p-2"><a class="text-white" href="<?= $router->generate ('main-home')?>"> Revenir à la liste </a></p>
</section>