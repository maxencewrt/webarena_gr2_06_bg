<?php $this->assign('title', 'Connexion');?>

Please enter your IDs in blank fields below to log in :

<?php echo $this->Form->create('Connection'); ?>

<div class="row">
        <?php echo $this->Form->input('username', array("placeholder" => "Username"));?>
        <?php echo $this->Form->input('password', array("placeholder" => "Password"));?>
        <?= $this->Form->button('Connection', ['type' => 'submit']);?>
        <?= $this->Form->end();?>
</div>

<h2>Inscription</h2>

<?php echo $this->Form->create("User");

echo $this->Form->input("username", array("placeholder" => "Username"));
echo $this->Form->input("mail", array("placeholder" => "Email"));
echo $this->Form->input("password", array("placeholder" => "Password"));
?>

<?= $this->Form->button('Finish', ['type' => 'submit']);?>
<?= $this->Form->end();?>
