<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
    <meta charset="UTF-8">
</head>
<body>
<center>
    <h2 align="center">EMPLOYEE DETAILS</h2>
    <form method="post" action="add.php">
        <table border="2" align="center">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="ename" required></td>
            </tr>
            <tr>
                <td>ID:</td>
                <td><input type="number" name="eid" required></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><input type="text" name="dept" required></td>
            </tr>
            <tr>
                <td>Salary:</td>
                <td><input type="number" name="sal" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>

    <form method="post" action="emp.php">
        <h2>TO DISPLAY INSERTED DATA: <input type="submit" name="submit1" value="DISPLAY"></h2>
    </form>
</center>
</body>
</html>