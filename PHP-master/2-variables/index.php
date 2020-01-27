<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php 
        $hello = "Hello"; 
        //Afficher la variable $hello//
        echo "$hello <br>";

        $world = "World"; //declare the variable "world"

        $phrase = $hello." ".$world; //concatenates the 2 variables
        echo "$phrase <br>";

        $montantHt = 15.2;
        $tva = 1.2;

        echo " Le montant TTC s'élève à ".$montantHt * $tva ." euros";

    ?>

</body>
</html>