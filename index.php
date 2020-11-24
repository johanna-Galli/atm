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
                <a href="reservation.php">Réservation</a>
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

    <div class="header text-center">
        <img src="asset/img/exterieur-taxi-1.jpg" class="imgHeader" alt="taxi">
        <div class="titleHeader d-flex justify-content-around">
            <a href="reservation.php">Reservez <br> en ligne</a>
            <a href="tel:+33500000000">ou appelez le <br> 06.00.00.00.00</a>
        </div>

    </div>

    <!-------------------- HEADER END -------------------->

    <!-------------------- MAIN -------------------->
        <div class="bienvenu">
            <p>
                Bienvenu ! ATM effectue tous vos transports de courtes ou longues distances, privés ou professionnels. Nous facilitons tous vos déplacements par des prestations de qualités.
            </p>
            <p>
                Welcome! ATM performs all your short or long distance transport, private or professional. We facilitate all your trips with quality services.
            </p>
            <p>
                Herzlich willkommen! ATM führt alle Ihre privaten oder beruflichen Kurz- oder Ferntransporte durch. Wir erleichtern alle Ihre Reisen mit hochwertigen Dienstleistungen.
            </p>
        </div>





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