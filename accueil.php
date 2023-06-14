<?php
 session_start();


 if(!isset($_SESSION['email'])) // If session is not set then redirect to Login Page
  {
      header("Location:index.php");  
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link rel="stylesheet" type="text/css" href="./src/css/index.css"/>
</head>
<body>
    <nav>
        <ul>
            <h2>Ammar-School Digital</h2>
            <li><a href="#">Accueil</a></li>
            <li><a href="#formation">Nos formations</a></li>
            <li><a href="#campus">Le campus</a></li>
            <li><a href="#">À propos</a></li>
            <li class="admin"><a href="./admin/admin.php">Admin panel</a></li>
        </ul>
    </nav>
    <header>
        <h1>Ammar-School Digital</h1>
        <p>L'école de vos rêves.</p>
        <a href="#formation">Regardes nos offres</a>
        <div class="background-img"></div>
        
    </header>
    <div id="formation" class="rainbow-bar"></div>

    <main>
        <h3 class="highlight">Nos formations</h3>
        <article class="items">
            <section>
                <img src="https://f.hellowork.com/blogdumoderateur/2022/05/se-former-metier-responsable-webmarketing-digital-school-of-paris.jpeg" alt="">
                <h4>Web marketing digital</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
            <section>
                <img src="https://cdn.oneesports.gg/cdn-data/2022/02/LeagueOfLegends_EvilGeniuses_Jiizuke-1600x900-1-1024x576.webp" alt="">
                <h4>Pro Player LOL</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
            <section>
                <img src="https://v2.cimg.co/news/84456/212958/top-17-crypto-blockchain-marketing-agencies.jpg" alt="">
                <h4>Crypto Marketing</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
            <section>
                <img src="https://academy.avast.com/hubfs/New_Avast_Academy/Hackers/Hacker-Thumb-a1.png" alt="">
                <h4>Dark hacking black hat</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
        </article>
        <div id="campus" class="rainbow-bar"></div>
        <h3 class="space-up highlight">Le campus</h3>
        <article class="campus">
            <section>
                <h4>Un cadre <span>idéale</span></h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt non sit quae nobis quod atque ad architecto quisquam corrupti quo reiciendis vel, quis inventore itaque! Voluptatem fugiat similique enim reiciendis.</p>
            </section>
            <section>
                <h4>Une ambience <span>exceptionnel</span></h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt non sit quae nobis quod atque ad architecto quisquam corrupti quo reiciendis vel, quis inventore itaque! Voluptatem fugiat similique enim reiciendis.</p>
            </section>
            <section>
                <h4>Des professeurs <span>uniques</span></h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt non sit quae nobis quod atque ad architecto quisquam corrupti quo reiciendis vel, quis inventore itaque! Voluptatem fugiat similique enim reiciendis.</p>
            </section>
            <section>
                <h4>Des études <span>inoubliables</span></h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt non sit quae nobis quod atque ad architecto quisquam corrupti quo reiciendis vel, quis inventore itaque! Voluptatem fugiat similique enim reiciendis.</p>
            </section>
            <div></div>
        </article>
    </main>

    <footer>
        <p>© Ammar School 2022-2023</p>
    </footer>
</body>
</html>