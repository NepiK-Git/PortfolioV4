<?php 

require "modele/connexion.modele.php";
 
 if (isset($_SESSION['idu'])) {
    //header('Location: cv');
}

if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo'])) {
        if (!empty($_POST['mdp'])) {
            $pseudo = $_POST['pseudo'];
            $mdp = sha1($_POST['mdp']);
            $requete = getUtilisateur($pseudo, $mdp);
            if ($requete) { 
                    $_SESSION['idu'] = $requete['idu'];
                    $_SESSION['pseudo'] = $requete['pseudo'];
                    $_SESSION['prenomu'] = $requete['prenomu'];
                    $_SESSION['nomu'] = $requete['nomu'];
                    header('Location: gestionAdmin');
            } else {
                Alerts::setFlash("Identifiants incorrects.", "danger");
            }
        } else {
            Alerts::setFlash("Veuillez saisir votre mot de passe", "warning");
        }
    } else {
        Alerts::setFlash("Veuillez saisir votre pseudo", "warning");
    }
}

// Changer le Profil
if (isset($_POST['edit'])) {
    $pseudo = $_POST['pseudo'];
    $prenomu = $_POST['prenomu'];
    $nomu = $_POST['nomu'];
    $mdp = sha1($_POST['mdp']);
    $update = profil($pseudo, $prenomu, $nomu, $mdp);
    $_SESSION = array();
    session_destroy();
    header("Location: gestionAdmin");
    exit();
}

// Insertion d'une Catégorie
if (isset($_POST['add-categorie'])) {
    $id_modal = $_POST['id_modal'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $lien = $_POST['lien'];
    $insertion = categorie($id_modal, $titre, $description, $lien);
}

require "admin/homeAdmin.php";

?>

