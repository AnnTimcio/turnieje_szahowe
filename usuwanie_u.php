<?php
if(isset($_GET['d'])) {
    $id_u = $_GET['d'];
} elseif (isset($_POST['d'])){
    $id_u= $_POST['d'];
} else {
    die("coś poszło nie tak");
  }

?>
<html>
  <head>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div style="text-align: center;  padding-bottom: 10px;">
    <H3>Czy chcesz usunąć?</H3>
    <form method='post' action="usuwanie_u.php?d=<?php echo $id_u; ?>">
    <input type='submit' name="btn" value="tak"></form> <button style= background-color: aliceblue;><a href="organizator.php">Nie, wróć do listy turniejów</a></button>
</div>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    $a=  mysqli_connect('localhost','root','','turnieje_szachowe');
    $b= "DELETE FROM uczestnik WHERE id_u=$id_u";
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
    
    
    
    mysqli_close($a);
    }


?>