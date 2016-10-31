<?php $this->assign('title', 'Combattant');?>

Are you ready for the fight ?

<html>
    <p> Create your character !! </p>

    <?php
        echo $this->Form->create('createFighter');
        echo $this->Form->input('nom');
        echo $this->Form->end('Create');
    ?>


    <div>

        <h1>Your character:</h1>

        <?php echo $this->Html->image('perso.jpeg', array('alt' => 'Photo du personnage', 'width' => '12%')); ?>

        <h2>Skills:</h2>

        <dl>
            <dt>Level:  <?php echo "$lvl";?></dt>
            <dt>Strength: <?php echo "$strength";?></dt>
            <dt>Health:  <?php echo "$health";?></dt>
            <dt>Experience:  <?php echo "$exp";?></dt>
        </dl>

        <?php
            if($exp >= 4) {

            echo $this->Form->create('NewLevel');
            echo $this->Form->input('improve', array(
                'options' => array(
                    'strength'=>'+1 strength',
                    'sight'=>'+1 sight',
                    'health'=>'+3 health'
                    ),
                'default' => 'strength')
            );
            echo $this->Form->end('Level up !');
            }
        ?>

        <?php pr($raw); ?>

    </div>

</html>
