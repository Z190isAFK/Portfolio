<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="../Portfolio/Styles/style.css">
    <title>Portfolio - ZIP0</title>
</head>
<body>
    <?php include '../Portfolio/Include/navbar.php'; ?>

    <section class="acceuil">
        <div class="acceuil-content">
            <div class="acceuil-img">
                <img src="Image/zipo_logo.jpg" alt="Image de profil">
            </div>
            <div class="text-content">
                <h1>Bonjour je suis <span>Z190</span></h1>
                <h3 class="typing-text">Je suis <span>Développeurᴶᵘⁿᶦᵒʳ</span></h3>
                <p>Actuellement en deuxième année de mon BTS SIO Option SLAM, voici mon portfolio réalisé par mes soins. Vous découvrirez Mon travail à l'école et mes projets personnels. Bonne visite !</p>
                <h3 class="typing-text">Me suivre :</h3>
                <div class="social-icon">
                    <a href="https://github.com/Z190isAFK" aria-label="GitHub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://x.com/isZ190" aria-label="Twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/l3_zip0/" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="404.php" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include '../Portfolio/parcours.php'; ?>

    <?php include '../Portfolio/Include/footer.php'; ?>

</body>
</html>