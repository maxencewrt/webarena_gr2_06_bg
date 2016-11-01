<h1>Créer un nouveau compte</h1>
<?php
    $n = rand(0,100000);
    echo $this->Form->create();
    echo $this->form->input('id' , array('type'=>'hidden', 'value'=> $n ));
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->button(__("Créer un compte"));
    echo $this->Form->end();?>

    <h2> Informations </h2>
    <?php echo $message;?>
