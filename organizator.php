<?php
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$b = "SELECT nazwa, data_t, opis FROM turniej";
$res = mysqli_query($a, $b);

echo "<table style='border: solid 2px black;'>";

while ($row = $res -> fetch_row()) {
    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
  }

echo "</table>";
mysqli_close($a);
?>