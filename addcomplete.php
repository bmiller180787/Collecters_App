<?php
require_once 'head.html';
require_once 'Tree.php';
require_once 'TreeDBConnect.php';

$tree = new TreeDBConnect();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $scientific_name = $_POST['scientific_name'];
    $leaf_type = $_POST['leaf_type'];
    $leaf_colour = $_POST['leaf_colour'];
    $flower_colour = $_POST['flower_colour'];
    $image = $_POST['image'];
}

if ($_POST['name'] === '' || $_POST['scientific_name']
    === '' || $_POST['leaf_type']
    === '' || $_POST['leaf_colour']
    === '' || $_POST['flower_colour']
    === '' || $_POST['image'] === '') {
    echo '<a<p>Please complete all fields in form</p>
    <a href="addnewtree.php"><button class="button" type="button">Return to Form </button></a>';
    exit();
}
$newTree = new Tree($name
    ,$scientific_name
    ,$leaf_type
    ,$leaf_colour
    ,$flower_colour
    ,$image);

$tree->addNewTree($newTree);

?>
<h1>Tree Added</h1>
<a href="index.php"><button class="addtreebutton" type="button">Return to Collection </button></a>

</HTML>
