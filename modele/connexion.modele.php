<?php

function getUtilisateur($pseudo, $mdp) {
	global $bdd;
	$requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp");
	$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
	$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	$requete->execute();
	return $requete->fetch();
 die();
}

function profil($pseudo, $prenomu, $nomu, $mdp) {
	global $bdd;
	$update = $bdd->prepare("UPDATE utilisateurs SET pseudo = :pseudo, prenomu = :prenomu, nomu = :nomu, mdp = :mdp WHERE idu = '".$_SESSION['idu']."' ");
	$update->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
	$update->bindValue(':prenomu', $prenomu, PDO::PARAM_STR);
	$update->bindValue(':nomu', $nomu, PDO::PARAM_STR);
	$update->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	return $update->execute();
}

function categorie($id_modal, $titre, $description, $lien) {
	global $bdd;
	$insertion = $bdd->prepare("INSERT INTO projets (id_modal, titre, description, lien) VALUES (:id_modal, :titre, :description, :lien)");
	$insertion->bindValue(':id_modal', $id_modal, PDO::PARAM_STR);
	$insertion->bindValue(':titre', $titre, PDO::PARAM_STR);
	$insertion->bindValue(':description', $description, PDO::PARAM_STR);
	$insertion->bindValue(':lien', $lien, PDO::PARAM_STR);
	return $insertion->execute();
}

?>