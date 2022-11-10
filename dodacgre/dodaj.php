<?php
$conn=mysqli_connect('localhost','root','','gry');
            if(!$conn)
            {
            echo("Błąd połączenia z serwerem");
            }
            else{
            $rodzaj=$_POST['gatunek'];
            $tytul=$_POST['tytul'];
            $ocena=$_POST['ocena'];
            $opis=$_POST['opis'];
            $zadan="insert into gry (rodzaj, tytul, ocena, opis)values('$rodzaj','$tytul','$ocena','$opis');";
            $pyt=mysqli_query($conn,$zadan);
                $powrot="../index.html";
                $baza= "../odczyt/odczyt (2).php";
                
                echo '<a href="'.$powrot.'">Powrót do strony głównej</a></br>';
                echo '<a href="'.$baza.'">Baza gier</a>';
            }
        
            mysqli_close($conn);
?>