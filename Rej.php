<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>
<h1>Podaj swoje dane</h1>
<div>
<form method="POST" action="Rej.php">
<p class="tur">Podaj swoje imie i nazwisko: <input type="text" name="naz"></p> 
<p class="tur">Podaj swoją date urodzenia: <input type="date" name="dat"></p>
<p class="tur">Podaj numer turnieju: <input type="number" name="tur"></p>
<p class="tur"><input type="submit" name="submit"></input></p> 
</form>
</div>
<?php
if(isset($_POST['submit'])){
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$imienaz = $_POST['naz'];
$dataa = $_POST['dat'];
$turnij = $_POST['tur'];
$b = "INSERT INTO uczestnik (nazwisko, data_u, id_t) VALUES ('$imienaz', '$dataa','$turnij')";
if ($a->query($b) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            alert('Zostałeś dodany');
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

