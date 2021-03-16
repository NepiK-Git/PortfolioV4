 <section class="page-section bg-primary text-dark mb-0" id="about">
     <div class="row">
         <div class="bg-light  mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow">
            <?php  if (isset( $_SESSION['pseudo'])) { ?>
            <h3>Bienvenue <?= $_SESSION['prenomu'] ?> <?= $_SESSION['nomu'] ?> !</h3>
            <?php } else { ?>
            <h3>Vous n'êtes pas connecté !</h3>
            <div class="d-flex justify-content-center col-12">
                <form method="post" action="" class="form-signin">
                    <img class="mt-5" src="images/avatar.png" width="75" height="75">
                    <h1 class="h3 mb-3 font-weight-normal mt-4">Connexion a l'espace utilisateur :</h1>
                    <div class="form-label-group">
                        <input type="text" name="pseudo" placeholder="Entrez votre pseudo" class="form-control">
                    </div>
                    <div class="form-label-group mt-2">
                        <input type="password" name="mdp" placeholder="Entrez votre mot de passe" class="form-control">
                    </div>
                    <button type="submit" name="connexion" class="btn btn-lg btn-primary btn-block mt-4 mb-3">Connexion</button>
                    <a class="btn btn-sm btn-outline-secondary mb-3" href="Accueil">Retour</a>
                </form>
            <?php } ?>
             
            <?php if (isset( $_SESSION['pseudo'])) { ?>
                 <div class="d-flex justify-content-center col-12 mt-4 mb-5">C'est votre espace utilisateur.</div>
                    <div class="row d-flex justify-content-center">

                        <!-- Modal 1 -->
                        <div class="col-3">
                            <div class="card" style="width: 18rem;">
                                <img src="images/avatar.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Profil</h5>
                                    <p class="card-text">Voici mon profil</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#edit-profile">
                                    Changer le Profil
                                </button>
                                <div class="modal fade" id="edit-profile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Changer le compte</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <div class="mb-3">
                                                    <input type="text" name="pseudo" class="form-control" value="<?= $_SESSION['pseudo'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="prenomu" class="form-control" value="<?= $_SESSION['prenomu'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="nomu" class="form-control" value="<?= $_SESSION['nomu'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="password" name="mdp" placeholder="Nouveau mot de passe" class="form-control" required>
                                                </div>
                                                <button type="submit" name="edit" class="btn btn-lg btn-primary btn-block mt-4">
                                                    Modifier
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal 2 -->
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/ppe.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Categorie et Projet</h5>
                                <p class="card-text">Cliquer pour en ajouter</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#edit-projets">
                                Changer les projets
                            </button>
                            <div class="modal fade" id="edit-projets" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Creer/changer un projets</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <div class="mb-3">
                                                    <input type="text" name="id_modal" placeholder="ID modal" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="titre" placeholder="Titre du projet" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <textarea name="description" rows="5" placeholder="Description du projet" class="form-control" required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="lien" class="form-control" value='<img src="images/img.png" class="img-fluid" width="" height="">' required>
                                                </div>
                                                <button type="submit" name="add-categorie" class="btn btn-secondary">Valider</button> 
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-lg btn-outline-danger mb-3 mt-4" href="deconnexion">Déconnexion</a>
            </div>
        </div>
    </div>
             
</div>

<?php } ?>
     
</section>
