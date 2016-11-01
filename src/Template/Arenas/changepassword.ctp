<h4>Modification de votre mot de passe</h4>
    <?php echo $this->Form->create('Changepassword');

    echo $this->Form->input('userName', array("placeholder" => "Username", ['type' => 'email']));
    echo $this->Form->input('ancienMDP', array('type' => 'password','placeholder' => 'Ancien mot de passe'));
    echo $this->Form->input('newMPD', array('placeholder' => 'Nouveau mot de passe'));?>

    <?= $this->Form->submit('Changer le mot de passe', ['type' => 'submit']);?>
    <?= $this->Form->end();?>

    <h2> Informations </h2>
    <?php echo $messagechangemdp;?>
