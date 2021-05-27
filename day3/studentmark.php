<html>
    <body>
        <form action="" method="post">
            <center>
                <table border=0>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="t1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Biology
                        </td>
                        <td>
                            <input type=text name="t2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Physics
                        </td>
                        <td>
                            <input type=text name="t3">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Chemistry
                        </td>
                        <td>
                            <input type=text name="t4">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Math
                        </td>
                        <td>
                            <input type=text name="t5">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
            if (isset($_POST['s'])) {
                $a = $_POST['t1'];
                $a1 = $_POST['t2'];
                $a2 = $_POST['t3'];
                $a3 = $_POST['t4'];
                $a4 = $_POST['t5'];
                $sum = $a1 + $a2 + $a3 + $a4;
                $avg = $sum / 4;
                if ($avg >= 0 && $avg <= 40)
                    $grade = "<b><font color='red'>Fail</b>";
                if ($avg > 40 && $avg <= 60)
                    $grade = "<b><font color='pureple'>C</b>";
                if ($avg > 60 && $avg <= 70)
                    $grade = "<b><font color='blue'>B</b>";
                if ($avg > 90)
                    $grade = "<b><font color='green'>A</b>";
                echo "<br>";
                echo "<font size=4><center>Student is:-" . $a . "</center><br>";
                echo "<font size=4><center>Total marks:-" . $sum . "</center><br>";
                echo "<font size=4><center>Percentage is:-" . $avg . "</center><br>";
                echo "<font size=4><center>Grade is:-" . $grade . "</center>";
                
            }
            ?>
        </form>
    </body>
</html>