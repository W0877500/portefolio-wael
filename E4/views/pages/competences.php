<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/styles.css?=v1">
    <title></title>
    <style>
        .navbar {
            text-align: center;
        }

        .mainbloc {
            text-align: center;
        }

        .comp {
            display: inline-block;
            margin: 20px;
        }

        .competence-detail {
            text-align: center;
        }


        main{
    /* background-color: black; */
    width: 100%;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

main a {
    text-decoration: none;
    color :#fff;
    font-weight: bold;
}

.maintitre {
    margin-bottom: 20vh;
    background-color: #262534;
    height: 100%;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    border-bottom-left-radius: 25px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 25px;
    padding-right: 25px;
    margin-top: 50px;
}

.maintitre h1{
    margin-bottom: 8vh;
}

.mainbloc{
    display: flex;
    justify-content: space-between;
    margin: 0 20px;
}

.mainbloc div{
    justify-content: space-between;
}

.grille{
    width: calc(25% - 20px);
}

.grille h2{
    padding-bottom: 10px;
}

.grille p{
    padding-bottom: 20px;
}

.grille {
    width: calc(25% - 40px); /* Ajustement de la largeur pour inclure la marge */
    margin: 20px; /* Augmentation de la marge */
}

.grille h2 {
    padding-bottom: 10px;
}

.grille p {
    padding-bottom: 20px;
}

    </style>
</head>

<body>
    <div class='navbar'>
        <?php include '../include/nav.php'; ?>
        <br>
    </div>
    <main>
        <div class='mainbloc' id='bloc'>
            <div class='grille' id='comp1'>
                <h2>Compétence 1</h2><br>
                <p>Mettre à dispositon des utilisateurs un service informatique</p>
                <a href="../../public/pdf/Compétences_1.pdf" target="_blank" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='comp2'>
                <h2>Compétence 2</h2><br>
                <p>Mettre en œuvre des outils stratégiques de veille informationnel</p>
                <a href="../../public/pdf/Compétences_2.pdf" target="_blank" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='comp3'>
                <h2>Compétence 3</h2><br>
                <p>Gérer des sauvegardes</p>
                <a href="../../public/pdf/Compétences_3.pdf" target="_blank" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='comp4'>
                <h2>Compétence 4</h2><br>
                <p>Traiter des demandes concernant les applications</p>
                <a href="../../public/pdf/Compétences_4.pdf" target="_blank" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='comp5'>
                <h2>Compétence 5</h2><br>
                <p>Travailler en mode projet</p>
                <a href="../../public/pdf/Compétences_5.pdf" target="_blank" class='grille-btn'>Consulter</a>
            </div>
            <div class='grille' id='comp6'>
                <h2>Compétence 6</h2><br>
                <p>Développer la présence en ligne de l'organisation</p>
                <a href="../../public/pdf/Compétences_6.pdf" target="_blank" class='grille-btn'>Consulter</a>
            </div>
        </div>

        <div class="competence-detail" id="competence-detail">
        </div>
    </main>
</body>

</html>
