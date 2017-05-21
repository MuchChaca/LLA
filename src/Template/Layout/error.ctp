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
?>
<!--<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1><?= __('Error') ?></h1>
        </div>
        <div id="content">
            <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>
        </div>
        <div id="footer">
            <?= $this->Html->link(__('Back'), 'javascript:history.back()') ?>
        </div>
    </div>
</body>
</html>-->


<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			<?= $cakeDescription ?>
		</title>
		<?= $this->Html->meta('icon') ?>
		<?= $this->Html->css('styles.css') ?>
	</head>
	
	<body>
		<div id="corps">
			<header>
				<a><?= $this->Html->image('logoLLA.png') ?></a>
				<a href="http://www.athle.fr/ "> <?= $this->Html->image('top.ligue.png') ?></a>
				<h1>LIGUE LORRAINE D'ATHLÉTISME	</h1>		
			</header>	
			
			<nav>
				<ul id="menu">				
					<li class="bouton_gauche"><a>ACCUEIL</a></li>
					<li class="bouton_gauche"><a>...</a></li>
					<li class="bouton_droite"><a>CONNEXION</a></li>
				</ul>
			</nav>
            <section>
                <?= $this->Html->image('construction.jpg'); ?>
            </section>
            <footer>
				Copyright © 2015 LLA - Tous droits réservés
			</footer>		
		</div>		
	</body>	
</html>
