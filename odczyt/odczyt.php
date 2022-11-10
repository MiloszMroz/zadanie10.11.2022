<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gry</title>
</head>
<body>
    <div class="baner">
        Baza danych Gier    
        
        </div>
    
    <div class="obramka">
        <div class="panel-lewy">
            <h2>Gry</h2>
                <?php
                $conn=mysqli_connect('localhost','root','','gry');
                if(!$conn)
                {
                exit("Błąd połączenia z serwerem");
                }
                else{
                $pyt=mysqli_query($conn,'select tytul, rodzaj, opis, ocena from gry;');
                 $il_wierszy=mysqli_num_rows($pyt);
                 echo"<table><tr><th>Tytul</th><th>Rodzaj</th><th>Opis</th><th>Ocena</th>";
         
                
                 for($i=0;$i<$il_wierszy;$i++){
                    $result=mysqli_fetch_array($pyt);

                    echo"<tr><td>".$result['tytul']."</td><td>".$result['rodzaj']."</td><td>".$result['opis']."</td><td>".$result['ocena']."</td></tr>";
                 }
                 echo"</table>";
                }mysqli_close($conn);
                ?>
            
    
    
        </div>
    
        <div class="panel-prawy">
            <h3>Gatunki Gier</h3>
        <ol>
            <li>fabularna</li>
            <li>mmorpg</li>
            <li>gra akcji</li>
            <li>wyscigowe</li>
        </ol>
        <br>
        
        </div>
    </div>
        <div class="stopka">
            <br>
        <a href="../index.html">Powrót do strony głównej</a></br>
        <a href="../dodacgre/dodanie.html">Dodaj Gre</a>
    
        </div>
            </div>
    
</body>
</html>