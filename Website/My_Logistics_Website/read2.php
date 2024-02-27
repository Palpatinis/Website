<?php
include 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM clients");

echo "<table>
<tr>
<th>Username</th>
<th>Name</th>
<th>Email</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['username'] . "</td>";	
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>