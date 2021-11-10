<?php

include ('Connexion.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Page d'inscription & connexion</title>
        <link rel="stylesheet" href="../css/style01.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            @font-face {
                font-family: Capriola-Regular;
                src: url("../fonts/Capriola-Regular.ttf");
            }
            @font-face {
                font-family: OpenSansCondensed-Light;
                src: url("../fonts/OpenSansCondensed-Light.ttf");
            }
            @font-face {
                font-family: ZenTokyoZoo-Regular;
                src: url("../fonts/ZenTokyoZoo-Regular.ttf");
            }
        </style>
    </head>

    <body>
        <!-- INSCRIPTION -->
        <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="Login & Registrer.php" method="POST">
            <?php include('error.php');?>
                <p>Inscription>Page</p>
                <h1><img src="../img/E-VarotraMG logo.jpeg" alt="Logo-E-Varotra" width="170px"></h1>
                <div class="social-container">
                    <span>S'inscrire avec :</span>
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-twitter"></i></a>
                </div>
                <span>
                    <input type="radio" id="male" name="sexe" checked><label class="male" for="male" value="male">Masculin 
                  </span>
                  <span>
                    <input type="radio" id="female" name="sexe"><label class="female" for="female" value="female">Feminin
                </span>
                <br /><br />
                <input type="text" placeholder="ID_Utilisateur" name="utilisateur" required/>
                <input type="password" placeholder="Entrer un mot de passe" name="mdp" required/>
                <input type="password" placeholder="confirmer votre mot de passe" name="cmdp" required/>
                <input type="email" placeholder="Veuillez saisir votre email" name="email" required/>
                <input type="text" id="phone_number" placeholder="+261" minlenght="13" maxlenght="13" name="phone_number" required/>
                <input type="text" placeholder="Numero CIN" minlenght="12" maxlength="12" name="num_cin" required/>
                <input type="checkbox" required/>J'accepte toutes les termes & confidentialités du site <a href="#">(Termes & Confidentialités)</a>
                <button name="submit">S'inscrire</button>
                <br /><br />
                <br /><br />
            </form>
        </div>
        <!-- CONNEXION -->
        <div class="form-container sign-in-container">
            <form action="Login & Registrer.php" method="POST">
            <?php include('error.php');?>
                <p>Connexion>Page</p>
                <h1><img src="../img/E-VarotraMG logo.jpeg" alt="Logo-E-Varotra" width="170px"></h1>
                <div class="social-container">
                    <span>Se connecter avec :</span>
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-twitter"></i></a>
                </div>
                <input type="text" placeholder="Entrer votre ID_Utilisateur" name="utilisateur" />
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" />
                <a href="#">Mot de passe oublié?</a>
                <button name="valider">Se Connecter</button>
                <br /><br />
                <br /><br />
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Nous vous souhaitons la bienvenue!</h1>
                    <p>Pour commencer à nous rejoindre veuillez completer les informations suivantes s'il vous plait! merci&#128522</p>
                    <button class="ghost" id="signIn">Se Connecter</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Cher Utilisateur</h1>
                    <p>Veuillez saisir votre identifiant s'il vous plait! merci&#128522	</p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
                </div>
            </div>
        </div>

<div class="footer">
<b>	Suivez-nous sur </b>
	<div class="icons">
		<a href="https://github.com/E-VarotraMG" target="_blank" class="social"><i class="fa fa-github"></i></a>
		<a href="https://www.instagram.com/E-VarotraMG/" target="_blank" class="social"><i class="fa fa-instagram"></i></a>
		<a href="https://twitter.com/E-VarotraMG" target="_blank" class="social"><i class="fa fa-twitter"></i></a>
		<a href="https://linkedin.com/in/E-VarotraMG/" target="_blank" class="social"><i class="fa fa-linkedin"></i></a>
		</div>
	</div>

 <script src="../js/myScript.js"></script>
</body>
</html>