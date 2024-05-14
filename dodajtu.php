
<form method="POST" action="dodajtu.php">
Podaj nazwe organizatora: <input type="text" name="org"><br>
Podaj nazwe turnieju: <input type="text" name="naz"><br>
Podaj date turnieju: <input type="date" name="data"><br>
Napisz opis dla turnieju: <input type="text" name="opis"><br>
<input type="submit" name="submit"></input>
</form>

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