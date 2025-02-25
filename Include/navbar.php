<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Portfolio - ZIP0</title>
</head>
<body>
    <header>
        <nav>
            <!-- Lien Accueil -->
            <a href="index.php">Accueil</a>
            
            <!-- Menu déroulant - Mes Projets -->
            <div class="dropdown">
                <a href="#">Mes Projets</a>
                <div class="dropdown-content">
                    <a href="#">Projets École</a>
                    <div class="submenu">
                        <a href="#">Projets Personnels</a>
                        <div class="submenu-content">
                            <a href="#">Dev</a>
                            <a href="#">Unreal Engine 5 / Autres</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Autres sections -->
            <a href="Étude.php">Études</a>
            <a href="#">BTS SIO</a>
            <a href="#">Veille technologique</a>
            <a href="#">C.V</a>

            <!-- Bouton pour basculer le thème (original) -->
<button id="theme-toggle" class="theme-btn">
    <i class="fas fa-moon"></i> <!-- Icône par défaut (nuit) -->
</button>
        </nav>  
    </header>

    <!-- Inclusion du script JavaScript -->
    <script src="../Portfolio/Script/script_jour_nuit.js"></script>
</body>
</html>