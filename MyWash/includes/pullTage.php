<?php

include_once 'connect.php';

$sqltage = "SELECT * FROM tage;";
$resulttage =mysqli_query($conn, $sqltage);
$resultChecktage = mysqli_num_rows($resulttage);

$sqlschichten = "SELECT * FROM schichten;";
$resultschichten =mysqli_query($conn, $sqlschichten);
$resultCheckschichten = mysqli_num_rows($resultschichten);

if ($resultChecktage > 0) {
    while ($row = mysqli_fetch_assoc($resulttage)) {
        echo '<tr>';
        echo '<td>'.$row['tag'].'</td>';
        echo '<td>';
        if ($resultCheckschichten > 0) {
            while ($rowschichten = mysqli_fetch_assoc($resultschichten)) {
                echo $rowschichten['schicht'].'<br>';
            } 
        } 
        echo '</td>';
        echo '</tr>';
    }
}
