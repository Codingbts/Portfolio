<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portfolio.css">
    <title>Portfolio - Email envoyé</title>
</head>

<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <div class="container">
        <div class="msgconf">
            <h1>Votre message a bien été envoyé.</h1>
            <h2>Merci d'avoir pris le temps de me contacter !</h2>
        </div>
        <div class="container-bas">
            <img src="images/Contact us-bro.svg" alt="Contact-img">
            <a href="portfolio.php">Retourner à mon portfolio</a>
        </div>
    </div>
    <?php include_once(__DIR__ . '/footer.php') ?>
</body>

</html>