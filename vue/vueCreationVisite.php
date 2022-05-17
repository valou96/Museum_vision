<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Muséum Vision</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<br>
<form action="./?action=tarif" method ="post">
    <div class="row m-3">
        <p class="h1 text-center">Création d'une visite</p>
    </div>
    <div class="row m-2">
        <div class="col-5">
            <p><input id="date" type="date" value="AAAA-MM-JJ"><img src="images/calendrier.jpeg" width="100" height="60"/></p>

                <p><input type="time" id="appt" name="appt" min="09:00" max="17:30">
                    <small>Le musée est ouvert de 9h à 18h</small></p>

                <p>Adulte : <input id="nbadulte" name="nbadulte" type="number" value="1" min="0">
                <p>Enfant : <input id="nbenfant" name="nbenfant" type="number" value="1" min="0">
        </div>
        <div class="col-5">

            <br>
            <p>Expositions</p>
            <?php
            foreach ($listeExpo as $expo){
            ?>
            <div>
                <input type="checkbox" id="<?php echo 'expo'.$expo['idexposition']?>" name="<?php echo 'expo'.$expo['idexposition']?>">
                <label for="<?php echo 'expo'.$expo['idexposition']?>"><?php echo $expo['nom']?></label>
            </div>
                <?php } ?>
        </div>
    </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-5">
                        <button name="vldvisite" type="submit">Valider la visite</button>
                    </div>
                    <div class="col-4">
                        <button name="tarif" type="submit">Calculer le tarif</button>
                    </div>
                <div class="row">
                    <div class="col3"
                         <p><?php echo $Tarifvisite = getexposition(); ?> Euros</p>

    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
