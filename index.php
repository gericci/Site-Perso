<?php
error_reporting(E_ALL); 
$page=1;
$title = "Emmanuel DEMEY - Spécialiste du WEB dans la Région Lilloise - Mon Parcours";
$description = "Grâce à ce document, vous trouverez tout mon parcours professionnel et universitaire, avec notamment tous les projets sur lesquels j'ai travaillé.";
include "header.php";


require 'mustache/src/Mustache/Autoloader.php';
Mustache_Autoloader::register();

$m = new Mustache_Engine;
$array = json_decode(file_get_contents('data.json'));
?>
			

			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					<!-- headline -->
					<div class="clear"></div>
					<div id="headline">
						<span class="main">Emmanuel DEMEY</span>
						<span class="sub">Spécialiste des Technologies Web - Ingénieur Etude et Développement (Atos)</span>
						
					</div>
					<!-- ENDS headline -->
					
					<!-- content -->
					<div id="content">
						<h4 class="line-divider">Expériences Professionnelles</h4>
						<?php
							print $m->render(file_get_contents('template.mustache'), $array);
						?>
						
						<h4 class="line-divider">Etudes</h4>
						
						<h5>2006 - 2010 : <a href="http://www.ig2i.fr/" target="_blank">Institut en Génie Informatique et Industriel (Lens)</a></h5>
						
						<ul>
							<li>Options Génie des Systèmes Avancés</li>
							<li>Responsable Communication et Membre de l'équipe Prospection de la Junior Entreprise Mind'up<li>
							<li>Génie Informatique : C/C++, Java, PHP, Bases de Données</li>
							<li>Génie Industriel : Electronique, Electronique de Puissance, Automatisme, Automatique</li>
						</ul>	
						
						<h5>2004 - 2006 : <a href="http://www.iutenligne.net/IUT/Valenciennes" target="_blank">IUT Génie Electrique et Informatique Industrielle (Valenciennes)</a></h5>
						
						<ul>
							<li>Options Réseaux Locaux Industriels</li>
							<li>Génie Informatique : C, Assembleur, Bases de Données</li>
							<li>Génie Industriel : Electronique, Electronique de Puissance, Automatisme</li>
						</ul>
						
						
						<h4 class="line-divider">Projets Personnels</h4>
						
						<ul>
							<li>Administrateur du site <a href="http://brassband-npdc.fr/" target="_blank">http://brassband-npdc.fr/</a> (Joomla)</li>
							<li>Administrateur du site <a href="http://emmanueldemey.fr/" target="_blank">http://emmanueldemey.fr/</a> (PHP, CSS, Mustache)</li>
							<li>Voyages</li>
						</ul>
						
						<h4 class="line-divider">Loisirs</h4>
						
						<ul>
							<li>Musique : membre du Brass Band du Nord Pas-de-Calais (Champion de France 2009, 2010 et 2011)</li>
							<li>Sport : Squash, vélo ...</li>
							<li>Voyages</li>
						</ul>
						
						
						
					</div>
					<!-- ENDS content -->
				</div>
				<!-- ENDS wrapper-main -->
			</div>
<?php
include "footer.php";
?>
