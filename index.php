<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FRAMEWORK -->
    <link rel="stylesheet" href="css/utility-framework.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <title>Bad Words</title>
</head>
<body>
    <header>
        <div class="container">
            <h1><span>BAD </span>Words</h1>
            <h2>Proteggi chi ami censurando parole sconce</h2>
        </div>
        </header>
        <main class="bgprussianblue">
            <div class="container ">               
                <p>Sei uno di quei "genitori elicottero?" pensi che tuo figlio sia sul punto di entrare in una gang criminale solo perchè si esprime in maniera inopportuna? Grazie a questa form, potrai correggere tutti i suoi compiti di scuola, censurando ogni parola incline alla vita da strada. Non ti aiuterà a correggere il suo modo di parlare o aiutarlo nelle frequentazioni, ma almeno potrai dire di averci provato, quando farai la vittima parlando al bar con i tuoi amici.</p>
                <h3>Riempi la form ed invia il testo con le parole da censurare. Ti diremo anche quando è lungo il paragrafo, nel caso dovesse tornarti utile</h3>
                <form action="resp.php" method="GET">
                    <label for="paragraph">Inserisci il testo</label>
                    <textarea name="text" id="paragraph" cols="30" rows="10"></textarea>
                    <label for="censored">Inserisci la parola che vuoi censurare</label>
                    <input type="text" id="censored" name="censored">
                    <button>Get Started!</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>