<?php
if(isset($_GET['u'])) {
    $id_u = $_GET['u'];
} elseif (isset($_POST['u'])){
    $id_u= $_POST['u'];
} else {
    die("coś poszło nie tak");
  }


$x = mysqli_connect('localhost','root','','turnieje_szachowe');
$f = "SELECT nazwisko, data_u FROM uczestnik WHERE id_u=$id_u";
$res = mysqli_query($x, $f);
while ($row = $res -> fetch_row()) {
$naz= $row[0];
$dat= $row[1];
}
mysqli_close($x);
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>
<h1>Podaj dane do akutalizacji</h1>
<div>
<form method="POST" action="update.php">
<p class="tur">Podaj imie i nazwisko: <input type="text" name="naz" value='<?php echo $naz ?>'></p> 
<p class="tur">Podaj date urodzenia: <input type="date" name="dat" value='<?php echo $dat ?>'></p>
<input type="hidden" name="u" value='<?php echo $id_u ?>'>
<p class="tur"><input type="submit" name="submit"></input></p> 
</form>
</div>

<br><div><a href='organizator.php'>wórć do listy turniejów</a></div>
<?php



if(isset($_POST['submit'])){
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$imienaz = $_POST['naz'];
$dataa = $_POST['dat'];
$b = "UPDATE uczestnik SET nazwisko = '$imienaz', data_u = '$dataa' WHERE id_u = $id_u";
if ($a->query($b) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            alert('udało się');
        </script>";
    } 
    else 
    {
        echo 
        "<script type= 'text/javascript'>
            alert('Wystąpił bład. sprubuj ponownie');
        </script>";
    }


mysqli_close($a);}

?>