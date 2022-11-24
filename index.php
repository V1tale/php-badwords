<?php

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
    <form action="resp.php" method="GET">
        <label for="paragraph"></label>
        <textarea name="text" id="paragraph" cols="30" rows="10"></textarea>
        <label for="censored"></label>
        <input type="text" id="censored" name="censored">
        <button>Get Started!</button>
    </form>
</body>
</html>