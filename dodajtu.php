<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>
<h1>Dodaj swój turniej</h1>
<div>
<form method="POST" action="dodajtu.php">
<p class="tur">Podaj nazwe organizatora: <input  type="text" name="org"></p> 
<p class="tur">Podaj nazwe turnieju: <input type="text" name="naz"></p>
<p class="tur">Podaj date turnieju: <input type="date" name="data"></p> 
<p class="tur">Napisz opis dla turnieju: <input type="text" name="opis"></p> 
<p class="tur"> <input type="submit" name="submit"></input></p> 
</form>
</div><br><div><a href='organizator.php'>wróć do listy turniejów</a></div>
<?php
if(isset($_POST['submit'])){
$a = mysqli_connect('localhost','root','','turnieje_szachowe');
$organizator = $_POST['org'];
$nazwa = $_POST['naz'];
$data = $_POST['data'];
$opis = $_POST['opis'];
$b = "INSERT INTO turniej (organizator, nazwa, data_t, opis) VALUES ('$organizator', '$nazwa','$data', '$opis')";
if ($a->query($b) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            alert('Twój turniej został dodany');
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