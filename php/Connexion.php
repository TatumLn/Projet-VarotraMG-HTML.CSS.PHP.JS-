<?php

session_start();

//Declarartion variable
$utilisateur = "";
$errors = array();


//Connexion à la base de donnéé
$conn = mysqli_connect('127.0.0.1', 'root', '', 'evarotra');

//On vérifie si la connexion a bien été établie
if(!$conn){
    die("<script>alert('Aaaah impossible de se connecter à la base de donnée ! Réessayez plus tard.')</script>");
}

//Inscription 
if(isset($_POST['submit'])){

    $sexe = $_POST['sexe'];
    $utilisateur = $_POST['utilisateur'];
    $mdp = $_POST['mdp'];
    $cmdp = $_POST['cmdp'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $num_cin = $_POST['num_cin'];

//Verification du mot de passe
if ($mdp != $cmdp) {
    array_push($errors, "==>Les 02 mots de passe ne correspont pas!!<==");
}

//Verification si l'utilisateur existe déjà
    $user_check = "SELECT * FROM olona WHERE utilisateur = '$utilisateur' OR email = '$email' OR phone_number = '$phone_number' OR num_cin = '$num_cin' LIMIT 1";
    $result = mysqli_query($conn,$user_check );
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['utilisateur'] === $utilisateur) {
            array_push($errors, "==>L'ID_Utilisateur existe déjà!<=="); 	 	
        }

        if ($user['email'] === $email) {
            array_push($errors, "==>L'Adresse email est déja inscrit!<==");
        }

        if ($user['phone_number'] === $phone_number) {
            array_push($errors, "==>Ce numéro est déja inscrit par le propriétaire!<==");
        }

        if ($user['num_cin'] === $num_cin) {
            array_push($errors, "==>le propriétaire de ce CIN s'est déjà inscrit!<==");
        }
    }

//Envoie des données de l'utilisateur à la base de donnée


          $query = "INSERT INTO olona(utilisateur, mdp, email, phone_number, num_cin) VALUES ('$utilisateur','$mdp','$email','$phone_number','$num_cin')";	   
          mysqli_query($conn,$query);
    $_SESSION['utilisateur'] = $utilisateur;
    $_SESSION['success'] ="WOopie! Vous êtes actuellement connecté!";
    header('location: Remerciement.php');
      }

//Connexion membre
if (isset($_POST['valider'])) {
    $utilisateur = $_POST['utilisateur'];
    $mdp  =  $_POST['mdp'];

//Verification si la un des tables est vide!
     if (empty($utilisateur)) {
         array_push($errors, "l'ID_Utilisateur ne peut pas être vide!");
     }

     if (empty($mdp)) {
         array_push($errors, "le mot de passe ne peut pas être vide!");
     }

         $query = "SELECT * FROM olona WHERE utilisateur= '$utilisateur' AND mdp='$mdp'";
         $results = mysqli_query($conn, $query);
     if (mysqli_num_rows($results) == 1) {
         $row = mysqli_fetch_array($results);
         $_SESSION['id'] = $row["id"];
         $_SESSION['utilisateur'] = $row["utilisateur"];
         header('location: User_page.php');
     }
     else{
         array_push($errors, "Votre mote de passe ou ID_Utilisateur est incorrect");
     }
     }

?>