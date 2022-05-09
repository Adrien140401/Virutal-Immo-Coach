<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ressource.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Trois ressources - Virtual Immo Coach</title>
</head>
<body>

    <?php require('../html_partials/header.php') ?>

    <section class="first-block">
        <div class="imagefond">
            <div class="citationImg"> "Le bonheur est la seule chose qui se double si on le partage" </div>
            <div class="auteur">Albert Sweitzer ✍️</div>      
        </div>
    </section>

    <section>
        <br><br>
        <div class="container">
                    <figure class="snip1249 hover">
                        <div class="image">
                            <img src="/images/application.jpg" alt="Image d'un téléphone"/>
                        </div>
                        <figcaption>
                            <h3>Application</h3>
                            <br><br>
                            <p>Apprend à investir dans l'immobilier en toute autonomie avec cette appli tout en un.</p>
                            <a href="https://virtual-immo-coach.web.app/#/" class="add-to-cart">Télécharger la</a>
                        </figcaption>
                    </figure>


                    <figure class="snip1249 hover">
                        <div class="image">
                            <img src="/images/ebook.jpg" alt="Image d'un livre"/>
                        </div>
                        <figcaption>
                            <h3>Livre blanc</h3>
                            <br><br>
                            <p>Comment réaliser un bon investissement locatif en 2022 ?</p>
                            <a href="/eBook/ebook.php " class="add-to-cart">Voir la page</a>
                        </figcaption>
                    </figure>


                    <figure class="snip1249 hover">
                        <div class="image">
                            <img src="/images/pexels-rex-whiticker-3797503.jpg" alt="Image d'une maison"/>
                        </div>
                        <figcaption>
                            <h3>Quizz</h3>
                            <br><br>
                            <p>Es-tu réellment prête.e à investir dans l'immobilier locatif ?</p>
                            <a href="/quizz/quizz.php" class="add-to-cart">Fais le test</a>
                        </figcaption>
                    </figure>
        </div>
    </section>
    
    <section class="second-block">
        <?php require('../html_partials/footer.php') ?>
    </section>
    
    <script src="ressource.js"></script> 

</body>
</html>