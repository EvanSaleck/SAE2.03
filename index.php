<?php 
 // DÃ©claration des variables de connexion bdd
$username = "root";
$password = "";
$host = "localhost";
$dbname = "utilisateurs";

// Connexion bdd 
$connect = new mysqli($host, $username, $password, $dbname);

//On vÃ©rifie la connexion
if($connect->connect_errno){
    echo('Erreur : ' .$connect->connect_error .'Veuillez rÃ©essayer plus tard');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion | SAE 2.03 </title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./src/img/favicon.ico"/>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./src/css/connexion.css"/>    

</head>
<body>
<h2>Connexion</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST">
			<h1>CrÃ©ation de compte</h1>
			<span>Utilisez votre email</span>
			<input type="text" name="name" placeholder="Nom" />
            <input type="text" name="surname" placeholder="PrÃ©nom" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Mot de passe" />
			<button type="submit" name="signUp">S'enregistrer</button>
		</form>
	</div>
<div class="form-container sign-in-container">
    <form action="#" method="POST">
        <h1>Connexion</h1>
        <span>Utilisez votre email</span>
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Mot de passe" />
        <a href="#">Mot de passe oubliÃ© ?</a>
        <button type="submit" name="signIn">Connexion</button>
    </form>
</div>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signUp'])) {
        // Code pour gÃ©rer l'action de l'inscription ici
        // Par exemple, vous pouvez rÃ©cupÃ©rer les donnÃ©es du formulaire et les traiter
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $secure_pass = password_hash($password, PASSWORD_BCRYPT);

        if (empty($name) || empty($surname) ||empty($email) || empty($password)) {
            echo '<script>alert("Remplissez tout les champs s\'il vous plaÃ®t")</script>';
        } else {
            // Effectuer les opÃ©rations nÃ©cessaires, comme l'enregistrement de l'utilisateur dans la base de donnÃ©es
            $requete = "INSERT INTO users (nom, prenom, email, password) VALUES ('$name', '$surname', '$email', '$secure_pass')";
            $resultat = $connect->query($requete);
            if ($resultat) {
                echo '<script>alert("Vous Ãªtes bien inscrit")</script>';
            } else {
                echo '<script>alert("Erreur : Veuillez rÃ©essayer plus tard )</script>';
            }
        }
    }else if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $secure_pass = password_hash($password, PASSWORD_BCRYPT);
        if (empty($email) || empty($password)) {
            echo '<script>alert("Remplissez tous les champs s\'il vous plaÃ®t")</script>';
        } else {
            // Effectuer les opÃ©rations nÃ©cessaires, comme la vÃ©rification des informations de connexion
            $requete = "SELECT * FROM users WHERE email = '$email' AND password = '$secure_pass'";	
            $resultat = $connect->query($requete);
            // VÃ©rifiez si la requÃªte a rÃ©ussI
            if (!$resultat) {
                echo 'bla';//'<script>alert("Erreur : Veuillez rÃ©essayer plus tard")</script>';
            } else if ($resultat == null || $resultat->num_rows == 0) {
                echo '<script>alert("Erreur : Vous n")</script>';
            }
            if ($resultat->num_rows > 0) {
                echo '<script>alert("Vous Ãªtes connectÃ©")</script>';
                // Renvoi vers index
                header('Location: index.php');
                exit; // Assurez-vous d'utiliser exit aprÃ¨s la redirection pour terminer le script
            } else {
                echo '<script>alert("Erreur : Veuillez rÃ©essayer plus tard")</script>';
            }
        }
    }
    

    ?>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Se connecter</h1>
				<p>Tu possÃ¨des dÃ©jÃ  un compte ?</p>
				<button class="ghost" id="signIn">Allons-y !</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>CrÃ©er un compte</h1>
				<p>Tu n'as pas de compte ðŸ˜­?</p>
				<button class="ghost" id="signUp">Allons-y !</button>
			</div>
		</div>
	</div>
</div>
<footer>
    <p>
        <a>Made With â¤ï¸ By Group 2 (1A1) | 2023</a>   
        <a> <br>Morin Gabin, Autret Jules, Police Dorian, Saleck Evan </a>
        <a> <br> SAE 2.03 </a>
    </p>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', function() {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', function() {
            container.classList.remove("right-panel-active");
        });
    });
</script>
</body>

