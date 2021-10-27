<!doctype html>
<html>

<head>
<title>GWA CALCULATOR</title>
<meta charset="UTF-8">
</head>

<body>
<h2>GWA CALCULATOR</h2>
<table>
<tr>
<td>
<table>
<tr>
<td>
The Average grade is:
</td>
<td>
<?php

function workOutGradeAv($grades) {

$averagegrade=$grades/10;
echo "$averagegrade";
}
$grades=0;

if ($_POST["bio"] < 1.000 || $_POST["bio"] > 5.000)   {
echo "Error! Check Input.";
} elseif ($_POST["chem"] < 1.000 or $_POST["chem"] > 5.000) {
echo "Error! Check Input.";
} elseif ($_POST["phys"] < 1.000 or $_POST["phys"] >5.000)  {
echo "Error! Check Input.";
} elseif ($_POST["math"] < 1.000 or $_POST["math"] >5.000)  {
echo "Error! Check Input.";
} elseif ($_POST["stats"] < 1.000 or  $_POST["stats"]>5.000 ) {
echo "Error! Check Input.";
} elseif ($_POST["eng"] < 1.000 or $_POST["eng"] > 5.000) {
 echo "Error! Check Input.";
} elseif ($_POST["fili"] < 1.000 or $_POST["fili"] >5.000)  {
echo "Error! Check Input.";
} elseif ($_POST["socsci"] < 1.000 or $_POST["socsci"] >5.000)  {
echo "Error! Check Input.";
} elseif ($_POST["comsci"] < 1.000 or  $_POST["comsci"]>5.000 ) {
echo "Error! Check Input.";
} elseif ($_POST["pehm"] < 1.000 or $_POST["pehm"] >5.000)  {
echo "Error! Check Input.";
} else {
$grades = $grades + $_POST["bio"] + $_POST["chem"] + $_POST["phys"] + $_POST["math"] + $_POST["stats"] + $_POST["eng"] + $_POST["fili"] + $_POST["socsci"] + $_POST["comsci"] + $_POST["pehm"] ;
} 

workOutGradeAv($grades);

?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>