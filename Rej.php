
<form method="POST" action="Rej.php">
Podaj swoje imie i nazwisko: <input type="text" name="naz"><br>
Podaj swoją date urodzenia: <input type="date" name="dat"><br>
Podaj numer turnieju: <input type="number" name="tur"><br>
<input type="submit" name="submit"></input>
</form>

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

