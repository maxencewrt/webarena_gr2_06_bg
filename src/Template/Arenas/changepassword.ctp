<h4>Modification de votre mot de passe</h4>
    <?php echo $this->Form->create('Changepassword');

    echo $this->Form->input('name', array("placeholder" => "Username", ['type' => 'email']));
    echo $this->Form->password('ancienMDP', array("placeholder" => "ancien Password"));
    echo $this->Form->password('newMPD', array("placeholder" => "Nouveau Password"));?>

    <?= $this->Form->submit('Changer le mot de passe', ['type' => 'submit']);?>
    <?= $this->Form->end();?>

    <h2> Informations </h2>
    <?php echo $messagechangemdp;?>
