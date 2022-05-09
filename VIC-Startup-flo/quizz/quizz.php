<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="quizz.css?v=<?php echo time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Faite le test - Virtual Immo Coach</title>
</head>
<body>

    <?php require('../html_partials/header.php') ?>

        <!-- QUIZZ -->

        <div id="interact-61740fc2a439a300185850f4"></div>

        <script>var app_61740fc2a439a300185850f4;(function(d, t){var s=d.createElement(t),options={"appId":"61740fc2a439a300185850f4","width":"800","height":"800","async":true,"host":"quiz.tryinteract.com","redirect_host":true, "footer":"show"};s.src='https://i.tryinteract.com/embed/app.js';s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs)if(rs!='complete')if(rs!='loaded')return;try{app_61740fc2a439a300185850f4=new InteractApp();app_61740fc2a439a300185850f4.initialize(options);app_61740fc2a439a300185850f4.display();}catch(e){}};var scr=d.getElementsByTagName(t)[0],par=scr.parentNode;par.insertBefore(s,scr);})(document,'script');</script>


        <!-- FOOTER -->

    <?php require('../html_partials/footer.php') ?>

    <script src="quizz.js"></script>
</body>
</html>



