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
                        <form action="gwaCalcRecieved.php" method="post">
                            <tr>
                                <td>
                                    Enter the grade for each subject:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Biology 1: <input type="number" step="0.01" class="form-control" name="bio" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Chemistry 1: <input type="number" step="0.01" class="form-control" name="chem" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Physics 1: <input type="number" step="0.01" class="form-control" name="phys" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mathematics 3: <input type="number" step="0.01" class="form-control" name="math" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Statistics 1: <input type="number" step="0.01" class="form-control" name="stats" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    English 3: <input type="number" step="0.01" class="form-control" name="eng" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Filipino 3: <input type="number"  step="0.01" class="form-control" name="fili" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Social Science 3: <input type="number" step="0.01" class="form-control" name="socsci" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Computer Science 3: <input type="number" step="0.01" class="form-control" name="comsci" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    PEHM 3: <input type="number" step="0.01" class="form-control" name="pehm" required>
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
    </body>
</html>