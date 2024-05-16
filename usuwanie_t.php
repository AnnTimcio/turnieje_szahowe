<?php
if(isset($_GET['b'])) {
    $id_t = $_GET['b'];
} elseif (isset($_POST['b'])){
    $id_t= $_POST['b'];
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
    <form method='post' action="usuwanie_t.php?b=<?php echo $id_t; ?>">
    <input type='submit' name="btn" value="tak"></form> <button style= background-color: aliceblue;><a href="organizator.php">Nie, wróć do listy turniejów</a></button>
</div>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    $a=  mysqli_connect('localhost','root','','turnieje_szachowe');
    $b= "DELETE FROM turniej WHERE id_t=$id_t";
    $c= "DELETE FROM uczestnik WHERE id_t=$id_t";
    if ($a->query($b) === TRUE && $a->query($c) === TRUE) {
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