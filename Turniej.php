<html>
  <head>
    
  </head>
</html>


<?php
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$b = "SELECT nazwa, organizator, data_t, opis FROM turniej";
$c = "SELECT nazwisko, data_u, nazwa from uczestnik INNER JOIN turniej ON turniej.id_t=uczestnik.id_t";
$res = mysqli_query($a, $b);
$res2 = mysqli_query($a, $c);

while ($row = $res -> fetch_row()) {
    echo "<h1>".$row[0]."</h1>";
    echo "<p> organizowane przez: ".$row[1]."</p>";
    echo "<p> odbędzie się ".$row[2]."</p><br><br>";
    echo $row[3];
  }


echo "zarejestruj się i weź udział: <BUTTON><a href='Rej.php'>klikni</a></button><br><br>";

echo "<h3>Uczestnicy turnieju</h3>";
echo "<table style='border: solid 2px black;'>";
while ($row2 = $res2 -> fetch_row()) {
  echo "<tr><td>".$row2[0]."</td><td>".$row2[1]."</td><td>".$row2[2]."</td></tr>";
}
echo "</table>";

mysqli_close($a);
?>