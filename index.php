<?php

require_once 'dbconnect.php';
require_once 'TreeDBConnect.php';
require_once 'Tree.php';
require_once 'functions.php';

$dbase = new TreeDBConnect();
$trees = $dbase->fetchAll();

require_once 'head.html';
?>

<body>

    <h1>Bonsai Collection</h1>
        <p>My collection so far</p>
    <a href="addnewtree.php"><button class="addtreebutton" type="button">Add new Tree</button></a>

    <section class="trees">

    <?php

    echo returnHtmlFromArray($trees);

    ?>

    </section>

</body>

</html>
