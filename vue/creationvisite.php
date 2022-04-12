<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Muséum Vision</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<header>
    <nav>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Museum Vision</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="creationvisite.php">Création d'une visite</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="visiteencours.php">Visite en cours</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="creationexposition.php" tabindex="-1" aria-disabled="true">Création d'une exposition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="statistique.php" tabindex="-1" aria-disabled="true">Statistiques</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </nav>
</header>
<br>
<div class="row m-3">
    <p class="h1 text-center">Création d'une visite</p>
</div>
<div class="row m-3">
    <div class="col-6">
        <p><input id="date" type="date" value="AAAA-MM-JJ"><img src="images/calendrier.jpeg" width="100" height="60"/></p>
    </div>
<form action="tarif" method="post">
        <div class="col-6">
            <p><input type="time" id="appt" name="appt"
                      min="09:00" max="17:30" required>
                <small>Le musée est ouvert de 9h à 18h</small></p>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-4 ">
            <p>Adulte : <input id="number" type="number" value="1" min="0"><img src="images/help.png" width="30" height="10"/></p>
            <div class="row">
                <p>Enfant : <input id="number" type="number" value="1" min="0"><img src="images/help.png" width="30" height="10"/></p>
            </div>
            <br>
            <br>
            <br>
            <div class="col-4">
                <p>Selection d'exposition : </p>
                <?php
                foreach ($listeExpo as $expo){
                ?>
                <div>
                    <input type="checkbox" id="scales" name="scales"
                           checked>
                    <label for="scales"><?php echo $expo['nom']?></label>
                </div>
                <?php } ?>
                <div>
                    <input type="checkbox" id="horns" name="horns">
                    <label for="horns">Exposition temporaire : </label>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-5"
                    <button name="vldvisite" type="submit">Valider la visite</button>
                </div>
                <div class="col-4"
                    <button name="tarif" type="submit">Calculer le tarif</button>
                </div>
            </div>

        </div>
        <div class="col-8">
            <p class="text-center"><img src="images/Titanic.jpg" width="300" height="450"/></p>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
