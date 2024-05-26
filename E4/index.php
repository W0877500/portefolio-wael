<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/styles.css?v=2">
    <title>E4 Portfolio</title>
</head>

<body>
    <div class='navbar'>
        <?php include './views/include/nav.php'; ?>
    </div>
    <main>


        <div class='maintitre'>
            <h1>
                Portfolio BTS SIO Option SLAM
            </h1>
            <p>
                Bienvenue sur mon portfolio ! Je me présente Waël Rabahi, étudiant en 2e année de BTS SIO option SLAM à AURLOM. <br><br> Explorez mes réalisations pour découvrir mon parcours et mes aptitudes. <br>Merci de votre visite !
            </p>
        </div>



        <div class='mainbloc' id='bloc'>
            <div class='grille' id='grille1'>
                <h2>A propos de moi</h2>
                <p>Vous trouverez <br>ici mon cv.</p>
                <a href="./views/pages/cv.php" target="_blank" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='grille2'>
                <h2>Mes Comptétences E4</h2>
                <p>Les rapport d'activité liés aux compétences de l'épreuve E4.</p>
                <a href="./views/pages/competences.php" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='grille3'>
                <h2>Livraison E4</h2>
                <p>Consulter les rapports d'activités accompagnés du Tableau de Synthèse.</p>
                <a href="./public/rapport/tableau.pdf" target="_blank" class='grille-btn'>Consulter le Tableau</a><br>
                <a href="./public/rapport/Rapport Secure-IP.pdf" target="_blank" class='grille-btn'>Consulter le Rapport</a>
            </div>
            <div class='grille' id='grille4'>
                <h2>Veille technologique</h2>
                <p>Le suivi des évenements dans le milieu informatique.</p>
                <a href="./views/pages/veille.php" class='grille-btn'>Consulter</a>
            </div>
        </div>
    </main>
    <footer>
        <?php include("./views/include/footer.php"); ?>
    </footer>
</body>

</html>