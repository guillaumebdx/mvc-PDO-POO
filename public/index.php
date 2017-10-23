<?php
require_once '../src/model/QuestManager.php';
require_once '../src/view/header.html';


$manager = new QuestManager($db);
$tab = $manager->getList();

echo "<table class=\"table table-bordered table-hover\">
<thead><tr><th>Id</th><th>Nom</th><th>Course</th><th>Score</th></tr> </thead>";
foreach ($tab as $v) {
    echo "<tr class=\"info\">";
    echo "<td>" . $v->_id . "</td>";
    echo "<td>" . $v->_name . "</td>";
    echo "<td>" . $v->_course . "</td>";
    echo "<td>" . $v->_score . "/10</td>";
    echo "</tr>";
}
echo " </table>";

