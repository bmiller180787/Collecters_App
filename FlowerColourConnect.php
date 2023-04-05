<?php

require_once 'dbconnect.php';

class FlowerColourConnect
{
    private PDO $dbase;

    public function __construct()
    {
        $this->dbase = connectToDbase('bonsai');
    }

    public function selectFlowerColour(): array
    {
        $sqlstatement = 'SELECT `id`,`colour` AS "FlowerColour"
        FROM `flower_colour`;';

        $query = $this->dbase->prepare($sqlstatement);
        $query->execute();
        return $query->fetchAll();

    }

}