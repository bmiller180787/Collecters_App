<?php

require_once 'dbconnect.php';

class LeafTypeConnect
{
    private PDO $dbase;

    public function __construct()
    {
        $this->dbase = connectToDbase('bonsai');
    }

    public function selectLeafType(): array
    {
        $sqlstatement = 'SELECT `id`,`leaf_type`.`leaf_type`
        FROM `leaf_type`;';

        $query = $this->dbase->prepare($sqlstatement);
        $query->execute();
        return $query->fetchAll();

    }

}