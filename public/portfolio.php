<?php require_once("../send-email.php"); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha284-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha284-YvpcrYf0tY2lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,200;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="portfolio.css">
</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <?php require_once(__DIR__ . '/theme-color.php') ?>

    <section class="home" id="home">
        <div class="home-content">
            <h1>PORTFOLIO DE <span>SAAD</span></h1>
            <div class="soustitre">
                <h2>Je <span class="auto-type">suis étudiant en 2ème année de <span> BTS SIO SLAM</span></span></h2>
            </div>
            <div class="social-media">
                <a href="https://github.com/Codingbts" target="_blank"><i class='bx bxl-github'></i></a>
            </div>
            <div class="btn-group">
                <a href="images/CV Saad info.pdf" download="CV_de_Saad"><i class='bx bx-file-find'></i>Télécharger mon CV</a>
                <a href="#contact">Contactez-moi</a>

            </div>
        </div>
        <div class="home-img">
            <img src="images/intro-img.jpg" alt="">
        </div>
    </section>
    <h1 class="heading">Introduction</h1>
    <div class="row">
        <section class="intro" id="apropos">
            <img id="visionary-img" src="images/Visionary technology-bro.svg" alt="illu-intro">
            <div class="col-md-12 d-flex flex-direction-row">
                <div class="carte">
                    <div class="card card-ap">
                        <h2>A propos de <span style="color: black;">moi</span></h2></br>
                        <p>
                            Bonjour, je vous souhaite la bienvenue dans mon portfolio.
                            Je me présente, je m'appelle Saad Mohamadi, j'ai 22 ans, et je suis actuellement
                            en 2ème année de BTS services informatiques
                            aux organisations option B solutions
                            logicielles et applications métiers (BTS SIO SLAM). Dans ce site, vous y trouverez mon parcours académique,
                            mes Compétences ainsi que mes projets. Je vous souhaite un excellent voyage dans mon monde !
                        </p>
                        <div class="glow"></div>
                    </div>
                </div>

                <div class="carte">
                    <div class="card card-ap">
                        <h2>Le BTS <span style="color: black;">SIO</span></h2></br>
                        <p>
                            <span style="color: black;">Le Brevet de Technicien Supérieur (BTS) SIO (Services Informatiques aux Organisations)</span>
                            est un diplôme de l'enseignement supérieur qui se prépare en deux ans après l'obtention du baccalauréat.
                            Ce cursus permet aux étudiants d'acquérir des compétences solides dans le domaine de l'informatique,
                            en choisissant l'une des deux spécialités proposées :</br>

                            </br>SLAM (Solutions Logicielles et Applications Métier) : L'option SLAM se concentre sur le développement d'applications
                            informatiques, la programmation, la gestion de bases de données et la conception de logiciels adaptés
                            aux besoins des entreprises.</br>
                            SISR (Solutions d'Infrastructure, Systèmes et Réseaux): L'option SISR forme les étudiants à la gestion et à
                            l’administration des infrastructures réseau, des systèmes informatiques, ainsi qu'à la sécurité des
                            données.</br>

                            </br>Pour plus d'information, je vous mets le lien de l'Onisep pour ma spécialité, le BTS SIO SLAM : <a class="liens-site" target="_blank" href="https://www.onisep.fr/ressources/univers-formation/formations/post-bac/bts-services-informatiques-aux-organisations-option-b-solutions-logicielles-et-applications-metiers">Onisep - BTS SIO SLAM</a>
                        </p>
                        <div class="glow"></div>
                    </div>
                </div>
            </div>
        </section>
        <h2 class="heading">COMPETENCES</h2>
        <section class="comp" id="comp">
            <h3>Langage de programmation & outils de programmation</h3>
            <div class="banner">
                <div class="slider" style="--quantity:12">
                    <div class="item" style="--position:1">
                        <img src="images/html-1.svg" alt="html">
                        <p class="skill-name">HTML</p>
                    </div>
                    <div class="item" style="--position:2">
                        <img src="images/css-3.svg" alt="css">
                        <p class="skill-name">CSS</p>

                    </div>
                    <div class="item" style="--position:3">
                        <img src="images/c--4.svg" alt="c#">
                        <p class="skill-name">C#</p>
                    </div>
                    <div class="item" style="--position:4">
                        <img src="images/new-php-logo.svg" alt="PHP">
                        <p class="skill-name">PHP</p>
                    </div>
                    <div class="item" style="--position:5">
                        <img src="images/java-4.svg" alt="java">
                        <p class="skill-name">Java</p>
                    </div>
                    <div class="item" style="--position:6">
                        <img src="images/python-5.svg" alt="Python">
                        <p class="skill-name">Python</p>
                    </div>
                    <div class="item" style="--position:7">
                        <img src="images/icons8-github.svg" alt="github">
                        <p class="skill-name">GitHub</p>
                    </div>
                    <div class="item" style="--position:8">
                        <img src="images/eclipse-11.svg" alt="eclipse">
                        <p class="skill-name">Eclipse</p>
                    </div>
                    <div class="item" style="--position:9">
                        <img src="images/jetbrains-pycharm.svg" alt="PyCharm">
                        <p class="skill-name">PyCharm</p>
                    </div>
                    <div class="item" style="--position:10">
                        <img src="images/NetBeans-Logo.wine.svg" alt="netbeans">
                        <p class="skill-name">Netbeans</p>
                    </div>
                    <div class="item" style="--position:11">
                        <img src="images/visual-studio-code-1.svg" alt="visual studio code">
                        <p class="skill-name">Visual studio code</p>
                    </div>
                    <div class="item" style="--position:12">
                        <img src="images/visual-studio-2013.svg" alt="visual studio">
                        <p class="skill-name">Visual studio</p>
                    </div>
                </div>
            </div>
            <h3>Technologies & Frameworks</h3>
            <div class="wrapper">
                <div class="wrap item1">
                    <img src="images/symfony.svg" alt="symfony">
                </div>
                <div class="wrap item2">
                    <img src="images/bootstrap-5-1.svg" alt="bootstrap">
                </div>
                <div class="wrap item3">
                    <img src="images/tailwind-css-1.svg" alt="taildwind css">
                </div>
                <div class="wrap item4">
                    <img src="images/wordpress-icon-1.svg" alt="wordpress">
                </div>
                <div class="wrap item5">
                    <img src="images/mongodb-icon-2.svg" alt="mongodb">
                </div>
                <div class="wrap item6">
                    <img src="images/mysql-3.svg" alt="mysql">
                </div>
                <div class="wrap item7">
                    <img src="images/postgresql.svg" alt="postgresql">
                </div>
            </div>
        </section>

        <section class="education" id="education">
            <h2 class="heading">FORMATION</h2>
            <div class="timeline-items">

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2021</div>
                    <div class="timeline-content">
                        <h1>Baccalauréat général</h1>
                        <h2>Spécialité physique-chimie/SVT</h2>
                        <p>Lycée Sonia Delaunay</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2022</div>
                    <div class="timeline-content">
                        <h2>Licence Science pour l'ingénieur</h2>
                        <p>Université Sorbonne Paris Nord</p>
                    </div>
                </div>


                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2023</div>
                    <div class="timeline-content">
                        <h2>Licence Gestion</h2>
                        <p>UVSQ</p>
                    </div>
                </div>


                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h2>Licence Gestion/BTS SIO SLAM 1ère année</h2>
                        <p>UVSQ/CNED</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2025</div>
                    <div class="timeline-content">
                        <h2>BTS SIO SLAM 2ème année</h2>
                        <p>CNED</p>
                    </div>
                </div>
            </div>



        </section>
        <section class="experience" id="experience">
            <h2 class="heading">Expériences</h2>
            <div class="experience-info">

                <div class="grid">
                    <div class="grid-card">
                        <h1>Développeur web PHP symfony</h1>
                        <h2>5 semaines<h2>
                                <h3>Grec de l'Aqueduc</h3>
                                <p>Création d'un site vitrine Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint qui fugiat libero nulla dolorum aliquam beatae voluptatem molestias non at.</p>
                    </div>

                    <div class="grid-card">
                        <h1>Développeur web</h1>
                        <h2>5 semaines<h2>
                                <h3>Noma Direct</h3>
                                <p>Création d'un site vitrine Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint qui fugiat libero nulla dolorum aliquam beatae voluptatem molestias non at.</p>
                    </div>
                </div>
                <img id="programming-img" src="images/Programming-bro.svg" alt="Illustration experience">

            </div>
        </section>
        <section id="projets">
            <h2 class="heading">PROJETS</h2>
            <div class="container-project">
                <div class="project-card">
                    <img src="images/projet-noma.png" alt="projet-presence">
                    <div class="content-project">
                        <h2>Presence</h2>
                        <div class="social">
                            <div class="item">
                                <div class="title">stage 1ère année chez Noma direct</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <img src="images/projet-noma.png" alt="projet-presence">
                    <div class="content-project">
                        <h2>Presence</h2>
                        <div class="social">
                            <div class="item">
                                <div class="title">stage de 1ère année</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <img src="images/portfolio2.0.png" alt="Portfolio">
                    <div class="content-project">
                        <h2>Portfolio</h2>
                        <div class="social">
                            <div class="item">
                                <div class="title">Création d'un portfolio format site et jeux vidéo</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <img src="images/projet-noma.png" alt="projet-presence">
                    <div class="content-project">
                        <h2>Presence - stage 1e année</h2>
                        <div class="social">
                            <div class="item">
                                <div class="title">En savoir plus</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <img src="images/projet-noma.png" alt="projet-presence">
                    <div class="content-project">
                        <h2>Presence - stage 1e année</h2>
                        <div class="social">
                            <div class="item">
                                <div class="title">En savoir plus</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <img src="images/projet-noma.png" alt="projet-presence">
                    <div class="content-project">
                        <h2>Presence - stage 1e année</h2>
                        <div class="social">
                            <div class="item">
                                <div class="title">En savoir plus</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="epreuve">
            <h2 class="heading">EPREUVE E4</h2>
        </section>
        <section id="veille">
    <h2 class="heading">VEILLE TECHNOLOGIQUE</h2>
    <div class="veille-container">
        <!-- Introduction à la veille technologique -->
        <h3>Qu'est ce que la <span>veille technologique ?</span></h3>
        <div class="intro-veille">
            <p>
                La <span>veille technologique</span> est un processus qui permet d'être à jour sur les innovations et les tendances
                dans le secteur des technologies. Il est très important d'effectuer fréquemment une veille technologique
                pour ne pas être dépassé par les changements qui ont lieu dans une industrie suite à des innovations ou à des
                changements syntaxique dans un langage de programmation.
                J'ai décidé d'effectuer ma veille technologique sur deux domaines qui me passionne. Ces domaines sont <span>l'intelligence
                    artificielle</span> et la <span>robotique</span>.
            </p>
            <img id="ia-img" src="images/Artificial intelligence-bro.svg" alt="Robot-IA illu">
        </div>

        <!-- Overlay pour le fond semi-transparent -->
        <div class="overlay"></div>

        <!-- Section des outils de veille -->
        <div class="veille-tools" id="veille-tools">
            <h3>Outils utilisés pour effectuer ma veille</h3>
            <div class="tools-container">
                <!-- Google Alerts -->
                <div class="tools">
                    <div class="tools-img" data-popup="popup-veille-google">
                        <svg viewBox="0 0 15.651 15.651" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M14.711,9.084c1.383-2.103,1.22-4.911-0.363-6.78c0.188-0.528,0.216-1.363-0.638-1.93 c-0.859-0.571-1.603-0.239-2.007,0.131c-2.324-0.73-4.978,0.222-6.396,2.332L3.685,5.278C3.213,5.986,2.731,6.045,1.854,6.151 c-0.356,0.041-0.759,0.09-1.219,0.194C0.611,6.35,0.591,6.361,0.569,6.37c-0.22,0.028-0.387,0.107-0.484,0.253 C-0.548,7.576,2.468,10.151,5,11.922c-0.422,0.501-0.54,1.22-0.24,1.849c0.409,0.859,1.437,1.223,2.296,0.813 c0.382-0.182,0.658-0.49,0.82-0.848c2.309,1.311,4.773,2.361,5.291,1.582c0.069-0.104,0.093-0.227,0.08-0.366 c0.026-0.064,0.036-0.138,0.022-0.21c-0.088-0.496-0.212-0.896-0.321-1.25c-0.246-0.799-0.369-1.2,0.085-1.884L14.711,9.084z M0.845,7.099c0.004-0.027,0.008-0.054,0.021-0.074c0.269-0.404,2.617,0.356,5.917,2.464L5.92,11.354 c-0.118,0.027-0.234,0.066-0.348,0.12c-0.042,0.021-0.077,0.048-0.117,0.07C2.375,9.421,0.763,7.62,0.845,7.099z M12.493,14.753 c-0.019,0.028-0.049,0.05-0.087,0.066c-0.428,0.188-2.066-0.336-4.383-1.655c0.023-0.292-0.021-0.593-0.156-0.877 c-0.039-0.082-0.09-0.158-0.14-0.231l0.68-1.468C11.307,12.663,12.748,14.368,12.493,14.753z" />
                        </svg>
                    </div>
                    <div class="tools-title">
                        <p>Google alerts</p>
                    </div>
                </div>

                <!-- Feedly -->
                <div class="tools">
                    <div class="tools-img" data-popup="popup-veille-feedly">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M18.479 2.651c-1.364-1.391-3.604-1.391-4.968 0l-12.484 12.719c-1.365 1.412-1.365 3.652 0 5.057l8.911 9.079c0.636 0.573 1.464 0.885 2.317 0.885h7.485c0.943 0 1.839-0.38 2.495-1.052l8.739-8.901c1.371-1.411 1.371-3.651 0-5.063zM18.136 25.88l-1.251 1.265c-0.093 0.1-0.219 0.157-0.355 0.157h-1.067c-0.125-0.005-0.24-0.048-0.328-0.131l-1.276-1.292c-0.193-0.203-0.193-0.52 0-0.724l1.785-1.812c0.193-0.204 0.511-0.204 0.709 0l1.781 1.812c0.197 0.204 0.197 0.527 0 0.724zM18.136 18.265l-4.985 5.079c-0.093 0.093-0.224 0.151-0.359 0.145h-1.063c-0.125 0.005-0.245-0.041-0.333-0.12l-1.271-1.296c-0.193-0.199-0.193-0.521 0-0.724l5.52-5.62c0.193-0.199 0.516-0.199 0.709 0l1.781 1.817c0.197 0.199 0.197 0.521 0 0.719zM18.136 10.656l-8.724 8.88c-0.095 0.1-0.219 0.152-0.355 0.152h-1.068c-0.125 0-0.24-0.043-0.333-0.125l-1.271-1.297c-0.192-0.197-0.192-0.52 0-0.719l9.26-9.427c0.193-0.199 0.511-0.199 0.709 0l1.781 1.812c0.197 0.204 0.197 0.527 0 0.724z" />
                        </svg>
                    </div>
                    <div class="tools-title">
                        <p>Feedly</p>
                    </div>
                </div>

                <!-- Youtube -->
                <div class="tools">
                    <div class="tools-img" data-popup="popup-veille-ytb">
                        <svg viewBox="-271 311.2 256 179.8" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M-59.1,311.2h-167.8c0,0-44.1,0-44.1,44.1v91.5c0,0,0,44.1,44.1,44.1h167.8c0,0,44.1,0,44.1-44.1v-91.5C-15,355.3-15,311.2-59.1,311.2z M-177.1,450.3v-98.5l83.8,49.3L-177.1,450.3z" />
                        </svg>
                    </div>
                    <div class="tools-title">
                        <p>Youtube</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popups -->
        <div id="popup-veille-google" class="popup">
            <div class="popup-tools">
                <span class="close-popup">×</span>
                <h3>Google alerts</h3>
                <svg viewBox="0 0 15.651 15.651" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M14.711,9.084c1.383-2.103,1.22-4.911-0.363-6.78c0.188-0.528,0.216-1.363-0.638-1.93 c-0.859-0.571-1.603-0.239-2.007,0.131c-2.324-0.73-4.978,0.222-6.396,2.332L3.685,5.278C3.213,5.986,2.731,6.045,1.854,6.151 c-0.356,0.041-0.759,0.09-1.219,0.194C0.611,6.35,0.591,6.361,0.569,6.37c-0.22,0.028-0.387,0.107-0.484,0.253 C-0.548,7.576,2.468,10.151,5,11.922c-0.422,0.501-0.54,1.22-0.24,1.849c0.409,0.859,1.437,1.223,2.296,0.813 c0.382-0.182,0.658-0.49,0.82-0.848c2.309,1.311,4.773,2.361,5.291,1.582c0.069-0.104,0.093-0.227,0.08-0.366 c0.026-0.064,0.036-0.138,0.022-0.21c-0.088-0.496-0.212-0.896-0.321-1.25c-0.246-0.799-0.369-1.2,0.085-1.884L14.711,9.084z M0.845,7.099c0.004-0.027,0.008-0.054,0.021-0.074c0.269-0.404,2.617,0.356,5.917,2.464L5.92,11.354 c-0.118,0.027-0.234,0.066-0.348,0.12c-0.042,0.021-0.077,0.048-0.117,0.07C2.375,9.421,0.763,7.62,0.845,7.099z M12.493,14.753 c-0.019,0.028-0.049,0.05-0.087,0.066c-0.428,0.188-2.066-0.336-4.383-1.655c0.023-0.292-0.021-0.593-0.156-0.877 c-0.039-0.082-0.09-0.158-0.14-0.231l0.68-1.468C11.307,12.663,12.748,14.368,12.493,14.753z" />
                </svg>
                <p> Google Alerts est un service de notification gratuit de Google qui avertit les utilisateurs
                    par courrier électronique, lorsque de nouveaux résultats s’affichent dans le moteur de recherche
                    pour un mot-clé donné. Il prend en compte les sources web et les utilisateurs peuvent choisir la
                    fréquence de la réception des courriels qui résument l’activité de recherche autour des mots-clés.</p>
            </div>
        </div>

        <div id="popup-veille-feedly" class="popup">
            <div class="popup-tools">
                <span class="close-popup">×</span>
                <h3>Feedly</h3>
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M18.479 2.651c-1.364-1.391-3.604-1.391-4.968 0l-12.484 12.719c-1.365 1.412-1.365 3.652 0 5.057l8.911 9.079c0.636 0.573 1.464 0.885 2.317 0.885h7.485c0.943 0 1.839-0.38 2.495-1.052l8.739-8.901c1.371-1.411 1.371-3.651 0-5.063zM18.136 25.88l-1.251 1.265c-0.093 0.1-0.219 0.157-0.355 0.157h-1.067c-0.125-0.005-0.24-0.048-0.328-0.131l-1.276-1.292c-0.193-0.203-0.193-0.52 0-0.724l1.785-1.812c0.193-0.204 0.511-0.204 0.709 0l1.781 1.812c0.197 0.204 0.197 0.527 0 0.724zM18.136 18.265l-4.985 5.079c-0.093 0.093-0.224 0.151-0.359 0.145h-1.063c-0.125 0.005-0.245-0.041-0.333-0.12l-1.271-1.296c-0.193-0.199-0.193-0.521 0-0.724l5.52-5.62c0.193-0.199 0.516-0.199 0.709 0l1.781 1.817c0.197 0.199 0.197 0.521 0 0.719zM18.136 10.656l-8.724 8.88c-0.095 0.1-0.219 0.152-0.355 0.152h-1.068c-0.125 0-0.24-0.043-0.333-0.125l-1.271-1.297c-0.192-0.197-0.192-0.52 0-0.719l9.26-9.427c0.193-0.199 0.511-0.199 0.709 0l1.781 1.812c0.197 0.204 0.197 0.527 0 0.724z" />
                </svg>
                <p> Feedly est un outil qui permet de s’abonner à des flux RSS et de recevoir
                    automatiquement des contenus provenant d’autres sites web, qu’il s’agisse
                    d’un journal ou d’un article de blog. Le flux RSS correspond quant à lui
                    à une technologie qui permet la distribution automatique de contenus web
                    directement chez l’utilisateur.</p>
            </div>
        </div>

        <div id="popup-veille-ytb" class="popup">
            <div class="popup-tools">
                <span class="close-popup">×</span>
                <h3>Youtube</h3>
                <svg viewBox="-271 311.2 256 179.8" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M-59.1,311.2h-167.8c0,0-44.1,0-44.1,44.1v91.5c0,0,0,44.1,44.1,44.1h167.8c0,0,44.1,0,44.1-44.1v-91.5C-15,355.3-15,311.2-59.1,311.2z M-177.1,450.3v-98.5l83.8,49.3L-177.1,450.3z" />
                </svg>
                <p> YouTube est une plateforme en ligne permettant aux internautes de mettre en ligne,
                    visionner et partager des vidéos.</p>
            </div>
        </div>
    </div>

    <!-- Sections pour l'intelligence artificielle et la robotique -->
    <div class="info-teck">
        <h3><span>Intelligence artificielle</span></h3>
        <div class="theme">
            <p>
                L’intelligence artificielle (IA) est une technologie
                qui permet aux ordinateurs et aux machines de simuler
                l’apprentissage, la compréhension, la résolution de
                problèmes, la prise de décision, la créativité et
                l’autonomie de l’être humain.
            </p>
        </div>
    </div>

    <div class="info-teck">
        <h3><span>Robotique</span></h3>
        <div class="theme">
            <p>
                La robotique est un domaine d'activité recouvrant
                l'étude, la conception et la fabrication de
                robots ou machines automatisées.
            </p>
        </div>
    </div>
</section>
    <section class="contact" id="contact">
        <h2 class="heading">CONTACTEZ-<span>MOI</span></h2>
        <div class="form-contact">
            <form action="" method="POST" id="contact-form">
                <div id="error-message"></div>
                <div class="input-group">
                    <div class="input-box">
                        <input type="text" name="name" id="name" placeholder="Nom" autocomplete="off">
                        <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
                    </div>
                </div>
                <div class="input-group2">
                    <div class="input-box">
                        <input type="text" name="subject" id="subject" placeholder="Objet" autocomplete="off">
                    </div>
                </div>
                <div class="input-group3">
                    <textarea name="message" id="message" placeholder="Message" autocomplete="off"></textarea>
                    <button class="btn btn-primary" id="btn-envoie" type="submit" onclick="togglePopup">Envoyer</button>
                </div>
            </form>
        </div>


        <div id="popup-overlay">
            <div class="popup-content">
                <h1>Votre message a bien été envoyé.</h1>
                <h2>Merci d'avoir pris le temps de me contacter !</h2>
                <img src="images/Contact us-bro.svg" alt="Contact-img" id="contact-img">
                <a href="portfolio.php">Retourner à mon portfolio</a>
            </div>
        </div>
    </section>
    </div>

    <?php require_once(__DIR__ . '/footer.php') ?>
    <script src="app.js"></script>
    <script src="card.js"></script>
    <script src="titre.js"></script>
    <script src="color.js"></script>
    <script src="error.js"></script>

    <script>
        function togglePopup() {
            const popup = document.querySelector("#popup-overlay");
            popup.classList.toggle("open");
        }

        <?php if ($showPopup): ?>
            document.addEventListener("DOMContentLoaded", () => {
                togglePopup();
            });
        <?php endif; ?>
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Fonction pour empêcher le défilement
            function preventScroll(event) {
                event.preventDefault();
            }

            function togglePopupVeille(event) {
                event.preventDefault();

                const targetId = event.currentTarget.getAttribute("data-popup");
                const popup = document.getElementById(targetId);
                const overlay = document.querySelector(".overlay");

                if (popup && overlay) {
                    // Si le popup est déjà ouvert, ne rien faire
                    if (popup.classList.contains("open")) return;

                    // Ouvrir le popup avec l'animation
                    popup.classList.add("open");
                    overlay.classList.add("open");

                    // Désactiver le défilement de la page
                    document.body.classList.add("no-scroll");

                    // Empêcher le défilement avec la molette
                    document.addEventListener("wheel", preventScroll, {
                        passive: false
                    });
                }
            }

            function closePopupWithAnimation(popup, overlay) {
                // Ajouter les classes pour l'animation inversée
                popup.classList.add("popup-closing");

                // Attendre la fin de l'animation avant de fermer le popup
                popup.addEventListener(
                    "animationend",
                    () => {
                        popup.classList.remove("open", "popup-closing");
                        overlay.classList.remove("open");

                        // Réactiver le défilement de la page
                        document.body.classList.remove("no-scroll");

                        // Rétablir le défilement avec la molette
                        document.removeEventListener("wheel", preventScroll);
                    }, {
                        once: true
                    } // Supprimer l'écouteur après la première exécution
                );
            }

            function closePopup(event) {
                event.preventDefault();
                const popup = event.currentTarget.closest(".popup");
                const overlay = document.querySelector(".overlay");
                if (popup && overlay) {
                    closePopupWithAnimation(popup, overlay);
                }
            }

            // Gestion des clics sur les logos pour ouvrir le popup
            document.querySelectorAll(".tools-img").forEach((img) => {
                img.addEventListener("click", togglePopupVeille);
            });

            // Gestion des clics sur le bouton de fermeture (la croix)
            document.querySelectorAll(".close-popup").forEach((closeBtn) => {
                closeBtn.addEventListener("click", closePopup);
            });

            // Fermer le popup en cliquant à l'extérieur (sur l'overlay)
            const overlay = document.querySelector(".overlay");
            if (overlay) {
                overlay.addEventListener("click", () => {
                    const popup = document.querySelector(".popup.open");
                    if (popup) {
                        closePopupWithAnimation(popup, overlay);
                    }
                });
            }
        });
    </script>

</body>

</html>