<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ATM</title>
    <link rel="icon" type="image/png" sizes="16x16" href="asset/img/logo-ATM-2.png">

    <!-- style bootstrap -->
    <link rel="stylesheet" href="asset/style/bootstrap.min.css">
    <!-- style font awesome -->
    <link rel="stylesheet" href="asset/fontawesome-free-5.15.0-web/css/all.min.css">
    <!-- style general -->
    <link rel="stylesheet" href="asset/style/style.css">
    <!-- style header -->
    <link rel="stylesheet" href="asset/style/header.css">
    <!-- style reservation -->
    <link rel="stylesheet" href="asset/style/reservation.css">
    <!-- style footer -->
    <link rel="stylesheet" href="asset/style/footer.css">


</head>
<!---->

<body>
    <!-------------------- HEADER -------------------->
    <!--Navbar-->
    <nav>
        <!--Logo-->
        <a href="index.php" class="d-flex">
            <img class="logoAtm m-auto" src="asset/img/logo-ATM-2.png" alt="logo ATM">
        </a>


        <!--Liens-->
        <ul class="navLinks">
            <li>
                <a href="index.php">Accueil</a>
            </li>
            <li>
                <a href="#">Réservation</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

        <!--menu burger-->
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <!-------------------- HEADER END -------------------->

    <!-------------------- MAIN -------------------->

    <!--Formulaire de contact-->
    <h4 class="text-center">Réservation en ligne :</h4>

    <form action="form.php" method="post">

        <div class="sizeInput">
            <input type="text" maxlength="50" name="name" placeholder="Nom" class="inputs" id="inputName">
            <p class="error" id="inputNameError"></p>
        </div>
        <div class="sizeInput">
            <input type="text" maxlength="100" name="subject" placeholder="Sujet" class="inputs" id="inputSubject">
            <p class="error" id="inputSubjectError"></p>
        </div>
        <div class="sizeInput">
            <input type="email" maxlength="100" name="mail" placeholder="Mail" class="inputs" id="inputMail">
            <p class="error" id="inputMailError"></p>
        </div>
        <div class="sizeInput">
            <textarea name="message" placeholder="Message" maxlength="3000" class="inputs" id="inputMessage"></textarea>
            <p class="error" id="inputMessageError"></p>
        </div>
        <div class="sizeInput">
            <input type="submit" value="Envoyer" class="button d-bloc block mx-auto" name="page_formulaire">
            <p id="feedBackMail"></p>
        </div>

    </form>
    <!-------------------- MAIN END -------------------->

    <!-------------------- FOOTER -------------------->
    <div class="footer row">
        <!-- gauche -->
        <div class="m-auto col-12 order-3 col-sm-4 order-sm-1">
            <p>
                Design : <a href="http://johanna-galli.fr">Johanna Galli</a>
            </p>
            <a href="#">Mentions légales</a>
        </div>

        <!-- milieu -->
        <img class="col-12 order-2 col-sm-4 order-sm-2" src="asset/img/logo-ATM-2.png" alt="logo ATM">

        <!-- droite -->
        <div class="m-auto col-12 order-1 col-sm-4 order-sm-3">
            <p>
                CONTACT :
            </p>
            <p>
                adresse mail
            </p>
        </div>
    </div>
    <!-------------------- FOOTER END -------------------->
</body>

<!-- JS -->
<script src="asset/js/navbar.js"></script>
<!-- JS Bootstrap -->
<script src="asset/js/bootstrap.min.js"></script>

</html>