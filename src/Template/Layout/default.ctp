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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<section class="lienPage">
    <?php echo $this->Html->link(' Accueil ', array('controller' => 'Arenas', 'action' => '/'));
    echo $this->Html->link(' Fighter1 ', array('controller' => 'Arenas', 'action' => 'fighter'));
    echo $this->Html->link(' Login ', array('controller' => 'Arenas', 'action' => 'login'));
    echo $this->Html->link(' Sight ', array('controller' => 'Arenas', 'action' => 'sight'));
    echo $this->Html->link(' Diary ', array('controller' => 'Arenas', 'action' => 'diary'));?>
    </section>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('webarena.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        Groupe GR2-06-BG <br />
        Sahar - Kevin - Jonathan - Maxence <br />
        Option : Connexion aux réseaux sociaux <br />
        http://localhost/webarena/Arenas | Version : webarena v0.1<br />
    </footer>
</body>
</html>
