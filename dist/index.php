<?php $section='Bienvenue';?>

<?php include('parts/header.php');?>

<?php

if (isset($_GET['section'])) {
    $section = $_GET['section'];

    if ($section == 'Home' || $section == 'Bienvenue') {
        include('parts/accueil.php');
    } else if ($section == 'Formation') {
        include('parts/formation.php');
    } else if ($section == 'Etudiants') {
        include('parts/etudiants.php');
    } else if ($section == 'Actualites') {
        include('parts/actualites.php');
    } else if ($section == 'Contact') {
        include('parts/contact.php');
    } else if ($section == 'Confidentialite') {
        include('parts/confidentialite.php');
    } else if ($section == 'Modules') {
        include('parts/modules.php');
    } else if ($section == 'Actualites') {
        include('parts/infos-actus.php');
    } else if ($section == 'Profil') {
        include('parts/infos-etudiant.php');
    }
}
else{include('parts/accueil.php');}

?>

<?php include('parts/footer.php'); ?>

<script src="js/bundle.min.js"></script>
