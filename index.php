<?php
// DÃ©claration des variables de connexion bdd
$username = "root";
$password = "29Lannion!";
$host = "localhost";
$dbname = "utilisateurs";

// Connexion bdd
$connect = new mysqli($host, $username, $password, $dbname);

//On vÃ©rifie la connexion
if ($connect->connect_errno) {
    echo 'Erreur : ' . $connect->connect_error . ' Veuillez réessayer plus tard';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Connexion | SAE 2.03 </title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="./src/img/favicon.ico" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./src/css/connexion.css" />
</head>

<body>
    <h2>Connexion</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <h1>Création de compte</h1>
                <span>Utilisez votre email</span>
                <input type="text" name="name" placeholder="Nom" />
                <input type="text" name="surname" placeholder="Prénom" />
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
                <a href="#">Mot de passe oublié ?</a>
                <button type="submit" name="signIn">Connexion</button>
            </form>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['signUp'])) {
                // Code pour gÃ©rer l'action de l'inscription ici
                // Par exemple, vous pouvez rÃ©cupÃ©rer les donnÃ©es du formulaire et les traiter
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                if (empty($name) || empty($surname) || empty($email) || empty($password)) {
                    echo '<script>alert("Remplissez tous les champs s\'il vous plaît")</script>';
                } else {
                    // Effectuer les opÃ©rations nÃ©cessaires, comme l'enregistrement de l'utilisateur dans la base de donnÃ©es
                    $secure_pass = password_hash($password, PASSWORD_BCRYPT);
                    $requete = "INSERT INTO users (nom, prenom, email, password) VALUES ('$name', '$surname', '$email', '$secure_pass')";
                    $resultat = $connect->query($requete);
                    if ($resultat) {
                    echo '<script>alert("Vous êtes bien inscrit")</script>';
                    } else {
                    echo '<script>alert("Erreur : Veuillez réessayer plus tard")</script>';
                    }
                    }
                    } else if (isset($_POST['signIn'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    if (empty($email) || empty($password)) {
                        echo '<script>alert("Remplissez tous les champs s\'il vous plaît")</script>';
                    } else {
                        // Effectuer les opérations nécessaires, comme la vérification des informations de connexion
                        $requete = "SELECT * FROM users WHERE email = '$email'";
                        $resultat = $connect->query($requete);
        
                        if ($resultat && $resultat->num_rows > 0) {
                            $row = $resultat->fetch_assoc();
                            $hashed_password = $row['password'];
        
                            if (password_verify($password, $hashed_password)) {
                                echo '<script>alert("Vous êtes connecté")</script>';
                                // Redirection vers la page d'accueil
                                session_start();
                                $_SESSION['email'] = $email;

                                if (isset($_SESSION['email'])) {
                                    $email = $_SESSION['email'];
                                    $requete = "SELECT * FROM users WHERE email = '$email'";
                                    $resultat = $connect->query($requete);
                                    $row = $resultat->fetch_assoc();
                                    $id = $row['id'];
                                    $nom = $row['nom'];
                                    $prenom = $row['prenom'];
                                    $email = $row['email'];
                                    $password = $row['password'];

                                    echo '<script>alert("Vous êtes connecté")</script>';
                                    header('Location: ./accueil.php');

                                } else {
                                    echo '<script>alert("Vous êtes déconnecté")</script>';
                                }
                            } else {
                                echo '<script>alert("Mot de passe incorrect")</script>';
                            }
                        } else {
                            echo '<script>alert("Adresse email non trouvée")</script>';
                        }
                    }
                }
            }
            ?>
        
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Se connecter</h1>
                        <p>Tu possèdes déjà un compte ?</p>
                        <button class="ghost" id="signIn">Allons-y !</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Créer un compte</h1>
                        <p>Tu n'as pas de compte 😭?</p>
                        <button class="ghost" id="signUp">Allons-y !</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>
                <a>Made With ❤️ By Group 2 (1A1) | 2023</a>
                <a> <br>Morin Gabin, Autret Jules, Police Dorian, Saleck Evan </a>
                <a> <br> SAE 2.03 </a>
            </p>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const signUpButton = document.getElementById('signUp');
                const signInButton = document.getElementById('signIn');
                const container = document.getElementById('container');
        
                signUpButton.addEventListener('click', function () {
                    container.classList.add("right-panel-active");
                });
        
                signInButton.addEventListener('click', function () {
                    container.classList.remove("right-panel-active");
                });
            });
        </script>
        