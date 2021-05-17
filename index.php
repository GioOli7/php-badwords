<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<?php 
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita et natus aliquid sit! Nam incidunt modi repellat ipsa totam quis, dolorem architecto adipisci aut iure nostrum assumenda. Cumque, aliquid. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde expedita et natus aliquid sit! Nam incidunt modi repellat ipsa totam quis, dolorem architecto adipisci aut iure nostrum assumenda. Cumque, aliquid.';
$badword = $_GET["badword"];
?>

<h3>Paragrafo originale:</h3>
<p><?php echo $paragraph ?></p>
<span>La lunghezza del paragrafo è di <?php echo strlen($paragraph) ?> caratteri</span>

<h3>Paragrafo censurato:</h3>
<p><?php echo str_replace($badword, '***', $paragraph) ?></p>
    
</body>

</html>