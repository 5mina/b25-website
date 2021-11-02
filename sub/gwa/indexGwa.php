<!doctype html>
<html>

<head>
    <title>GWA CALCULATOR</title>
</head>

<body>
    <h2>GWA CALCULATOR<h2>
            <table>
                <tr>
                    <td>
                        <table>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <tr>
                                    <td>
                                        Enter the grade for each subject:
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Biology 1: <input type="number" step="0.25" class="form-control" name="bio" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Chemistry 1: <input type="number" step="0.25" class="form-control" name="chem" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Physics 1: <input type="number" step="0.25" class="form-control" name="phys" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mathematics 3: <input type="number" step="0.25" class="form-control" name="math" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Statistics 1: <input type="number" step="0.25" class="form-control" name="stats" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        English 3: <input type="number" step="0.25" class="form-control" name="eng" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Filipino 3: <input type="number" step="0.25" class="form-control" name="fili" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Social Science 3: <input type="number" step="0.25" class="form-control" name="socsci" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Computer Science 3: <input type="number" step="0.25" class="form-control" name="comsci" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PEHM 3: <input type="number" step="0.25" class="form-control" name="pehm" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <input type="submit">
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>
            </table>

<?php

$bio = $chem = $phys = $math = $stats = $eng = $fili = $socsci = $comsci = $pehm = 0;

$bio = $_POST["bio"];
$chem = $_POST["chem"];
$phys = $_POST["phys"];
$math = $_POST["math"];
$stats = $_POST["stats"];
$eng = $_POST["eng"];
$fili = $_POST["fili"];
$socsci = $_POST["socsci"];
$comsci = $_POST["comsci"];
$pehm = $_POST["pehm"];

echo "<table><tr><td>GWA:</td><td>";
$gwa = ($bio + $chem + $phys + $math + $stats + $eng + $fili + $socsci + $comsci + $pehm) / 10;
echo $gwa;
echo "</td></tr></table>";

?>

</body>

</html>