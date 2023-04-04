<?php

require_once 'dbconnect.php';
require_once 'treedbconnect.php';
require_once 'tree.php';

$dbase = new TreeDBConnect();
$trees = $dbase->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collectors App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="description" content="My Bonsai Collection">
    <meta name="author" content="Brent Miller">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

    <h1>Bonsai Collection</h1>
        <p>My collection so far</p>

    <section class="trees">
    <?php
    $htmlbody = '';
        foreach($trees as $tree){
            $htmlbody .= '<div class="card">'
            . '<div><img src="' . $tree->getImageLink() . '" alt="A ' . $tree->getName() . '"></div>'
            . '<h2>' . $tree->getName() . '</h2>'
            . '<p>' . $tree->getScientificName() . '</p>'
            . '</div>'
            ;
        }

        echo $htmlbody;

    ?>
    </section>

</body>

</html>
