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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="top">
            <p><?php echo $text;?></p>
            <h4><?php echo strlen($text); ?></h4>
        </div>
        <div class="bottom">
            <p><?php  echo $finalText;?></p>
            <h4><?php echo strlen($finalText); ?></h4>
        </div>
    </div>
</body>
</html>