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
<body>
h1>Liste des expositions</h1>

<?php
for ($i = 0; $i < count($listeExpo); $i++) {

    $lesPhotos = getPhotosByIdR($listeExpo[$i]['idR']);
    ?>
    <div class="card">
        <div class="photoCard">
            <?php if (count($lesPhotos) > 0) { ?>
                <img src="photos/<?= $lesPhotos[0]["cheminP"] ?>" alt="photo des expositions" />
            <?php } ?>


        </div>
        <div class="descrCard"><?php echo "<a href='./?action=detail&idR=" . $listeExpo[$i]['idR'] . "'>" . $listeExpo[$i]['nomR'] . "</a>"; ?>
            <br />
            <?= $listeExpo[$i]["nom"] ?>
            <?= $listeExpo[$i]["permanent"] ?>
            <br />
            <?= $listeExpo[$i]["tarifEnfant"] ?>
            <?= $listeExpo[$i]["tarifAdulte"] ?>
        </div>
        <div class="tagCard">
            <ul id="tagFood">


            </ul>


        </div>

    </div>





    <?php
}
?>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>