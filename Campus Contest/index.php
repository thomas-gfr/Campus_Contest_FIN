<?php session_start(); 

?>
<html lang="fr">

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Portfolio GEFFRAY Thomas
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <?php
           if(isset($_SESSION) AND !isset($_SESSION['first_connection']))
           {
               $_SESSION['first_connection'] = "connecte";
                ?>
                  <!-- popup -->
                  <div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-model="true" style="display:  block;">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Nous recueillons vos données :</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            En poursuivant votre navigation sur ce site, vous consentez à partager vos données personnelles dans un cadre profesionnel telles que votre nom, prenom, adresse mail.
                            Les données collectées seront communiquées au seul destinataire suivant : GEFFRAY Thomas
                            Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la CNIL.

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary close-modal-btn" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="modal-backdrop fade show"></div>
                <?php
           }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:black;" >
        <a class="navbar-brand" href="index.php" data-aos="zoom-in">
            <img src="Image/ST.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;" data-aos="zoom-in">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
            <div class="navbar-nav" >
                <a class="nav-item nav-link active" href="index.php" style="color:white; font-size: 16px; font-family: 'Baloo',cursive;" data-aos="zoom-in">
                    HOME 
                    <span class="sr-only">
                        (current)
                    </span>
                </a>
                <a class="nav-item nav-link" href="SKILLS.php" style="color:white; font-size: 16px;font-family: 'Baloo',cursive;" data-aos="zoom-in"> 
                    SKILLS
                </a>
                <a class="nav-item nav-link" href="About.php" style="color:white; font-size: 16px;font-family: 'Baloo',cursive;" data-aos="zoom-in">
                    ABOUT
                </a>
                <a class="nav-item nav-link" href="Contact.php" style="color:white; font-size: 16px;font-family: 'Baloo',cursive;" data-aos="zoom-in">
                    CONTACT
                </a>
            </div>
        </div>
    </nav>
</header>
<div class="back">
    <div class="presentation" data-aos="zoom-in">
        <img src="Image/Sans_titre.png" alt="photo" class="photo">
        <h1>
            GEFFRAY Thomas
        </h1>
        <p>
            Étudiant à Campus Académy <br>
            Bachelor 1ère année <br>
            19 ans
        </p>
    </div>
</div>
<div class="blue2">
        <div class="coeur" data-aos="zoom-in">
            <div class="txt" >
                <h2>
                    MA PERSONNALITÉ
                </h2>
                <span>
                    Je suis actuellement en Bachelor première année informatique à Campus Academy,
                    situé sur le campus de Ker-Lann,
                    cette formation me permet d'apprendre les bases et d'approfondir mes connaisances dans certains
                    languages de programmation.
                    Étant une personne dynamique, motivé et qui apprend vite, je me place dans les meilleurs condition
                    pour réussir au sein de cette école.
                    Je suis également sérieux, autonome et manuel. <br>
                </span>
                <div class="bouton">
                    <a href="Contact.php" style="text-decoration: none;">
                        <button class="btn1">
                            CONTACT
                        </button>
                    </a>
                    <a href="About.php" style="text-decoration: none;">
                        <button class="btn1">
                            MORE
                        </button>
                    </a>
                </div>
            </div>
            <img src="Image/logo2.png" alt="Logo" class="logo2">
        </div>
        <div class="coeur2" data-aos="zoom-in">
            <div class="reco">
                <h3>
                    RECOMMANDATIONS
                </h3>
            </div>
        </div>
    </div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-aos="zoom-in" >
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 100%;background-color: #d6d6d8;">
                <div style="width: 80%; height: 100%;background-color: #d6d6d8; margin:0 auto;">
                    <div class="slide-box-img">
                        <img class="slide-img" src="Image/avatar.jpg">
                            <div class="slide-txt-user">
                                <span style="margin-left: -80px; display: block;"> Monsieur Dubois
                                    <br>
                                    <i>
                                        <span>
                                            PDG Orange
                                        </span>
                                    </i>
                                </span>
                            </div>
                        </div>
                        <div class="slide-contents">
                            test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat magna at pulvinar
                            laoreet. Maecenas fringilla posuere dolor id varius. Maecenas ut libero vel urna feugiat
                            aliquam tempor quis nulla. Vivamus erat diam, bibendum quis erat accumsan, molestie vehicula
                            urna. Nulla accumsan ipsum dui, id lacinia leo elementum ut. Curabitur vitae ultricies
                            risus. Quisque sodales mauris neque, non rutrum libero blandit vel. Ut gravida turpis vitae
                            nunc vehicula, facilisis dictum erat malesuada. Phasellus nec enim non elit ultricies
                            placerat eget ut arcu. Nulla tincidunt nisi non mollis auctor. Curabitur magna tellus,
                            tempus vitae imperdiet sed, blandit sit amet massa. Integer imperdiet lacus tortor, eget
                            dapibus lacus varius nec.
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 100%;background-color: #d6d6d8;">
                    <div style="width: 80%; height: 100%;background-color: #d6d6d8; margin:0 auto;">
                        <div class="slide-box-img">
                            <img class="slide-img" src="Image/avatar.jpg">
                            <div class="slide-txt-user">
                                <span style="margin-left: -80px; display: block;"> Monsieur Dubois
                                    <br>
                                    <i>
                                        <span>
                                            PDG Orange
                                        </span>
                                    </i>
                                </span>
                            </div>
                        </div>
                        <div class="slide-contents">
                            test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat magna at pulvinar
                            laoreet. Maecenas fringilla posuere dolor id varius. Maecenas ut libero vel urna feugiat
                            aliquam tempor quis nulla. Vivamus erat diam, bibendum quis erat accumsan, molestie vehicula
                            urna. Nulla accumsan ipsum dui, id lacinia leo elementum ut. Curabitur vitae ultricies
                            risus. Quisque sodales mauris neque, non rutrum libero blandit vel. Ut gravida turpis vitae
                            nunc vehicula, facilisis dictum erat malesuada. Phasellus nec enim non elit ultricies
                            placerat eget ut arcu. Nulla tincidunt nisi non mollis auctor. Curabitur magna tellus,
                            tempus vitae imperdiet sed, blandit sit amet massa. Integer imperdiet lacus tortor, eget
                            dapibus lacus varius nec.
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 100%;background-color: #d6d6d8;">
                    <div style="width: 80%; height: 100%;background-color: #d6d6d8; margin:0 auto;">
                        <div class="slide-box-img">
                        <img class="slide-img" src="Image/avatar.jpg">
                            <div class="slide-txt-user">
                                <span style="margin-left: -80px; display: block;"> Monsieur Dubois
                                    <br>
                                    <i>
                                        <span>
                                            PDG Orange
                                        </span>
                                    </i>
                                </span>
                            </div>
                        </div>
                        <div class="slide-contents">
                            test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras volutpat magna at pulvinar
                            laoreet. Maecenas fringilla posuere dolor id varius. Maecenas ut libero vel urna feugiat
                            aliquam tempor quis nulla. Vivamus erat diam, bibendum quis erat accumsan, molestie vehicula
                            urna. Nulla accumsan ipsum dui, id lacinia leo elementum ut. Curabitur vitae ultricies
                            risus. Quisque sodales mauris neque, non rutrum libero blandit vel. Ut gravida turpis vitae
                            nunc vehicula, facilisis dictum erat malesuada. Phasellus nec enim non elit ultricies
                            placerat eget ut arcu. Nulla tincidunt nisi non mollis auctor. Curabitur magna tellus,
                            tempus vitae imperdiet sed, blandit sit amet massa. Integer imperdiet lacus tortor, eget
                            dapibus lacus varius nec.
                        </div>
                    </div>
                </div>  <?php
                      include('./Includes/addAvis.php');
                    ?>
            </div> 
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
</div>
<div class="accueillong">
    <div style="text-align: center;"  data-aos="zoom-in">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #3464c1; border-radius: 10px; color: white; border-color: #3464c1; font-family:'Luckiest Guy',cursive ; margin-top: 30px; font-size : 30px; box-shadow: inset 0 0m white, 0 0 2em gray;width:300px; ">
            AJOUTER UN AVIS
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Nouvelle avis
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="recup_donnees_avis.php" method="post" >
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">
                            Nom :
                        </label>
                        <input type="text" class="form-control" id="recipient-name" name="Nom">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">
                            Prénom :
                        </label>
                        <input type="text" class="form-control" id="recipient-name" name="Prenom">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">
                            Entreprise :
                        </label>
                        <input type="text" class="form-control" id="recipient-name" name="Entreprise">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">
                            Message:
                        </label>
                        <textarea class="form-control" id="message-text" name="Message"></textarea>
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Annuler
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Envoyer Avis
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="coeur3" data-aos="zoom-in">
        <h4>
            CONNAISSANCES
        </h4>
        <img src="Image/python.png" alt="python" class="img" data-aos="zoom-in">
        <img src="Image/network.png" alt="network" class="img" data-aos="zoom-in">
        <img src="Image/html.png" alt="html" class="img" data-aos="zoom-in">
        <img src="Image/base.png" alt="BDD" class="img" data-aos="zoom-in">
        <img src="Image/Webysther_20160423_-_Elephpant.svg.png" alt="BDD" class="img" data-aos="zoom-in">
    </div>
</div>
<footer class="bot">
    <div class="foot" data-aos="zoom-in">
        <a href="index.php">
            <img src="Image/ST.png" alt="logo3" class="logo3">
        </a>            
        <div class="cont">
            CONTACT
        </div>
        <p>
            Tel : 06.79.90.37.98 <br>

            Mail : thomasobrien806@gmail.com
        </p>
    </div>
</footer>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>

    AOS.init();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script>
$(document).ready(function()
{
    function closeModal(cls)
    {
        $(cls).click(function()
        {
            $('.modal-backdrop').hide(200,function()
            {
                $('.modal').remove()
            })
            $('.modal').hide(200,function()
            {
                $('.modal-backdrop').remove()
            });

        })
    }
    
    closeModal('.close-modal-btn')
    closeModal('.close')
})
</script>
</body>
</html>