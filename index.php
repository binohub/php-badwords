<?php
    $nome = "Tom";
    $cognome = "Holland";
    $age = "22";
    $spiderman = $nome . " " . $cognome . " " . $age;
    
    $paragrafoditesto = "lorem ipsum dolor, sit amet consectetur lorem adipisicing elit. Quas assumenda officiis nesciunt obcaecati et recusandae atque cum id saepe illo eum, voluptatibus asperiores ipsa. Aut commodi ducimus doloremque velit magnam.";
    $nuovastringa = str_replace("lorem", "***", $paragrafoditesto,);
    $stringaexplode = explode("lorem", $paragrafoditesto);
    $stringapos = strpos($paragrafoditesto, "ipsa");
    $stringaucwords = ucwords($paragrafoditesto);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Intro</title>
</head>
<body>
    <h3>PHP Intro</h3>
    <h4>
        <?php
            var_dump($nome);
            var_dump($cognome);
            var_dump($age);
            var_dump($spiderman);

        ?>
    </h4>
    <h4>
        <?php
            var_dump("il paragrafo di testo possiede una length di: " . strlen($paragrafoditesto) . " caratteri");
            echo $paragrafoditesto;
        ?>
    </h4>
    <h4>
        <?php
            var_dump("la nuova stringa censura i lorem!");
            echo $nuovastringa;
        ?>
    </h4>
    <h4>
        <?php
            var_dump("la nuova stringa mi ritorna un array di stringhe, in base al delimitatore scelto");
            var_dump($stringaexplode);
        ?>
    </h4>
    <h4>
        <?php
            var_dump("cerco e ti informa sulla posizione in cui si trova la stringa da lei desiderata (ipsa)");
            var_dump($stringapos);
        ?>
    </h4>
    <h4>
        <?php
            var_dump("rendo maiuscolo il primo carattere di ogni parola!");
            var_dump($stringaucwords);
        ?>
    </h4>

</body>
</html>