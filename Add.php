<!DOCTYPE html>
<html>
<head>
    <title>Insert Employee</title>
</head>
<body>
<center>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("<h3 style='color:red;'>Connection failed: " . mysqli_connect_error() . "</h3>");
} else {
    echo "<br><h2>CONNECTION SUCCESSFUL!!</h2><br/>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['eid'])) {

    $id     = mysqli_real_escape_string($conn, $_POST['eid']);
    $name   = mysqli_real_escape_string($conn, $_POST['ename']);
    $dep    = mysqli_real_escape_string($conn, $_POST['dept']);
    $salary = mysqli_real_escape_string($conn, $_POST['sal']);

    if ($id == "" || $name == "" || $dep == "" || $salary == "") {
        echo "<p style='color:red;'>ERROR: All fields are required!</p>";
    } else {

        $query = "INSERT INTO emp (eid, ename, dept, sal)
                  VALUES ('$id', '$name', '$dep', '$salary')";

        $res = mysqli_query($conn, $query);

        if ($res) {
            echo "<p style='color:green;'>SUBMITTED SUCCESSFULLY!!</p>";
        } else {
            echo "<p style='color:red;'>ERROR: " . mysqli_error($conn) . "</p>";
        }
    }
} else {
    echo "<p style='color:red;'>Form not submitted properly!</p>";
}

mysqli_close($conn);
?>

</center>
</body>
</html>