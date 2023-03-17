<!DOCTYPE html>
<?php 
require "./head.php";
include "./datas.php";
?>


<body>
        <div id="container">
            <a href="index.html" id="return">Retour page principale</a>
        </div>
    <div class="wrapper">
        
            <div class="left-content">
                <img class="left__img" src="./images/photo pour cv.png" alt="photo Jules">
                <h1 class="left__title">Coordonnées</h1>
                    <ul>
                        <?php foreach ($coordonnées as $key => $value) : ?>

                        <li><?= $value;?></li>

                        <?php endforeach; ?>
                    </ul>
                <h1 class="left__title">Compétences</h1>
                    <ul id="list">
                        <li><strong>Bureautique: </strong>Excel, Word, Powerpoint.  </li>
                        <li><strong>HTML: </strong>Réalisation de squelette simple avec sémantisation des balise, formulaires, liens, images.</li>
                        <li><strong>CSS: </strong>Formatage de la page, flexbox, hover.</li>
                        <li><strong>PHP: </strong>Bases algorythmiques, boucles for, foreach, conditions if, elseif, gestion de formulaires.</li>
                        <li><strong>Logiciels utilisés au quotidien: </strong>VScode, git, github, terminal linux.</li>
                    </ul>
                <h1 class="left__title">Centres d'intérêts</h1>
                <ul>
                    <li>Environnement et développement durable.</li>
                    <li>Informatique, développement web, IA, jeux vidéos, tech en général.</li>
                    <li>Lecture, cuisine.</li>
                    <li>Sport : musculation, escalade.</li>
                </ul>
            </div>

            <div class="right-content">
                <header class="intro">

                    <h1 class="intro__title">Jules Fert </h1>
                    <div class="intro__subtitle"><mark>Etudiant en développement web</mark></div><br>
                    <h1 class="intro__title">Profil professionnel</h1>
                    <p class="intro__text">Je m'appelle Jules Fert, je suis actuellement étudiant dans la formation <strong>O'Clock Développement Web et Web mobile en 6 mois.</strong> Salarié depuis 3 ans dans un magasin spécialisé bio, c'est pour changer de vie et pouvoir vivre de ma passion que je me lance dans le développement web. Je réalise cette formation dans le but de me reconvertir en développement web.</p>

                </header>

                <section class="parkour">
                    <h1 class="parkour__title">Parcours professionnel</h1>

                        <h3 class="parkour__subtitle">Projet de site internet - ArtBook Digital - <time>05/2022</time>.</h3>
                            <p>Réalisation d'un site internet vitrine simple en HTML/CSS présentant un ArtBook digital à partir d'une maquette.</p>

                        <h3 class="parkour__subtitle">Adjoint de rayon épicerie - <em>Biocoop du Val d'azergues.</em></h3>
                            <p>Gestion des tâches sur le rayon sec du magasin, mise en place des produits du mois, gestion des promotions. Commandes auprès des producteurs locaux, gestion et intégration des factures.</p>

                        <h3 class="parkour__subtitle">Volontaire en service civique - <em>Récup et Gamelles.</em></h3>
                            <p>Gestion de la vie bénévole, renforts lors d'animations de sensibilisation au gaspillage alimentaire.</p>

                        <h3 class="parkour__subtitle">Stagiaire en animation nature - <em>Parc des oiseaux</em></h3>
                            <p>Animations auprès de classes de maternelles et primaires sur les différents oiseaux du parc.</p>
                </section>

                <section class="formation">
                    </form>
                    <h1 class="formation__title">Formations</h1>
                        <h3 class="formation__subtitle">Titre professionnel Développeur web et web mobile - En cours</h3>

                        <h3 class="formation__subtitle">Créer son site web en HTML/CSS - <time>05/2022</time></h3>
                            <p>OpenClassrooms</p>

                        <h3 class="formation__subtitle">Licence professionnelle ABCD - Agriculture Biologique Conseils et Developpement <time>09/2018</time> - <time>07/2019</time></h3>
                            <p></p>
                        <h3 class="formation__subtitle">BTSA GPN - Gestion et protection de la nature <time>09/2015</time> - <time>07/2017</time></h3>

                        <h3 class="formation__subtitle">Bac S-SVT - <time>2015</time></h3>

                </section>

            </div>    
            


            
    
    </div>

    <?php include "footer.php";
    ?>