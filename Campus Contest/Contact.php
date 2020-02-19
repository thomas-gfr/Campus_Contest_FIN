<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Portfolio GEFFRAY Thomas
    </title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<header>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:black;">
        <a class="navbar-brand" href="index.php">
            <img src="Image/ST.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" >
                <a class="nav-item nav-link active" href="index.php" style="color:white; font-size: 16px; font-family: 'Baloo',cursive;">
                    HOME 
                    <span class="sr-only">
                        (current)
                    </span>
                </a>
                <a class="nav-item nav-link" href="SKILLS.php" style="color:white; font-size: 16px;font-family: 'Baloo',cursive;"> 
                    SKILLS
                </a>
                <a class="nav-item nav-link" href="About.php" style="color:white; font-size: 16px;font-family: 'Baloo',cursive;"
                    >ABOUT
                </a>
                <a class="nav-item nav-link" href="Contact.php" style="color:white; font-size: 16px;font-family: 'Baloo',cursive;">
                    CONTACT
                </a>
            </div>
        </div>
    </nav>
</header>
<div>
    <div class="contact" data-aos="zoom-in">
    <img src="Image/Sans_titre.png" alt="" class="photo top">
        <h1>
            GEFFRAY Thomas
        </h1>
        <p>
            Étudiant en informatique
        </p>
        <a href="https://www.linkedin.com/in/thomas-geffray-10316a198/" style="text-decoration: none;">
            <img src="Image/linkedin-2048-black.png" alt="in" class="fin">
        </a>
        <a href="mailto:thomasobrien806@gmail.com" style="text-decoration: none;">
            <img src="Image/Aiga_mail.png" alt="in" class="fin1">
        </a>
    </div>
    <a href="Image/CV.pdf" style="text-decoration: none; " download="CV">
        <button class="btnfin">
            TÉLÉCHARGER CV
            <img src="Image/Apps-Pdf-icon.png" alt="" class="cv">
        </button>
    </a>
</div>
<div style="text-align: center; margin-bottom: 60px">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #d7b576; border-radius: 10px; color: black; border-color: black;box-shadow: inset 0 0m white, 0 0 2em gray;">
        ME CONTACTER
    </button>
</div>
    
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="recup_donnees.php" method="post">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom :</label>
            <input type="text" class="form-control" id="recipient-name" name="Nom" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Prénom :</label>
            <input type="text" class="form-control" id="recipient-name" name="Prenom">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Adresse mail:</label>
            <input type="text" class="form-control" id="recipient-name" name="Mail">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Objet :</label>
            <input type="text" class="form-control" id="recipient-name" name="Objet">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text" name="Message"></textarea>
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary" >Envoyer Message</button>
        </div>
      </form>
    </div>
  </div>
</div>
<footer class="bot">
    <div class="foot">
        <a href="index.php"data-aos="zoom-in">
            <img src="Image/ST.png" alt="logo3" class="logo3"">
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
<script src="https://unpkg.com/aos@next/dist/aos.js">
</script>
<script>
    AOS.init();
</script>
</body>
</html>