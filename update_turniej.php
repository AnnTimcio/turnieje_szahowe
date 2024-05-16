<?php
if(isset($_GET['u'])) {
    $id_t = $_GET['u'];
} elseif (isset($_POST['u'])){
    $id_t= $_POST['u'];
} else {
    die("coś poszło nie tak");
  }


$x = mysqli_connect('localhost','root','','turnieje_szachowe');
$f = "SELECT nazwa, organizator, data_t, opis FROM turniej WHERE id_t=$id_t";
$res = mysqli_query($x, $f);
while ($row = $res -> fetch_row()) {
$naz= $row[0];
$org= $row[1];
$dat=$row[2];
$opi=$row[3];
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
<form method="POST" action="update_turniej.php">
<p class="tur">Podaj nazwe turnieju: <input type="text" name="naz" value='<?php echo $naz ?>'></p> 
<p class="tur">Podaj organizatora: <input type="text" name="org" value='<?php echo $org ?>'></p>
<p class="tur">Podaj data turnieju: <input type="date" name="dat" value='<?php echo $dat ?>'></p>
<p class="tur">Podaj opis: <input type="text" name="opis" value='<?php echo $opi ?>'></p>
<input type="hidden" name="u" value='<?php echo $id_t ?>'>
<p class="tur"><input type="submit" name="submit"></input></p> 
</form>
</div>

<br><div><a href='organizator.php'>wórć do listy turniejów</a></div>
<?php



if(isset($_POST['submit'])){
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$naz = $_POST['naz'];
$orga = $_POST['org'];
$dataa = $_POST['dat'];
$opis = $_POST['opis'];
$b = "UPDATE turniej SET nazwa = '$naz', organizator= '$orga', data_t = '$dataa', opis='$opis' WHERE id_t = $id_t";

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