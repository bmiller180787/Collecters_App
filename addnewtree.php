<?php

require_once 'dbconnect.php';
require_once 'TreeDBConnect.php';
require_once 'Tree.php';
require_once 'LeafTypeConnect.php';
require_once 'LeafColourConnect.php';
require_once 'FlowerColourConnect.php';


$leafTypeConnect = new LeafTypeConnect();
$leafColourConnect = new LeafColourConnect();
$flowerColourConnect = new FlowerColourConnect();
$leafTypes = $leafTypeConnect->selectLeafType();
$leafColours = $leafColourConnect->selectLeafColour();
$flowerColours = $flowerColourConnect->selectFlowerColour();

require_once 'head.html';

?>

<body>

    <h1>Add new Tree</h1>
    <form class="newtreeform" method="post" action="addcomplete.php">
        <label>Common Name <input type="text" name="name" required></label>
        <label>Scientific Name <input type="text" name="scientific_name" required></label>
        <label for="leaftype">Leaf Type</label>
        <select id="leaftype" name="leaf_type" required>
        <?php
            foreach ($leafTypes as $leafType){
                echo '<option value="' . $leafType['id'] . '">' . $leafType['leaf_type'] . '</option>';
            }
        ?>
        </select>
        <label for="leafcolour">Leaf Colour</label>
        <select id="leafcolour" name="leaf_colour" required>
            <?php
            foreach ($leafColours as $leafColour){
                echo '<option value="' . $leafColour['id'] . '">' . $leafColour['colour'] . '</option>';
            }
            ?>
        </select>
        <label for="flowercolour">Flower Colour</label>
        <select id="flowercolour" name="flower_colour" required>
            <?php
            foreach ($flowerColours as $flowerColour){
                echo '<option value="' . $flowerColour['id'] . '">' . $flowerColour['FlowerColour'] . '</option>';
            }
            ?>
        </select>
        <label>Image Link <input type="text" name="image" required></label>
        <button type="submit">Submit</button><br>
    </form>

    <a href="index.php"><button class="addtreebutton" type="button">Return to collection</button></a>

</body>
