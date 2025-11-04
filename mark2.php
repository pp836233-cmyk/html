<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> marklist</title>
</head>
<body>
<?php
$student=array("priya","diya","pheba","sneha");
$mark=array(85,90,78,88);

echo"<br>Displaying names in table format<br/>";
echo"<br>=================================<br/>";
echo"<br>Names of student name are stored in an array:<br/>";
print_r($student);
print_r($mark);
echo"<br>Names of student name are stored in a table:<br/>";
echo"<br><table border=2><tr><th>student names</th><th marks></tr><br/>";
echo"<tr><td>$student[0]</td><td>$mark[0]</td></tr>";
echo"<tr><td>$student[1]</td><td>$mark[1]</td></tr>";
echo"<tr><td>$student[2]</td><td>$mark[2]</td></tr>";
echo"<tr><td>$student[3]</td><td>$mark[3]</td></tr>";
echo"</table>";
?>
</body>
</html>       