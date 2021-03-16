<?php 
        
$contenuTextarea = "";
$edit = 0;

// MODIFICATION
if (isset($_GET['edit'])) {
    $id = intval($_GET['edit']);
    $requete = $bdd->query("SELECT * FROM posts WHERE id = ".$id);
    $reponse = $requete->fetch();
    $contenuTextarea = $reponse['contenu'];
    $edit = $id;
}

// INSERTION
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['id'];
    $contenu = $_POST['contenu'];
    $id = $_POST['edit'];
    if ($_POST['edit'] == 0) {
        $requete = $bdd->prepare("INSERT INTO posts VALUES('', :contenu, NOW(), :user_id)");
        $requete->bindValue(":contenu", $contenu, PDO::PARAM_STR);
        $requete->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $requete->execute();
    } else {
        $requete = $bdd->prepare("UPDATE posts SET contenu = :contenu WHERE id = :id");
        $requete->bindValue(":contenu", $contenu, PDO::PARAM_STR);
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->execute();
    }
    $contenuTextarea = "";
    $edit = 0;
}
        
// SUPPRESSION
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']); // Sécurite
    $bdd->query("DELETE FROM posts WHERE id = ".$id);
    setFlash("Votre post a bien été supprimé");
}

// AFFICHAGE
$requete = $bdd->query("SELECT * FROM posts");// envoie de la requete
$posts = $requete->fetchAll(); 
foreach($posts as $post) {
?>
    <p>
        <blockquote>
            <?= $post['contenu'] ?>
        </blockquote>
    </p>
    <?php if (isset($_SESSION['id']) && $_SESSION['id'] == $post['user_id']) { ?>
        <a href='index.php?p=posts&edit=<?= $post['id'] ?>' class='btn btn-success'>Modifier</a>
        <a href='index.php?p=posts&delete=<?= $post['id'] ?>' class='btn btn-warning' onclick="return(confirm('Etes-vous sûr de vouloir supprimer cet article ?'));">Supprimer</a>
    <?php }
}
    
?>   

<form action="" method="post">
   
   <!-- Portfolio Item ? -->
             <div class="col-md-6 col-lg-4 ">
                 <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                         <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>
                             <h4><?= $contenuTitre ?></h4>
                         </div>
                     </div>
                     <img class="img-fluid" src="<?= $contenuImage ?>" alt="" />

                 </div>
             </div>
             
             
             <!-- Portfolio Modal Xx-->
             <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                 <div class="modal-dialog modal-xl" role="document">
                     <div class="modal-content">
                         <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true"><i class="fas fa-times"></i></span>
                         </button>
                         <div class="modal-body text-center">
                             <div class="container">
                                 <div class="row justify-content-center">
                                     <div class="col-lg-8">
                                         <!-- Portfolio Modal - Title-->
                                         <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><?= $contenuTitre ?></h2>
                                         <!-- Icon Divider-->
                                         <div class="divider-custom">
                                             <div class="divider-custom-line"></div>
                                             <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                             <div class="divider-custom-line"></div>
                                         </div>
                                         <!-- Portfolio Modal - Image-->
                                         <img class="img-fluid rounded mb-5" src="images/ppe2.png" alt="" />
                                         <!-- Portfolio Modal - Text-->
                                         <p class="mb-5"><?= $contenuDescription ?>
                                         </p>

                                         <a class="btn btn-primary" href="<?= $contenuLien ?>">Ouvrir PPE</a>

                                         <button class="btn btn-primary" data-dismiss="modal">
                                             <i class="fas fa-times fa-fw"></i>
                                             Fermer cette fenetre
                                         </button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
    
    
</form> 
    
    
    
<script>
CKEDITOR.replace( 'editor1' );
</script>