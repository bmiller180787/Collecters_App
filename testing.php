<?php
require_once 'tree.php';
require_once 'treedbconnect.php';

$treedbconnect = new treedbconnect();
$trees = $treedbconnect->sortAsc();

echo '<pre>';
print_r($trees);
echo '</pre>';
