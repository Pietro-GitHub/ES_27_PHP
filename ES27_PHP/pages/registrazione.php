<!DOCTYPE html>
<html>
    <head>
        <title>Sistema elettorale eleronico</title>
    </head>
    <body style = "background-color : cyan">
        
        <h2 style = "color: #0052cc; text-align: center">Registrazione del voto</h2>

        <form style = "margin-right: 30%; margin-left: 30%" action="pagina_riepilogo.php" method = "POST">

            <div style = "background-color : #99ff99; border: 3px solid #1aa3ff; color: #008000; text-align: center">
                <b><p>Il suo voto è stato correttamente registrato
                <br>
                Grazie
                </p></b>
            </div>

            <?php
                $conferma_candidato = $_POST["candidato_scelto"];
                $conferma_lista = $_POST["lista_scelta"];

                echo "<input type='hidden' value='$conferma_candidato' name = 'candidato'>";
                echo "<input type='hidden' value='$conferma_lista' name = 'lista'>";

                ob_start();
                echo "Se il tuo browser non supporta il redirect clicka <a href=\"pagina_riepilogo.php\">qui</a>.";
                header( "refresh:5;url=pagina_riepilogo.php" );
                ob_end_flush();
            ?>
        </form>
    </body>
</html>