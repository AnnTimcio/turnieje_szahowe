<?php
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$b = "SELECT nazwa, organizator, data_t, opis FROM turniej";
$res = mysqli_query($a, $b);

echo "<table style='border: solid 2px black;'>";

while ($row = $res -> fetch_row()) {
    echo "<tr><td>"."<a href='Turniej.php'>".$row[0]."</a>"."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
  }

echo "</table><br><br>";

echo "Zarejestrój swój turniej: <button><a href='dodajtu.php'>klikni</a></button>";
mysqli_close($a);
?>