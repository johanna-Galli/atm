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
    <!-- style main -->
    <link rel="stylesheet" href="asset/style/main.css">
    <!-- style welcome -->
    <link rel="stylesheet" href="asset/style/welcome.css">
    <!-- style prestation -->
    <link rel="stylesheet" href="asset/style/prestation.css">
    <!-- style tarif -->
    <link rel="stylesheet" href="asset/style/tarif.css">
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

    <!-- background Navbar-->
    <div class="bgNav"></div>


    <div class="header text-center">
        <img src="asset/img/exterieur-taxi-1.jpg" class="imgHeader" alt="taxi">
        <div class="titleHeader d-flex justify-content-around">
            <a href="reservation.php">Reservez <br> en ligne</a>
            <a href="tel:+33500000000">ou appelez le <br> 06 00 00 00 00</a>
        </div>

    </div>

    <!-------------------- HEADER END -------------------->
    <!-------------------- inter navbar -------------------->
    <ul class="secondNav">

        <li class="welcomeButton">
            <a class="text-uppercase" href="#welcome">Bienvenue </a>
            <hr>
        </li>

        <li>
            <a class="text-uppercase" href="#prestations">Nos préstations</a><span class="verticalLine"></span>
        </li>

        <li class="Tarifs">
            <a class="text-uppercase" href="#Tarifs">Nos tarifs</a>
        </li>

        <!--encre partie welcome-->
        <div id="welcome"></div>
    </ul>

    <!-------------------- MAIN -------------------->
    <div class="row">

        <!-------------------- welcome -------------------->
        <div class="mx-auto p-0 col-10 col-xl-8">

            <div class="welcome">
                <h2 class="text-uppercase">
                    Bienvenue chez <span class="font-weight-bold">ATM</span>, votre solution de transport
                </h2>
                <p class="text-justify">
                    <span class="font-weight-bold">ATM</span> effectue tous vos transports de courtes ou longues distances, privés ou professionnels et jusqu'a 7 voyageurs par véhicule. Nous vous facilitons tous vos déplacements par des prestations de qualités et vous offrons un accompagnement personnalisé.
                </p>
                <p class="text-justify">
                    Grâce à notre équipe de professionels, nous sommes à votre disposition <span class="font-weight-bold">7J/7</span> et <span class="font-weight-bold">24H/24</span>.
                </p>
                <div class="row">
                    <p class="m-auto p-0 col-12 order-2 col-sm-8 order-sm-1">
                        Réservez votre chauffeur en téléphonant au <a href="tel:+33500000000">06 00 00 00 00</a> ou en quelques clics en remplissant notre formulaire de <a href="reservation.php">réservation</a> en ligne.
                    </p>

                    <div class="text-center col-12 order-1 col-sm-4 order-sm-2 pt-2 pb-2">
                        <img src="asset/img/phone-1.jpg" alt="telephone" class="imgPhone rounded-circle ">
                    </div>
                </div>

            </div>
        </div>


        <!-------------------- prestations -------------------->

        <div class="prestations">

            <!--encre partie prestations-->
            <div id="prestations"></div>

            <div class="mx-auto p-0 col-10 col-xl-8">
                <h2 class="text-uppercase mb-5">
                    Nos préstations
                </h2>
                <div class="d-flex">
                    <!-------------------- Entreprise -------------------->
                    <div>
                        <img src="asset/img/business.jpg" alt="business man" class="imgBusinessMan rounded-sm">
                        <p class="text-justify">
                            Nous effectuons la prise en charge globale de vos clients, fournisseurs, ou salariés pendant leur séjour professionnel. Ouverture d'un compte entreprise avec règlement à 30 jours.
                        </p>
                    </div>
                    <!-------------------- Aeroport -------------------->
                    <div>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque, accusantium necessitatibus possimus dolore dolorem iure, iusto nobis eius nisi, modi dicta quos repudiandae deserunt sunt eveniet totam quibusdam facere quod!
                        </p>
                        <img src="asset/img/avion-1.jpg" alt="Aéroport" class="imgBusinessMan rounded-sm">
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa illum, ex perferendis soluta fuga totam sed veniam doloribus vel atque neque veritatis? Id aperiam provident nulla obcaecati officia suscipit alias?
                        </p>
                    </div>
                    <!-------------------- Hopital -------------------->
                    <div>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, veritatis sapiente. Ab placeat error maxime quibusdam repudiandae ducimus, nostrum, magni, blanditiis cupiditate cum dolor dignissimos eos voluptate vitae libero impedit!
                        </p>
                        <img src="asset/img/business.jpg" alt="business man" class="imgBusinessMan rounded-sm">

                    </div>
                </div>
            </div>
        </div>
        <div class="parallax"></div>

        <!-------------------- tarifs -------------------->
        <div id="tarifs">
            <ul>
                <li>Tarif dégréssif</li>
                <li>fidélité</li>
                <li>abonnement</li>
                <li>Paiement par CB</li>
            </ul>
        </div>

    </div>

    <!-------------------- MAIN END -------------------->

    <!-------------------- FOOTER ------------------
    <div class="footer row">-->
    <!-- gauche 
        <div class="m-auto col-12 order-3 col-sm-4 order-sm-1">
            <p class="text-justify">
                Design : <a href="http://johanna-galli.fr">Johanna Galli</a>
            </p>
            <a href="#">Mentions légales</a>
        </div>-->

    <!-- milieu 
        <img class="col-12 order-2 col-sm-4 order-sm-2" src="asset/img/logo-ATM-2.png" alt="logo ATM">-->

    <!-- droite 
        <div class="m-auto col-12 order-1 col-sm-4 order-sm-3">
            <p class="text-justify">
                CONTACT :
            </p>
            <p class="text-justify">
                adresse mail
            </p>
        </div>
    </div>-->
    <!-------------------- FOOTER END -------------------->
</body>

<!-- JS -->
<script src="asset/js/navbar.js"></script>
<!-- JS header -->
<script src="asset/js/header.js"></script>
<!-- JS Bootstrap -->
<script src="asset/js/bootstrap.min.js"></script>

</html>