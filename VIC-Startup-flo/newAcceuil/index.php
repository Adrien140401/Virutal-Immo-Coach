<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>newAcceuil</title>
</head>
<body>

    <!-- ****** NAVBAR + HAMBURGER ****** -->
        
    <?php require('../html_partials/header.php'); ?>


        <!-- *********** TITLE + BUTTON + CITATION **************-->

 
        <div class="container">
            <div class="text-container">
                <h1>Virtual Immo Coach</h1>
                <br>
                <p class="citation-page"><em>Ils ne savaient pas que c'était impossible, alors ils l'ont fait.</em></p>
                <button><span>A Propos</span></button>
            </div>
        </div>
    
    </section>


    <!-- ***************** FIRST SECTION ******************* -->
    

    <section class="first-block">
        <div class="block-text">
            <p>Es-tu réellement prêt(e) à investir dans l'immobilier locatif ?</p>
            <br>
            <a href="#" class="btntest">Fais le test !</a>
            <p>Lance toi à ton rythme.</p>
        </div>
        
        <div class="parent">
            <div class="division div1">
                <p>Je découvre l'investissement locatif</p>
                <img class="programme" src="/images/Programme_1.jpg" alt="Programme1">  
                <a class="link" href="programme.html#programme1"> Je découvre → </a>
            </div>
            <div class="division div2">
                <p>Je dépasse mes peurs</p>
                <img class="programme" src="/images/Programme_2.jpg" alt="Programme2">
                <a class="link" href="programme.html#programme2"> Je me lance → </a>
            </div>
            <div class="division div3">
                <p>Je me laisse guider</p>
                <img class="programme" src="/images/Programme_3.jpg" alt="Programme3">
                <a class="link" href="programme.html#programme3"> Je m'engage → </a>
            </div>
        </div>
    </section>

    <section class="second-block">
        <a href="programme.html" class="btnprog">Découvre tout les Programmes</a>
        <p class="temoins">Ils témoignent :</p>

        <div class="container_container">
                <div class="testimonials_container" >
                    <div class="testimonial_item">
                        <img src="/images/avatar1.png" alt="avatar1"/>
                        <div class="testimonial_info">
                            <p>« Cette formation nous a donné tous les outils et les informations nécessaires pour investir de manière sereine dans notre premier achat locatif. 
                                Victoria est très pédagogue et disponible, ce qui est très rassurant pour ce genre de démarche. 
                                Les sessions sont complétées avec de nombreux fichiers très utiles pour calculer la rentabilité, prévoir les visites, chercher un financement... Et surtout le résultat : en moins de trois mois nous avons pu investir dans notre premier projet locatif ! 
                                Je recommandes à fond cette formation. » 
                            </p>
                            <h6>Camille & Lucas</h6>
                        <div class="testimonial_rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        </div>
                    </div>
                </div>
            
                <div class="testimonials_container">
                    <div class="testimonial_item">
                        <img src="/images/avatar2.jpeg" alt="avatar2"/>
                        <div class="testimonial_info">
                            <p>« La formation est très intéressante. On voit en détail toutes les étapes de l’investissement immobilier.
                                 De la réflexion du projet à la location du bien. Victoria donne tout au long de cette formation de précieux conseils et est toujours disponible pour répondre à nos questions.
                                  Grace a elle nous nous sommes mis des objectifs. En 3 mois on a trouvé un bien rentable et signé le compromis de vente 🙂 » 
                            </p>
                            <h6>Julian & Séverine</h6>
            
                        <div class="testimonial_rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
            
                        </div>
            
                    </div>
                </div>
            
                <div class="testimonials_container">
                    <div class="testimonial_item">
                        <img src="/images/avatar3.webp" alt="avatar3"/>
                        <div class="testimonial_info">
                            <p>« Ayant pour projet d’investir dans un appartement, nous avons fait appel à Victoria qui a su parfaitement répondre à toutes nos interrogations, sur tous les points de vue. 
                                Grâce à Victoria, nous voyons plus clair aujourd’hui concernant notre projet. 
                                Je vous recommande vivement de la contacter pour tout projet d’investissement, personne très fiable qui saura répondre et vous aiguiller dans vos projets! » 
                            </p>
                            <h6>Alisson</h6>
            
                        <div class="testimonial_rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        </div>
                    </div>
                </div>
    </section>


    <section class="third-block">   
        <div class="verticaltext">
            <h3>Email</h3>
            <p>Recevoirs des emails pour découvrir l'immobilier sous un nouveau jour →</p>
        </div>
        <div class="textprenom"><input class="inputName" type="Prenom" name="txtprenom" id="txtprenom" value="" placeholder="Prénom" enable/></div>
        <div class="textemail"><input class="inputEmail" type="Email" name="txtemail" id="txtemail" value="" placeholder="Email" enable/></div>
        
         <?php require('../html_partials/footer.php'); ?>

    </section>
       
    <script src="index.js"></script>
</body>
</html>
