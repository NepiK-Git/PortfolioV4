 <section class="page-section bg-primary text-white mb-0" id="about">
    <section class="page-section portfolio" id="portfolio" style="margin-top:50px;">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase  text-white mb-0">Projets</h2>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <?php
            $view = $bdd->query("SELECT * FROM projets");
            while ($projets = $view->fetch()) {
            ?>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#<?= $projets['id_modal'] ?>">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i>
                                <h4><?= $projets['titre'] ?></h4>
                            </div>
                        </div>
                        <?= $projets['lien'] ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        
            <div class="portfolio-modal modal fade" id="ai" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mes projets</h2>
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <img class="img-fluid rounded mb-5" src="images/PNG/remix promo.png" width="40%" height="40%">
                                        <p class="mb-5">Vous aller voir mes projets realiser avec Ilustrator</p>
                                        <a class="btn btn-primary" href="ilustrator">Ouvrir</a>
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

            <!-- Portfolio Modal 2-->
            <div class="portfolio-modal modal fade" id="an" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                 <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mes Gifs</h2>
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <img class="img-fluid rounded mb-5" height="200" width="200" src="images/GIF/Madgic1.gif" alt="" />
                                        <p class="mb-5">Vous y retrouverez mes realisations</p>
                                        <a class="btn btn-primary" href="gifs">Ouvrir</a>
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
             
            <!-- Portfolio Modal 3-->
            <div class="portfolio-modal modal fade" id="uiux" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mon UI/UX</h2>
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <img class="img-fluid rounded mb-5" src="images/uiux1.png" alt="" />
                                        <p class="mb-5">Vous y retrouverez mes realisations</p>
                                        <a class="btn btn-primary" href="uiux">Ouvrir</a>
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
             
            <!-- Portfolio Modal 4-->
            <div class="portfolio-modal modal fade" id="dgd" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mes documents de Game design</h2>
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <img class="img-fluid rounded mb-5" src="images/PNG/logo_dgd.png" alt="" />
                                        <p class="mb-5">Mes projets</p>
                                        <a class="btn btn-primary" href="dgd">Ouvrir</a>
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
        </div>
    </section>
</section>