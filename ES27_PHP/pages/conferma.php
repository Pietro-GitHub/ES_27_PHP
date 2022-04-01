<!DOCTYPE html>
<html>
    <head>
        <title>Sistema elettorale eleronico</title>
    </head>
    <body style = "background-color : cyan">
        
        <h2 style = "color: #0052cc; text-align: center">Conferma del voto</h2>

        <form style = "margin-right: 30%; margin-left: 30%" action="registrazione.php" method = "POST">

            <div style = "background-color : #99ff99; border: 3px solid #1aa3ff; color: #008000; text-align: center">
                <b><p>La terza ed ultima fase del voto consiste
                <br>
                nella conferma della selezione
                </p></b>
            </div>
            <div style = "background-color : #b3f0ff; border : 3px solid #1aa3ff; color: #0066ff; text-align: center">
                <p>Qui sotto è riepilogata la Sua scelta di voto.
                <br>
                Confermando questa scelta Lei esprime <ins>in modo definitivo</ins> il Suo voto
                </p>
            </div>
            <div style = "background-color : #ffb366; text-align: center; border: 3px solid #1aa3ff">
                <br>
                    <?php
                        $lista = $_POST['lista_scelta'];
                        $candidato = $_POST['candidato'];
                        echo "<b><label style = 'color: #0000ff'>Lista: </label></b><label style = 'color: red'>$lista</label>";
                        echo "<br>";
                        echo "<b><label style = 'color: #0000ff'>Candidato: </label></b><label style = 'color: red'>$candidato</label>";

                        echo "<input type='hidden' value='$candidato' name = 'candidato_scelto'>";
                        echo "<input type='hidden' value='$lista' name = 'lista_scelta'>";
                    ?>
                <br>
                <br>
            </div>
            <div style = "background-color : yellow; border : 3px solid #1aa3ff; color: #0066ff; text-align: center">
            <br>
                <form action="registrazione.php" method = "POST">
                    <button type="submit" name="conferma" style="color: red; width: 150px; height: 30px"><b>Conferma</b></button>
                </form>
                <br>
                <br>
                <form action="../index.php" method = "POST">
                <button type="submit" name="annulla" style="color: #ffcc00; width: 150px; height: 30px"><b>Annulla</b></button>
                </form>
            <br>
            </div>
        </form>
    </body>
</html>