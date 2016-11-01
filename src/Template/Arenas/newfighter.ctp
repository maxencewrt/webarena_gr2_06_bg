<h1>Créer un nouveau combatant</h1>
<?php

    $player_id = rand(0,100000);
    $x = rand(0,15);
    $y = rand(0,10);
    $defaultLevel = 1;
    $defaultXP = 0;
    $defaultSight = 2;
    $defaultStrength = 1;
    $defaultHealth = 5;

    echo $this->Form->create();
    echo $this->form->input('id' , array('type'=>'hidden', 'value'=> $player_id ));
    echo $this->Form->input('name');
    echo $this->Form->input('player_id', array('type'=>'hidden','value'=> '545f827c-576c-4dc5-ab6d-27c33186dc3e'));
    echo $this->form->input('coordinate_x' , array('type'=>'hidden', 'value'=> $x ));
    echo $this->form->input('coordinate_y' , array('type'=>'hidden', 'value'=> $y ));
    echo $this->form->input('level' , array('type'=>'hidden', 'value'=> $defaultLevel ));
    echo $this->form->input('xp' , array('type'=>'hidden', 'value'=> $defaultXP ));
    echo $this->form->input('skill_sight' , array('type'=>'hidden', 'value'=> $defaultSight ));
    echo $this->form->input('skill_strength' , array('type'=>'hidden', 'value'=> $defaultStrength ));
    echo $this->form->input('skill_health' , array('type'=>'hidden', 'value'=> $defaultHealth ));
    echo $this->form->input('current_health' , array('type'=>'hidden', 'value'=> 5 ));
    echo $this->form->input('guild_id');

    echo $this->Form->button(__("Créer un combatant"));
    echo $this->Form->end();?>
