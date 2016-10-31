<?php $this->assign('title', 'Connexion');?>

Please enter your IDs in blank fields below to log in :

<?php echo $this->Form->create('Connection'); ?>

<div class="row">
        <?php echo $this->Form->input('username');?>
        <?php echo $this->Form->input('password');?>
</div>
