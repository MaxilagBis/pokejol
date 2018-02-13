<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       
    </header>
    
    <!-- Le menu -->
    
    <?php include("menu.php"); ?>
    
    <!-- Le corps -->
    <a href="bonjour.php?nom=Dupont&prenom=Jean&repeter=8">Dis-moi bonjour !</a>
    <div id="corps">
        <h1>Mon super site</h1>
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
			
			<form method="post" action="cible.php">
 
			<p>prenom
				<input type="text" name="prenom" />
				<input type="submit" value="Valider" />
			</p>
		</form>
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>