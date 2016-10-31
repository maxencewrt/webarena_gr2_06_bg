<?php $this->assign('title', 'Connexion');?>

Please enter your IDs in blank fields below to log in :

<?php echo $this->Form->create('Connection'); ?>

<div>
        <?php echo $this->Form->create(null);
        echo $this->Form->input('userName', array("placeholder" => "Username", ['type' => 'email']));?>
        <?php echo $this->Form->password('password', array("placeholder" => "Password"));?>
        <?= $this->Form->submit('Login', ['type' => 'submit']);?>
        <?= $this->Form->end();?>

        <h3> Informations </h3>
        <?php echo $message;?>
</div>

<h2>Inscription</h2>

<a href="newlogin"><input type="button" name="créer un compte "value="créer un compte "/></a>
