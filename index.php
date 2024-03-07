<?php

    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index_style.css">
    <link rel="stylesheet" href="assets/css/indexbody.css">
    <link rel="stylesheet" href="assets/css/footer-style.css">
    <script src="https://kit.fontawesome.com/a2b25edcff.js" crossorigin="anonymous"></script>
    <title>index</title>
</head>
<body>
    <header>
        <div class="back">
            <div class="menu container">
                <a href="#" class="logo">Logo</a>
                <input type="checkbox" id="menu" />
                <label for="menu">
                    <img src="imagenes/menu.png" class="menu-icono" alt="">
                </label>
                <nav class="navbar">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="login.php">Inicio Sesión</a></li>
                        <li><a href="logout.php">Cerrar Sesión</a></li>
                        <li><a href="">Perfil</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<div class="container-icon">

    <div class="icons">
        <a href="tv.html">
            <i class="fa-solid fa-tv"></i>
        </a>

        <a href="musica.html">
            <i class="fa-solid fa-music"></i>
        </a>
    
        <a href="video.html">
            <i class="fa-solid fa-play"></i>
        </a>
    
        <a href="pelicula.html">
            <i class="fa-solid fa-film"></i>
        </a>
    
        <a href="juego.html">
            <i class="fa-solid fa-gamepad"></i>
        </a>
    
        <a href="libro.html">
            <i class="fa-solid fa-book"></i>
        </a> 
    </div>
</div>

<footer>
    <div class="container-footer">
        <h3>Multimedia Web</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem molestiae aliquid optio exercitationem repudiandae at sunt officia ad voluptate pariatur non, qui nemo sapiente explicabo totam. Vitae impedit perferendis asperiores!</p>
        <ul class="socials">
            <li><a href="tv.html"><i class="fa-solid fa-tv"></i></a></li>
            <li><a href="musica.html"><i class="fa-solid fa-music"></i></a></li>
            <li><a href="video.html"><i class="fa-solid fa-play"></i></a></li>
            <li><a href="pelicula.html"><i class="fa-solid fa-film"></i></a></li>
            <li><a href="juego.html"><i class="fa-solid fa-gamepad"></i></a></li>
            <li><a href="libro.html"><i class="fa-solid fa-book"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2024 Multimedia Web. diseñado por <span>Johan David Arguello Medellin</span></p>
    </div>
</footer>

</body>
</html>