<?php
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$b = "SELECT nazwa, organizator, data_t, opis FROM turniej";
$res = mysqli_query($a, $b);


while ($row = $res -> fetch_row()) {
    echo "<h1>".$row[0]."</h1>";
    echo "<p> organizowane przez: ".$row[1]."</p>";
    echo "<p> odbędzie się ".$row[2]."</p><br><br>";
    echo $row[3];
  }


echo "zarejestruj się i weź udział: <BUTTON><a href='Rej.php'>klikni</a>";

mysqli_close($a);
?>