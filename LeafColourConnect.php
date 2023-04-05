<?php

require_once 'dbconnect.php';

class LeafColourConnect
{
    private PDO $dbase;

    public function __construct()
    {
        $this->dbase = connectToDbase('bonsai');
    }

    public function selectLeafColour(): array
    {
        $sqlstatement = 'SELECT `id`,`leaf_colour`.`colour`
        FROM `leaf_colour`;';

        $query = $this->dbase->prepare($sqlstatement);
        $query->execute();
        return $query->fetchAll();

    }

}
