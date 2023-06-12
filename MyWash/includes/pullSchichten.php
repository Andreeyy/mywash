<?php

include_once 'connect.php';

$sql = "SELECT * FROM schichten;";
$result =mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<td>'.$row['schicht'].'</td></tr>';
    }
}
