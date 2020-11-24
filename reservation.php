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
    <h3 class="text-center pt-3 pb-3 font-weight-bold">Réservation en ligne :</h3>

    <form action="form.php" method="post" class="mx-auto">

        <!-- Informations client -->
        <div class="infoClient mb-3">
            <h4 class="pb-3">Informations client :</h4>
            <div class="inputSize">
                <input type="text" maxlength="50" name="name" placeholder="Nom" class="inputs" id="inputName">
                <p class="error" id="inputNameError"></p>
            </div>
            <div class="inputSize">
                <input type="text" maxlength="50" name="forename" placeholder="Prénom" class="inputs" id="inputForename">
                <p class="error" id="inputForenameError"></p>
            </div>
            <div class="inputSize">
                <input type="text" maxlength="150" name="adressPostal" placeholder="Adresse postale" class="inputs" id="inputAdressPostal">
                <p class="error" id="inputAdressPostalError"></p>
            </div>
            <div class="inputSize">
                <input type="text" maxlength="7" name="codepostal" placeholder="Code postal" class="inputs" id="inputCodePostal">
                <p class="error" id="inputCodePostalError"></p>
            </div>
            <div class="inputSize">
                <input name="ville" placeholder="Ville" maxlength="60" class="inputs" id="inputVille"></input>
                <p class="error" id="inputVilleError"></p>
            </div>
            <div class="inputSize">
                <input name="phone" placeholder="Téléphone" maxlength="15" class="inputs" id="inputPhone"></input>
                <p class="error" id="inputPhoneError"></p>
            </div>
            <div class="inputSize">
                <input name="email" placeholder="E-mail" maxlength="30" class="inputs" id="inputMail"></input>
                <p class="error" id="inputMailError"></p>
            </div>
        </div>

        <!-- Voyage -->
        <div class="infoClient">
            <h4>Voyage :</h4>

            <!-- Départ -->
            <h5>Départ :</h5>
            <div class="inputSize">
                <input name="ville" placeholder="Ville" maxlength="60" class="inputs" id="inputVille"></input>
                <p class="error" id="inputVilleError"></p>
            </div>

            <!-- Arrivée -->
            <h5>Arrivée :</h5>
        </div>




        <div>
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