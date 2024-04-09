<?php
$piattiTipici = [
    "iPrimi" => [
    "lunedi" => "lasagna", 
    "martedi" => "spaghetti",
    "mercoledi" => "parmigiana",
    "giovedi" => "amatriciana",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PRIMO ESERCIZIO</h1>
    
    <ul>
        <?php
        foreach ($piattiTipici as $tipologies => $plat) { ?>
            <li>
            <h2><?php $tipologies ?></h2>
            <ul><?php
            foreach ($plat as $days => $plat_name) {
            echo "<li> <strong>$days</strong>: $plat_name </li>";
        }?>
        </ul>
            </li><?php
        }?>
    </ul>

    <ul>
        <?php
        foreach ($plat as $days => $plat_name) {
            echo "<li> <strong>$days</strong>: $plat_name </li>";
        }?>       
    </ul>
</body>
</html>