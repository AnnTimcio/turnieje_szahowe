<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>


<?php
if(!isset($_GET['t'])){
  die("coś poszło nie tak");
}
$id_t = $_GET['t'];
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$b = "SELECT nazwa, organizator, data_t, opis FROM turniej where $id_t=id_t";
$c = "SELECT nazwisko, data_u, nazwa from uczestnik INNER JOIN turniej ON turniej.id_t=uczestnik.id_t where uczestnik.id_t=$id_t";
$res = mysqli_query($a, $b);
$res2 = mysqli_query($a, $c);

while ($row = $res -> fetch_row()) {
    echo "<h1>".$row[0]."</h1>";
    echo "<p> organizowane przez: ".$row[1]."</p>";
    echo "<p> odbędzie się ".$row[2]."</p>";
    echo "<p>".$row[3]."</p><br><br>";
  }


echo "<p>zarejestruj się i weź udział: <BUTTON><a href='Rej.php?t=".$id_t."'>klikni</a></button></p><br><br>";

echo "<h3>Uczestnicy turnieju</h3>";
echo "<table>";
while ($row2 = $res2 -> fetch_row()) {
  echo "<tr><td>".$row2[0]."</td><td>".$row2[1]."</td><td>".$row2[2]."</td></tr>";
}
echo "</table>";

mysqli_close($a);
?>