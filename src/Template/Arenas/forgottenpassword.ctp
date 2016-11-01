<h2>Réinitialiser votre mot de passe</h2>

    <?php echo $this->Form->create('ForgottenPassword');
      echo $this->Form->input('email', array('placeholder' => 'Votre email'));
    ?>

    <?= $this->Form->submit('Réinitialiser', ['type' => 'submit']);?>
    <?= $this->Form->end();?>
