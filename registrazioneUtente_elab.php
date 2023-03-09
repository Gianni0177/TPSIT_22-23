<html>
<head>
    <title>ELAB</title>
    <style>
        body{
            background-color: beige;
        }
    </style>
</head>
<body>

        <h1><b>ELAB</b></h1>

        <?php
        echo "Codice Fiscale = ". $_POST['cf'] ."<br>";
        echo "Nome = ". $_POST['Nominativo'] ."<br>";
        echo "Sesso = ". $_POST['Sesso'] ."<br>";
        echo "Data di nascita = ". $_POST['DataNascita'] ."<br><br>";
        echo "Numero di figli = ". $_POST['nFigli'] ."<br>";
        echo "Prefisso = ". $_POST['prefix'] ."<br>";
        echo "Numero di Telefono = ". $_POST['suffix'] ."<br>";
        echo "Lavoro = ". $_POST['lavoro'] ."<br>";
        echo "Email = ". $_POST['mail'] ."<br><br>";
        echo "Cookies : <br>";
        echo "Necessari = True <br>";
        echo "Pubblicità = ";
        if(isset($_POST['p2'])){
            echo "True <br>";
        }else echo "False <br>";
        
        echo "Altro = ";
        if(isset($_POST['p3'])){
            echo "True <br>";
        }else echo "False <br>";

        echo "<br>Registrazione = "; 
        if(($_POST['registrati'])=="Registrati"){
            echo "Registrato <br>";
        }
        ?>
    
</body>
</html>
