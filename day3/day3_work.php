<html>
    <head></head>
    <body>
        <table border="1">

            <form action="displayday3.php" method="post">
                <tr><td>Name:</td>
                    <td>
                        <label> <input type="text"   name="username"  required=""></label><br/>
                    </td>
                </tr>
                <tr><td>Age:</td>
                    <td>
                        <label> <input type="number"  name="age"  required=""></label><br/>
                    </td>
                </tr>
                <tr><td>Mobile Number:</td>
                    <td>
                        <label> <input type="tel"  name="mnum"  required=""></label><br/>
                    </td>
                </tr>
                <tr><td>Gender:</td>
                    <td>
                        <label> <input type="text"  name="gen"  required=""></label><br/>
                    </td>
                </tr>
                <tr><td>DOB:</td>
                    <td>
                        <label> <input type="date"  name="dob"  required=""></label><br/>
                    </td>
                </tr>

                <td colspan="2">
                <input type="submit" class="login"  value="Submit">
                </td>

            </form>
        </table>
    </body>
</html>