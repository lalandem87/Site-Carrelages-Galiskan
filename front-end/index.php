<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Eray Galiskan Carrelages</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
        <link rel="stylesheet" href="./style/style.css" />
    </head>
    <body>
        <header>
            <a class="logo-link" href="#introduction">
                <img class="logo" src="../backend/images/logo.webp" alt="logo site" />
                <div class="head-txt">Galiskan Eray 
                    <span>Carrelages · Limoges</span>
                </div>
            </a>
            <nav>
                <ul class="nav-links">
                    <li><a class="nav-link" href="#à-propos">À propos</a></li>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <li><a class="nav-link" href="#portfolio">Réalisations</a></li>
                    <li><a class="nav-link" href="#avis">Avis</a></li>
                    <li><a class="nav-cta" href="#contact">Contact</a></li>
                </ul>
            </nav>
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </header>
        <main>
            <section id="introduction">
                    <div class="container-intro">
                        <div class="left-part">
                            <p class="point">Artisan qualifié - Limoges & 100 km</p>
                            <h1>Votre <span class="title">carrelage</span> posé avec soin.</h1>
                            <p class="desc-intro">Galiskan Eray Carrelages intervient à Limoges et dans un rayon de 100 km pour tous vos projets de pose de carrelage, faïence et mosaïque — chez les particuliers comme les professionnels.</p>
                            <div class="buttons">
                                <button class="btn-contact">✦ Nous contacter</button>
                                <button class="btn-rea">Voir les réalisations</button>
                            </div>
                            <div class="infos">
                                <div class="container-info">
                                    <h3>15+</h3>
                                    <h4>Années d'expérience</h4>
                                </div>
                                <div class="container-info">
                                    <h3>500+</h3>
                                    <h4>Chantier réalisés</h4>
                                </div>
                                <div class="container-info">
                                    <h3>99%</h3>
                                    <h4>Clients satisfaits</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="img-intro">
                                <img src="../backend/images/image-intro.webp" alt="Image Introduction" />
                                <div class="popup">
                                    <div class="container-popup">
                                        <div class="icon">📍</div>
                                        <p><strong>Limoges & alentours</strong> Intervention jusqu'à 100 km</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="bar-info">
                    <div class="bar-content">✔ Devis gratuit sous 24h</div>
                    <div class="bar-content">🔒 Assurance décennale</div>
                    <div class="bar-content">⭐ +15 ans d'expérience</div>
                    <div class="bar-content">📍 Limoges & 100 km</div>
                    <div class="bar-content">🏅 Qualibat certifié</div>
                </div>
            </section>

            <section id="à-propos">
                <div class="section-inner">
                    <div class="container-apropos reveal">
                        <div class="left-part">
                            <div class="img-a-propos">
                                <img src="../backend/images/travaux6.webp" alt="Photo Travaux n°6" />
                                <div class="badge">
                                    <span class="big">15</span>
                                    <span class="sm">ans de<br />métier</span>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <span class="tag">- à propos</span>
                            <h2>Un artisan <span class="title">passionné</span>, un travail impeccable</h2>
                            <p class="lead">Galiskan Eray est artisan carreleur depuis plus de 15 ans. Formé aux techniques traditionnelles et aux méthodes modernes, il réalise des chantiers de qualité sur Limoges et dans un rayon de 100 km, pour particuliers et professionnels.</p>
                            <ul class="a-propos-list">
                                <li><i class="fa-solid fa-check"></i> Pose au sol et murale, intérieur et extérieur</li>
                                <li><i class="fa-solid fa-check"></i> Découpe de précision, joints parfaits</li>
                                <li><i class="fa-solid fa-check"></i> Conseil sur le choix des matériaux et formats</li>
                                <li><i class="fa-solid fa-check"></i> Devis gratuit et détaillé sous 24h</li>
                                <li><i class="fa-solid fa-check"></i> Chantier propre, respect scrupuleux des délais</li>
                                <li><i class="fa-solid fa-check"></i> Assurance décennale et garantie décennale incluse</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services">
                <div class="section-inner">
                    <div class="container-services reveal">
                        <div class="service-head">
                            <span class="tag">- services</span>
                            <h2>Ce que je <span class="title">propose</span></h2>
                            <p class="lead">De la salle de bain à la terrasse, je prends en charge tous vos travaux de carrelage avec précision et expertise.</p>
                        </div>
                        <div class="container-cards">
                            <?php
                            $data = include_once "../backend/data.php";
                            $services = $data["services"];
                            foreach ($services as $service) { ?>
                                <div class="service-card">
                                    <article>
                                        <div class="icon-service">
                                            <?= $service["icon"] ?>
                                        </div>
                                        <h3 class="service-title"><?= $service["title"] ?></h3>
                                        <p class="service-desc"><?= $service["detail"] ?></p>
                                    </article>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portfolio">
                <div class="section-inner">
                    <div class="portfolio-head reveal">
                        <div>
                            <span class="tag">- portfolio</span>
                            <h2>Travaux <span class="title">réalisés</span></h2>
                        </div>
                        <a href="#contact">Votre projet →</a>
                    </div>
                    <div class="container-carrousel">
                        <div class="carrousel">
                            <div class="carrousel-track">
                                <?php
                                $travaux = $data["travaux-realises"];
                                foreach ($travaux as $travail) { ?>
                                    <div class="carrousel-item">
                                        <img src="<?= $travail["url-image"] ?>" alt="<?= $travail["alt"] ?>" />
                                        <h4 class="title-image"><?= $travail["title"] ?></h4>
                                    </div>
                                <?php }
                                ?>
                            </div>
                            <div class="carrousel-arrows">
                                <button id="arrow-left"><i class="fa-solid fa-arrow-left"></i></button>
                                <button id="arrow-right"><i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>

            <section id="avis">
                <div class="section-inner">
                    <div class="avis-head reveal">
                        <span class="tag">- Avis clients</span>
                        <h2>Ce qu'ils <span class="title">disent</span></h2>
                    </div>
                    <div class="container-avis">
                        <?php
                        $avis = $data["avis-clients"];
                        foreach ($avis as $avi) { ?>
                            <div class="avis-card">
                                <div class="quote">"</div>
                                <div class="stars">
                                    <?php for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $avi["stars"]) { ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php } else { ?>
                                            <i class="fa-regular fa-star"></i>
                                        <?php }
                                    } ?>
                                </div>
                                <p class="com-avis"><?= $avi["commentaire"] ?></p>
                                <div class="author-avis"><?= $avi["client"] ?></div>
                                <div class="rea-type">
                                    <div class="realisation-ville"><?= $avi["ville"] ?></div>
                                    <div class="type-logement"><?= $avi["type-habitation"] ?></div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="section-inner">
                    <div class="container-contact reveal">
                        <div class="left-part">
                            <span class="tag">- contact</span>
                            <h2>Prenez <span class="title">contact</span> avec nous</h2>
                            <p class="lead">Une question, un projet ? Envoyez-nous un message et Mr Galiskan vous répondra dans les plus bref délais.</p>
                            <?php $contact = $data["à-propos"]; ?>
                            <div class="contact-infos">
                                <div class="icon-contact">📞</div>
                                <div class="contact-info">
                                    <div class="cinfo-ttl">Téléphone</div>
                                    <div class="cinfo-sub"><?= $contact["tel"] ?></div>
                                </div>
                            </div>
                            <div class="contact-infos">
                                <div class="icon-contact">✉️</div>
                                <div class="contact-info">
                                    <div class="cinfo-ttl">Email</div>
                                    <div class="cinfo-sub"><?= $contact["email"] ?></div>
                                </div>
                            </div>
                            <div class="contact-infos">
                                <div class="icon-contact">📍</div>
                                <div class="contact-info">
                                    <div class="cinfo-ttl">Zone d'intervention</div>
                                    <div class="cinfo-sub"><?= $contact["zone-interventions"]["ville"] ?></div>
                                    <div class="cinfo-sub"><?= $contact["zone-interventions"]["detail"] ?></div>
                                </div>
                            </div>
                            <div class="contact-infos">
                                <div class="icon-contact">🕐</div>
                                <div class="contact-info">
                                    <div class="cinfo-ttl">Disponibilité</div>
                                    <div class="cinfo-sub"><?= $contact["disponibilité"] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part">
                            <div class="container-form reveal">
                                <div class="title-form">Envoyez-nous un message</div>
                                <div class="subtitle-form">Réponse rapide garantie · Aucun engagement</div>

                                <?php if (isset($_GET["success"])): ?>
                                    <div class="alert-success">✅ Message envoyé avec succès !</div>
                                <?php elseif (isset($_GET["error"])): ?>
                                    <div class="alert-error">❌ Une erreur est survenue, réessayez.</div>
                                <?php endif; ?>

                                <form action="../backend/send-mail.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-field">
                                            <label for="prenom">Prénom *</label>
                                            <input type="text" id="prenom" name="prenom" placeholder="Jean" />
                                            <p class="msg-error">Champ requis</p>
                                        </div>
                                        <div class="form-field">
                                            <label for="nom">Nom *</label>
                                            <input type="text" id="nom" name="nom" placeholder="Dupont" />
                                            <p class="msg-error">Champ requis</p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-field">
                                            <label for="tel">Téléphone *</label>
                                            <input type="tel" id="tel" name="tel" placeholder="06 00 00 00 00" />
                                            <p class="msg-error">Champ requis</p>
                                        </div>
                                        <div class="form-field">
                                            <label for="email">Email *</label>
                                            <input type="email" id="email" name="email" placeholder="jean.dupont@exemple.fr" />
                                            <p class="msg-error">Champ requis</p>
                                        </div>
                                    </div>
                                    <div class="form-field">
                                        <label for="message">Message *</label>
                                        <textarea id="message" name="message" placeholder="Décrivez votre demande, vos projets, ou posez-nous simplement une question..."></textarea>
                                        <p class="msg-error">Champ requis</p>
                                    </div>
                                    <button type="submit" class="btn-form">
                                        <i class="fa-regular fa-paper-plane"></i>
                                        Envoyer le message
                                    </button>
                                    <p class="donnee-msg">🔒 Vos données sont confidentielles et ne seront jamais partagées.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container-footer reveal">
                <div class="footer-brand">
                        <a class="logo-link" href="#introduction">
                            <img class="logo" src="../backend/images/logo-footer.webp" alt="logo site" />
                            <div class="head-foot-txt">Galiskan Eray 
                                <span>Carrelages</span>
                            </div>
                        </a>
                        <p>Artisan carreleur à Limoges, intervention dans un rayon de 100 km. Particuliers et professionnels.</p>
                </div>
                <div class="footer-links">
                        <h4>Navigation</h4>
                        <ul>
                            <li class="f-link"><a href="#introduction">Accueil</a></li>
                            <li class="f-link"><a href="#à-propos">À propos</a></li>
                            <li class="f-link"><a href="#services">Services</a></li>
                            <li class="f-link"><a href="#portfolio">Réalisations</a></li>
                            <li class="f-link"><a href="#contact">Contact</a></li>
                        </ul>
                </div>
                <div class="footer-links">
                        <h4>Contact</h4>
                        <ul>
                            <li class="f-link"><a href="tel:+33600000000">📞 06 00 00 00 00</a></li>
                            <li class="f-link"><a href="mailto:contact@galiskan-carrelages.fr">✉ contact@galiskan-carrelages.fr</a></li>
                            <li class="f-link"><a href="#contact">📍 Limoges & 100 km</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    © 2026 Galiskan Eray Carrelages · Limoges (87) · SIRET : 000 000 000 00000 · Assurance décennale · Tous droits réservés
                </div>
        </div>
        </footer>
    </body>
    <script src="./js/carrousel.js" defer></script>
    <script src="./js/nav.js" defer></script>
    <script src="./js/reveal.js" defer></script>
    </html>