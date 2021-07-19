<?php include('parts/header.php'); ?>

<?php

$section = $_GET['section'];

if($section == "1" || $section == ""){

    include('parts/accueil.php');
}
else if ($section == "2") {
    include('parts/formation.php');
}
else if ($section == "3") {
    include('parts/etudiants.php');
}
else if($section == "4") {
    include('parts/actualites.php');
}
else if ($section == "5") {
    include('parts/contact.php');
}
else if ($section == "6") {
    include('parts/confidentialite.php');
}
else if ($section == "7") {
    include('parts/modules.php');
}
else if ($section == "8") {
    include('parts/infos-actus.php');
}
else if ($section == "9") {
    include('parts/infos-etudiant.php');
}
?>

<?php include('parts/footer.php'); ?>

