<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>

<?php
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$b = "SELECT nazwa, organizator, data_t, opis, id_t FROM turniej";
$res = mysqli_query($a, $b);

echo "<h1>Turnieje</h1>";

echo "<table>";

while ($row = $res -> fetch_row()) {
    echo "<tr><td>"."<a href='Turniej.php?t=".$row[4]."'>".$row[0]."</a>"."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
  }

echo "</table><br><br>";

echo "<h3>Zarejestruj swój turniej: <button><a href='dodajtu.php'>klikni</a></button></h3>";
mysqli_close($a);
?>