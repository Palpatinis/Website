<?php
include 'connect.php';

$result = mysqli_query($conn,"SELECT * FROM messages");

echo "<table>
<tr>
<th>Name</th>
<th>Phone Number</th>
<th>Department</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";	
	echo "<td>" . $row['phonenumber'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['subject'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
	echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>