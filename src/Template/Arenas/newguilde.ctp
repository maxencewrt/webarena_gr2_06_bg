<h1>Créer une nouvelle Guilde</h1>
<?php

$guild_id = rand(0,100000);

echo $this->Form->create();
echo $this->form->input('id' , array('type'=>'hidden', 'value'=> $guild_id ));
echo $this->Form->input('name');
echo $this->Form->button(__("Créer une Guilde"));
echo $this->Form->end();?>

<h2> Informations </h2>
<?php echo $messageGuilde;?>
