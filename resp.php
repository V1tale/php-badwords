<?php
$text = $_GET ["text"];
$censored = $_GET ["censored"];
$finalText = str_replace($censored, "***", $text);
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
        <div class="container">
            <div class="top">
                <h3>Il testo che hai inserito:</h3>
                <p><?php echo $text;?></p>
                <h3>La quantità di lettere presenti nel testo:</h3>
                <h4><?php echo strlen($text); ?></h4>
            </div>
            <div class="bottom">
                <h3>Il testo censurato:</h3>
                <p><?php  echo $finalText;?></p>
                <h3>La quantità di caratteri nel testo censurato:</h3>
                <h4><?php echo strlen($finalText); ?></h4>
            </div>
        </div>
    </main>
</body>
</html>