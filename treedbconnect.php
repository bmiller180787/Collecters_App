<?php

require_once 'tree.php';
require_once 'dbconnect.php';

class TreeDBConnect
{
    private PDO $dbase;

    public function __construct()
    {
        $this->dbase = connectToDbase('bonsai');
    }

    public function fetchAll(): array
    {
        $sqlstatement = 'SELECT `name`,`scientific_name`
        ,`leaf_type`.`leaf_type`,`leaf_colour`.`colour`
        ,`flower_colour`.`colour` AS "FlowerColour",`image`
        FROM `trees`
        INNER JOIN `leaf_colour`
        ON `trees`.`leaf_colour` = `leaf_colour`.`id`
        INNER JOIN `leaf_type`
        ON `trees`.`leaf_type` = `leaf_type`.`id`
        INNER JOIN `flower_colour`
        ON `trees`.`flower_colour` = `flower_colour`.`id`;';

        $query = $this->dbase->prepare($sqlstatement);
        $query->execute();
        $entries = $query->fetchAll();

        $trees = [];
        foreach ($entries as $entry) {
            $tree = new tree($entry['name']
                , $entry['scientific_name']
                , $entry['leaf_type']
                , $entry['colour']
                , $entry['FlowerColour']
                , $entry['image']);
            $trees[] = $tree;
        }

        return $trees;
    }

    public function sortAsc(): array
    {
        $sqlstatement = 'SELECT `name`,`scientific_name`
        ,`leaf_type`.`leaf_type`,`leaf_colour`.`colour`,`flower_colour`.`colour` AS "FlowerColour",`image`
        FROM `trees`
        INNER JOIN `leaf_colour`
        ON `trees`.`leaf_colour` = `leaf_colour`.`id`
        INNER JOIN `leaf_type`
        ON `trees`.`leaf_type` = `leaf_type`.`id`
        INNER JOIN `flower_colour`
        ON `trees`.`flower_colour` = `flower_colour`.`id`
        ORDER BY `name` ASC;';

        $query = $this->dbase->prepare($sqlstatement);
        $query->execute();
        $entries = $query->fetchAll();

        $trees = [];
        foreach ($entries as $entry) {
            $tree = new tree($entry['name']
                , $entry['scientific_name']
                , $entry['leaf_type']
                , $entry['colour']
                , $entry['FlowerColour']
                , $entry['image']);
            $trees[] = $tree;
        }

        return $trees;
    }
}
