
<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <main>

        <?php
            $lorem = "Con il termine lorem ipsum si indica un testo segnaposto utilizzato da grafici, designer, programmatori e tipografi a modo riempitivo per bozzetti e prove grafiche.[1] È un testo privo di senso, composto da parole (o parti di parole) in lingua latina, riprese pseudocasualmente da uno scritto di Cicerone del 45 a.C, a volte alterate con l'inserzione di passaggi ironici. La caratteristica principale è data dal fatto che offre una distribuzione delle lettere uniforme, apparendo come un normale blocco di testo leggibile.";
            $word = $_GET["word"];
        ?>

        <p><?php echo $lorem?></p>
        <h3>Il paragrafo ha una lunghezza di <?php echo strlen($lorem)?> caratteri</h3>
        <h3>La parola da censurare è <?php echo ucfirst($word) ?>, e di conseguenza viene riportato il testo bannato ;-)</h3>
        <p><?php echo str_replace($word, "***", $lorem)?></p>
        

    </main>    
    
</body>
</html>