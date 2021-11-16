<!doctype html>
<html>

<head>
    <title>GWA CALCULATOR</title>
</head>

<body>

    <?php

    $gwa = $bio = $chem = $phys = $math = $stats = $eng = $fili = $socsci = $comsci = $pehm = 0;
    $abio = $achem = $aphys = $amath = $astats = $aeng = $afili = $asocsci = $acomsci = $apehm = "";

            if (empty($_POST["bio"])) {
                $abio = "";
            } else {
                $bio = $_POST["bio"];
            }
            if (empty($_POST["chem"])) {
            } else {
                $chem = $_POST["chem"];
            }
            if (empty($_POST["phys"])) {
            } else {
                $phys = $_POST["phys"];
            }
            if (empty($_POST["math"])) {
            } else {
                $math = $_POST["math"];
            }
            if (empty($_POST["stats"])) {
            } else {
                $stats = $_POST["stats"];
            }
            if (empty($_POST["eng"])) {
            } else {
                $eng = $_POST["eng"];
            }
            if (empty($_POST["fili"])) {
            } else {
                $fili = $_POST["fili"];
            }
            if (empty($_POST["socsci"])) {
            } else {
                $socsci = $_POST["socsci"];
            }
            if (empty($_POST["comsci"])) {
            } else {
                $comsci = $_POST["comsci"];
            }
            if (empty($_POST["pehm"])) {
            } else {
                $pehm = $_POST["pehm"];
            }
    
    ?>

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
                                        Biology 1: <input type="number" step="0.25" class="form-control" name="bio" value="<?php echo $bio ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Chemistry 1: <input type="number" step="0.25" class="form-control" name="chem" value="<?php echo $chem ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Physics 1: <input type="number" step="0.25" class="form-control" name="phys" value="<?php echo $phys ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mathematics 3: <input type="number" step="0.25" class="form-control" name="math" value="<?php echo $math ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Statistics 1: <input type="number" step="0.25" class="form-control" name="stats" value="<?php echo $stats ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        English 3: <input type="number" step="0.25" class="form-control" name="eng" value="<?php echo $eng ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Filipino 3: <input type="number" step="0.25" class="form-control" name="fili" value="<?php echo $fili ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Social Science 3: <input type="number" step="0.25" class="form-control" name="socsci" value="<?php echo $socsci ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Computer Science 3: <input type="number" step="0.25" class="form-control" name="comsci" value="<?php echo $comsci ?>" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PEHM 3: <input type="number" step="0.25" class="form-control" name="pehm" value="<?php echo $pehm ?>" required>
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

            echo "<table><tr><td>GWA:</td><td>";
            $gwa = ($bio + $chem + $phys + $math + $stats + $eng + $fili + $socsci + $comsci + $pehm) / 10;
            echo $gwa;
            echo "</td></tr></table>";

            ?>

</body>

</html>