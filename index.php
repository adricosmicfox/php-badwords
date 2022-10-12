<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP page</title>
</head>

<body>

    <?php
    $testo = "I grandi amano le cifre. Quando voi gli parlate di un nuovo amico, mai si interessano alle cose essenziali. Non si domandano mai: «Qual è il tono della sua voce? Quali sono i suoi giochi preferiti? Fa collezione di farfalle?» Ma vi domandano: «Che età ha? Quanti fratelli? Quanto pesa? Quanto guadagna suo padre?» Allora soltanto credono di conoscerlo";

    $badWord = $_GET['badWord'];
    $testoCensurato = str_replace($badWord, '*****', $testo);

    ?>

    <h3>
        <?php
        echo $testo
        ?>

    </h3>

    <h4>
        La lunghezza del testo è di:
        <?php
        echo strlen($testo)
        ?>
        caratteri
    </h4>


    <h3>BadWord:
        <?php echo $badWord
        ?>
    </h3>

    <h3>
        <?php
        echo $testoCensurato
        ?>
    </h3>

    <h4>
        La lunghezza del testo censurato è di:
        <?php
        echo strlen($testoCensurato)
        ?>
        caratteri
    </h4>


</body>

</html>