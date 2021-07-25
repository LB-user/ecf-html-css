<!DOCTYPE html>
<html lang="fr">

        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ECF : <?php if(isset($section)){echo $section;} else{echo 'Mon Site';} ?></title>
        <link rel="stylesheet" href="css/style.min.css">
        </head>
        <body>
        <header>
            <div class="container header-container">
                <div class="logo">
                    <a href="index.php?section=Home"><span>DWWM</span></a>
                </div>
                <nav class="main-nav">
                    <button class="toggle-menu" aria-expanded="false" aria-controls="menu">Menu</button>
                    <ul id="menu" class="menu" hidden>
                        <li class="menu-item">
                            <a href="index.php?section=Home" class="menu-link <?php if(isset($section) && $section=='Home'){echo 'menu-active';}?>">Accueil</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?section=Formation" class="menu-link 
                            <?php if(isset($section) && $section=='Formation'){echo 'menu-active';}?>"
                            target="blank">La Formation</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?section=Etudiants" class="menu-link <?php if(isset($section) && $section=='Etudiants'){echo 'menu-active';}?>" target="blank">Les &Eacute;tudiants</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?section=Actualites" class="menu-link <?php if(isset($section) && $section=='Actualites'){echo 'menu-active';}?>" target="blank">Actualités</a>
                        </li>
                        <li class="menu-item">
                            <a href="index.php?section=Contact" class="menu-link <?php if(isset($section) && $section=='Contact'){echo 'menu-active';}?>" target="blank">Nous Contacter</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="void"></div>