<html>
<head>

    <title>Registrazione</title>
    <style>
        body{
            background-color: beige;
        }
        .errore{
            color:red;
        }
    </style>
    
 </head>
<body>
        <form method="post" action="registrazioneUtente_elab.php" target="blank">
            <center>
            <p class="errore">*=campo obbligatorio</p>

            Infilaci il tuo <b>codice fiscale</b> <br>
            <input type="text" name="cf" placeholder="ABCDEF12G34H567I" autofocus maxlength="16" size="20">
            <span class="errore"> *</span><br><br>

            Nominativo<br>
            <input type="text" name="Nominativo" placeholder="Cognome Nome">
            <span class="errore"> *</span><br><br>

            Sesso<br>
            <input type="radio" name="Sesso" value="M"> M 
            &nbsp;&nbsp;↔&nbsp;
            <input type="radio" name="Sesso" value="F"> F <br><br>

            Data di Nascita : 
            <input type="date" name="DataNascita" min="2001-01-01" max="<?php echo date("Y-m-d") ?>"><br><br>

            N.figli : 
            <input type="number" name="nFigli" min="0" max="8"><br><br>

            n.Telefono<br>
            <select name="prefix">
                <option value="default">

                </option>
                <option value="italia">
                    +39
                </option>
                <option value="inghilterra">
                    +44
                </option>
                <option value="ungheria">
                    +36
                </option>
                <option value="svizzera">
                    +41
                </option>
            </select>
            <input type="text" name="suffix" maxlength="10" size="7" placeholder="0123456789"><br><br>

            Professione : 
            <select name="lavoro">
                <option value="default">
                </option>
                <option value="imp">
                   Impiegato 
                </option>
                <option value="prof">
                    Professore
                </option>
                <option value="pens">
                    Pensionato
                </option>
                <option value="stud">
                    Strudente
                </option>
                <option value="fall">
                    Fallito
                </option>
            </select><br><br>

            Email<br>
            <input type="email" name="mail" size="25" placeholder="example@email.com">
            <span class="errore"> *</span><br><br>

            Accetta i cookie<br>
            <input type="checkbox" name="p1" value="N" checked disabled>necessari &nbsp;&nbsp;
            <input type="checkbox" name="p2" value="P">pubblicità &nbsp;&nbsp;
            <input type="checkbox" name="p3" value="A">altro<br><br>
            
            <input type="submit" name="registrati" value="REGISTRATI">
                
            </center>
        </form>
</body>
</html>
