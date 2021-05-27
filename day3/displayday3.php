<?php

$name = $_REQUEST['username'];
$age = $_REQUEST['age'];
$mnum = $_REQUEST['mnum'];
$gender = $_REQUEST['gen'];
$dob = $_REQUEST['dob'];

echo "<table border='1'>";
echo "<tr>";
echo "<td>NAME : </td>";
echo "<td>" . $name . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>AGE : </td>";
echo "<td>" . $age . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Mobile Number : </td>";
echo "<td>" . $mnum . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Gender : </td>";
echo "<td>" . $gender . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>DOB : </td>";
echo "<td>" . $dob . "</td>";
echo "</tr>";
?>
