<?php
require_once '../src/model/PdoRequest.php';


$manager = new PdoRequest($db);
$tab = $manager->getList();
var_dump($tab);