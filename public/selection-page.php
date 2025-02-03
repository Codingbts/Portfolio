<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - selection</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,200;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="selection-page.css">
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
</head>

<body>
<div class="main"></div>
<div id="overlay"><h1>Sélection du type de <span>Portfolio</span></h1></div>

    <div class="container">
        <div class="modes-container">
            <div class="site">
                <div class="mode classic" id="classic">
                    <div class="screen">
                        <a href="portfolio.php"><img src="images/classic-site.png" alt="site portfolio"></a>
                    </div>

                </div>
                <div class="titre-info">
                    <span>Site</span>
                    <h3>Temps estimé : 2min</h3>
                </div>
            </div>

            <div class="jeu">
                <div class="mode game" id="game">
                    <div class="screen">
                        <img src="images/portfolio-game.png" alt="portfolio-game">
                    </div>

                </div>
                <div class="titre-info">
                    <span>Jeu</span>
                    <h3>Temps estimé : </h3>
                </div>
            </div>
        </div>
    </div>

    <audio id="hover-sound" src="hover-sound.mp3"></audio>

    <script>
        document.querySelectorAll('.mode').forEach(mode => {
            mode.addEventListener('mouseenter', () => {
                const sound = document.getElementById('hover-sound');
                sound.play();
            });

            mode.addEventListener('click', (e) => {
                if (e.target.id === 'classic') {
                    window.location.href = "portfolio.php";
                } else if (e.target.id === 'game') {
                    window.location.href = "game-portfolio.php";
                }
            });
        });
    </script>
</body>

</html>


