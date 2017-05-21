
<?php
$cakeDescription = 'Site Officiel de la ligue Lorraine d\'Athlétisme';
?>

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
				<a><?= $this->Html->image('logoLLA.png', ['class' => 'left']) ?></a>
				<a href="http://www.athle.fr/" target="_blank"> <?= $this->Html->image('top.ligue.png', ['class' => 'right']) ?></a>
				<h1>LIGUE LORRAINE D'ATHLÉTISME	</h1>
			</header>	
			
			<nav>
				<ul id="menu">
					<li class="bouton_gauche"><?= $this->Html->link('ACCUEIL', ['controller' => 'Pages','action' => 'display']) ?></li>
					<li class="bouton_gauche"><?= $this->Html->link('CLUBS', ['controller' => 'Clubs', 'action' => 'index']) ?></li>
					<ul id="menu-vertical">
                        <li class="bouton_gauche"><?= $this->Html->link('LICENCIÉS', ['controller' => 'Licensees', 'action' => 'index']) ?>
                            <ul>
                                <li><?= $this->Html->link('ATHLÈTES', ['controller' => 'Athletes', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link('ENTRAINEURS', ['controller' => 'Trainers', 'action' => 'index']) ?></li>
                            </ul>
                        </li>
                    </ul>
					<li class="bouton_droite"><a>CONNEXION</a></li>
				</ul>
			</nav>
            <section><br>
                <?= $this->fetch('content') ?>
            <br></section>
            <footer>
				Copyright © 2015 LLA - Tous droits réservés
			</footer>		
		</div>		
	</body>	
</html>