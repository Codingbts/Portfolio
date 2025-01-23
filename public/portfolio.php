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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,200;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="portfolio.css">
</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <section class="home" id="home">
        <div class="home-content">
            <h1>PORTFOLIO DE <span>SAAD</span></h1>
            <div class="soustitre">
                <h2>Je <span class="auto-type" style="color:white">suis étudiant en 2ème année de <span> BTS SIO SLAM </span></span></h2>

            </div>
        </div>
        <div class="home-img">
            <img src="images/intro-img.jpg" alt="">
        </div>
    </section>
    <h1 class="heading">Introduction</h1>
    <div class="row">

        <section class="intro" id="apropos">
            <img src="images/Visionary technology-bro.svg" alt="illu-intro">
            <div class="col-md-12 d-flex flex-direction-row">
                <div class="carte">
                    <div class="card card-ap">
                        <h2>A propos de <span style="color: black;">moi</span></h2>
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
                        <h2>Le BTS <span style="color: black;">SIO SLAM</span></h2>
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
            </div>
        </section>
        <h2 class="heading">COMPETENCES</h2>
        <section class="comp">
            <div class="banner">
                <div class="slider" style="--quantity:10">
                    <div class="item" style="--position:1"><img src="images/html-1.svg" alt="html"></div>
                    <div class="item" style="--position:2"><img src="images/bootstrap-5-1.svg" alt="bootstrap"></div>
                    <div class="item" style="--position:3"><img src="images/c--4.svg" alt="c#"></div>
                    <div class="item" style="--position:4"><img src="images/css-3.svg" alt="css"></div>
                    <div class="item" style="--position:5"><img src="images/github-icon-1.svg" alt="github"></div>
                    <div class="item" style="--position:6"><img src="images/java-4.svg" alt="java"></div>
                    <div class="item" style="--position:7"><img src="images/mariadb.svg" alt="mariadb"></div>
                    <div class="item" style="--position:8"><img src="images/mysql-3.svg" alt="mysql"></div>
                    <div class="item" style="--position:9"><img src="images/postgresql.svg" alt="postegresql"></div>
                    <div class="item" style="--position:10"><img src="images/symfony.svg" alt="symfony"></div>
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
                        <h3>Highschool</h3>
                        <p>form1</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2022</div>
                    <div class="timeline-content">
                        <h3>Highschool</h3>
                        <p> form 2</p>
                    </div>
                </div>


                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2023</div>
                    <div class="timeline-content">
                        <h3>Highschool</h3>
                        <p>form 3</p>
                    </div>
                </div>


                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Highschool</h3>
                        <p>form 4</p>
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
                <img src="images/Programming-bro.svg" alt="Illustration experience">

            </div>
        </section>
        <section>
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
        <section>
            <h2 class="heading">EPREUVE E4</h2>
        </section>
        <section>
            <h2 class="heading">VEILLE TECHNOLOGIQUE</h2>
            <p>
                La veille technologique est un processus qui permet d'être à jour sur les innovations et les tendances
                dans le secteur des technologies. Il est très important d'effectuer fréquemment une veille technologique
                pour ne pas être dépassé par les changements qui ont lieu dans une industrie suite à des innovations ou à des
                changements syntaxique dans un langage de programmation. J'utilise différents moyens pour effectuer ma veille
                technologique. En effet, j'utilise google alerts pour être quotidiennement au courant des nouvelles publications
                sur le net en rapport avec l'intelligence artificielle et la robotique. De plus, je suis abonné à des chaines YouTube
                qui parle de ses domaines.
                J'ai décidé d'effectuer ma veille technologique sur deux domaines qui me passionne. Ces domaines sont l'intelligence
                artificielle et la robotique.
            </p>
            <img src="images/Artificial intelligence-bro.svg" alt="Robot-IA illu">
            <h3>intelligence artificielle</h3>
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
                        <button class="btn btn-primary" id="btn-envoie" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </section>



    </div>


    <?php require_once(__DIR__ . '/footer.php') ?>
    <script src="app.js"></script>
    <script src="card.js"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: [
                "suis étudiant en 2ème année de <span> BTS SIO SLAM </span>",
                "vous souhaite la bienvenue dans <span>mon site !</span>"
            ],
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 1500,
            startDelay: 1000,
            loop: true,
            loopCount: Infinity,
            showCursor: true,
            onStart: function(self) {

                self.options.backDelay = 1500;
            },
            onComplete: function(self) {

                setTimeout(function() {
                    self.reset();
                }, 4200);
            }
        });
    </script>
    <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
    const errorMessageDiv = document.getElementById('error-message');
    
    // Réinitialiser les messages d'erreur
    errorMessageDiv.innerHTML = '';  // Supprimer tout message d'erreur
    let errorMsg = '';

    // Récupérer les valeurs des champs
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value.trim();
    const message = document.getElementById('message').value.trim();

    // Vérification des champs vides
    if (name === '' || email === '' || subject === '' || message === '') {
        errorMsg += 'Tous les champs doivent être remplis !<br>';
    }

    // Vérification de l'email uniquement si tous les champs sont remplis
    if (name !== '' && email !== '' && subject !== '' && message !== '') {
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(email)) {
            errorMsg += 'L\'email saisi n\'est pas valide !<br>';
        }
    }

    // Si des erreurs existent, afficher le message et stopper l'envoi
    if (errorMsg !== '') {
        errorMessageDiv.innerHTML = `<div>${errorMsg}</div>`;
        errorMessageDiv.style.backgroundColor = 'black';
        errorMessageDiv.style.color = '#04f430';
        errorMessageDiv.style.border = '2px solid #04f430';
        errorMessageDiv.style.boxShadow = '0 0 25px #04f430';
        errorMessageDiv.style.padding = '10px';
        errorMessageDiv.style.borderRadius = '10px';
        errorMessageDiv.style.fontSize = '16px';
        errorMessageDiv.style.marginBottom = '50px';
        errorMessageDiv.style.display = 'block';
        event.preventDefault();
    } else {
        
        errorMessageDiv.innerHTML = ''; 
        errorMessageDiv.removeAttribute('style'); 

        
        errorMessageDiv.style.display = 'none'; 
    }
});
</script>
</body>

</html>