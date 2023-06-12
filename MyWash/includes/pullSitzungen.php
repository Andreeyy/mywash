<?php

include_once 'connect.php';

$sql = "SELECT sitzungen.tag, sitzungen.schicht, users.vorname, users.nachname, users.wohnung 
        FROM sitzungen 
        JOIN users ON sitzungen.user_id = users.id;";
$result =mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);



if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row['tag'].'</td>';
        echo '<td>'.$row['schicht'].'</td>';
        echo '<td>'.$row['vorname'].'</td>';
        echo '<td>'.$row['nachname'].'</td>';
        echo '<td>'.$row['wohnung'].'</td>';
        echo '</td>';
        echo '</tr>';
    }
}
