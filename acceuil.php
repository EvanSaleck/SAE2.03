<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link href="style.css" rel="stylesheet" />
</head>
<body>
    <nav>
        <ul>
            <h2>Ammar-School Digital</h2>
            <li><a href="default.asp">Home</a></li>
            <li><a href="news.asp">News</a></li>
            <li><a href="contact.asp">Contact</a></li>
            <li><a href="about.asp">About</a></li>
            <li class="admin"><a href="about.asp">Admin panel</a></li>
        </ul>
    </nav>
    <header>
        <h1>Ammar-School Digital</h1>
        <p>L'école de vos rêves.</p>
        <a href="#">Regarde nos offres</a>
        <div class="background-img"></div>
        
    </header>
    <div class="rainbow-bar"></div>

    <main>
        <h3>Nos formations</h3>
        <article class="items">
            <section>
                <img src="https://www.planetegrandesecoles.com/wp-content/uploads/2022/10/Oussama-ammar-1-850x499.jpeg" alt="">
                <h4>Web marketing digital</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
            <section>
                <img src="https://www.planetegrandesecoles.com/wp-content/uploads/2022/10/Oussama-ammar-1-850x499.jpeg" alt="">
                <h4>Pro Player LOL</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
            <section>
                <img src="https://www.planetegrandesecoles.com/wp-content/uploads/2022/10/Oussama-ammar-1-850x499.jpeg" alt="">
                <h4>Crypto Marketing</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus quisquam, ea explicabo repellendus nobis vel minima laborum sapiente cum cupiditate quod delectus perspiciatis, tenetur labore est tempora. Unde, labore iure.</p>
                <p class="price">8500€ / an</p>
                <a href="">Je prends</a>
            </section>
        </article>
    </main>
    <footer>
        <p>
            <a>Made With â¤ï¸ By Group 2 (1A1) | 2023</a>   
            <a> <br>Morin Gabin, Autret Jules, Police Dorian, Saleck Evan </a>
            <a> <br> SAE 2.03 </a>
            <a class="date"> <? echo date("d/m/Y"); ?> </a>
            <!-- Echo des infos user Agent -->
            <a class="info"> <? echo $_SERVER['HTTP_USER_AGENT']; ?> </a>
        </p>
    </footer>
</body>
</html>