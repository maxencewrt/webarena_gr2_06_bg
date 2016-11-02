<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$projectDescription = 'Web Arena : un duel des plus absurde';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $projectDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('webarena') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <section class="jeu">
        <h1>Web Arena</h1>
    </section>
</head>
<body>
    <nav>
        <ul>
            <li>
                <h3><?= $this->fetch('title') ?></h3>
            </li>
            <li>
                <h3><?php echo $this->Html->link(' Accueil ', array('controller' => 'Arenas', 'action' => '/')); ?></h3>
            </li>
            <li>
                <h3><?php echo $this->Html->link(' Combattant ', array('controller' => 'Arenas', 'action' => 'fighter')); ?></h3>
            </li>
            <li>
                <h3><?php echo $this->Html->link(' Connexion ', array('controller' => 'Arenas', 'action' => 'login')); ?></h3>
            </li>
            <li>
                <h3> <?php echo $this->Html->link(' Vision ', array('controller' => 'Arenas', 'action' => 'sight')); ?></h3>
            </li>
            <li>
                <h3><?php echo $this->Html->link(' Journal ', array('controller' => 'Arenas', 'action' => 'diary'));?></h3>
            </li>
        </ul>
    </nav>
    
    <?= $this->Flash->render() ?>
        
    <section>
        <?= $this->fetch('content') ?>
    </section>
    
    <footer>
        <ul class="bandeau">
            <li>Groupe GR2-06-BG</li>
            <li>| Sahar - Kevin - Jonathan - Maxence</li>
            <li>| Option : Connexion aux réseaux sociaux</li>
            <li>| http://localhost/webarena/Arenas | Version : webarena v0.1</li>
        </ul>
    </footer>
</body>
</html>
