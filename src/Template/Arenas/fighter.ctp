<?php $this->assign('title', 'Combattant');?>

Are you ready for the fight ?

<div>
    <h4><span class="light">Vos informations</span></h4>

    nom : <?php echo $recupNom ?>
        <div data="<?php echo $recupNom; ?>"></div>

    level : <?php echo $level; ?>
        <div class="progress-bar bar" data-percentage="<?php echo $level; ?>"></div>

    vie : <?php echo $vie; ?>
        <div class="progress-bar bar" data-percentage="<?php echo $vie; ?>"></div>

</div>

<div class="margin-content col-lg-4 sight-infos margin-dash text-center">
        <h4><span class="light">Votre combattant</span></h4>
                    <h3><?php echo $name; ?></h3>
</div>
