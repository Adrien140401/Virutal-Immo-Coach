<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon blog - Virtual Immo Coach</title>
    <link rel="stylesheet" href="blog.css?v=<?php echo time(); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <section class="try1">
        
        <?php require('../html_partials/header.php') ?>

        <div class="containes container_solid">
            <div class="title_page">
                <h4>N'attendez pas pour investir dans l'immobilier. Investissez et attendez</h4>
            </div>
        </div>
        <div class="containes container_image" aria-hidden="true">
            <div class="title_page">
                <h4>N'attendez pas pour investir dans l'immobilier. Investissez et attendez</h4>
                <p class="name">T.Harv Eker</p>
            </div>
        </div>
    </section>
    <section class="try2">
        <h2>Les derniers articles publiés.</h2>
         <div class="parent" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <div class="div1">
                <img src="/images/digital-art-398342_1280.webp" alt="">
            </div>
            <div class="div2">
                <img src="/images/coffee-6943139_1280.webp" alt="">
            </div>
            <div class="div3">
                <img src="/images/mountains-55067_1280.webp" alt="">
            </div>
            <div class="group div4">
                <h3>Fiscalité</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate mollitia, voluptatem incidunt consequuntur quidem ipsam molestiae odit assumenda iure amet.</p>
            </div>
            <div class="group div5">
                <h3>Fondations</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem repellat minus fugiat veritatis amet sunt illum eveniet recusandae ex maxime?</p>
            </div>
            <div class="group div6">
                <h3>Thématique</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illo atque eaque velit in, possimus harum sapiente optio maxime aut?</p>
            </div>
        </div>

        <div class="parent" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <div class="div1">
                <img src="/images/italy-6728318_1280.webp" alt="">
            </div>
            <div class="div2">
                <img src="/images/pexels-daniel-frese-2983472.jpg" alt="">
            </div>
            <div class="div3">
                <img src="/images/pexels-rex-whiticker-3797503.jpg" alt="">
            </div>
            <div class="group div4">
                <h3>Travaux</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate mollitia, voluptatem incidunt consequuntur quidem ipsam molestiae odit assumenda iure amet.</p>
            </div>
            <div class="group div5">
                <h3>Recherche</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem repellat minus fugiat veritatis amet sunt illum eveniet recusandae ex maxime?</p>
            </div>
            <div class="group div6">
                <h3>Finance</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui illo atque eaque velit in, possimus harum sapiente optio maxime aut?</p>
            </div>
        </div>

        <br>
        
    </section>

    <section class="footer-section">
        <?php require('../html_partials/footer.php') ?>
    </section>

      
    <script>
        AOS.init();
    </script>
    <script src="blog.js"></script>
</body>
</html>