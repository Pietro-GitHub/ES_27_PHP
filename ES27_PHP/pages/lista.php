<!DOCTYPE html>
<html>
    <head>
        <title>Sistema elettorale eleronico</title>
    </head>
    <body style = "background-color : cyan">
        
        <h2 style = "color: #0052cc; text-align: center">Selezione dela lista</h2>

        <form style = "margin-right: 30%; margin-left: 30%" action="candidato.php" method = "POST">

            <div style = "background-color : #99ff99; border: 3px solid #1aa3ff; color: #008000; text-align: center">
                <b><p>La prima fase del voto prevede la selezione della lista</p></b>
            </div>
            <div style = "background-color : #b3f0ff; border : 3px solid #1aa3ff; color: #0066ff; text-align: center">
                <p>Scelga la lista a cui asegnare il Suo voto dal'elenco a comparsa qui sotto
                <br>
                apena selezionata la lista, le verrà proposto l'elenco dei candidati per quella lista
                </p>
            </div>
            <div style = "background-color : #ffb366; text-align: center; border: 3px solid #1aa3ff">
                <br>
                    <div>
                    <?php
                        $host = "127.0.0.1";
                        $user = "root";
                        $password = "";
                        $database = "es27";
                        
                        $mysql = mysqli_connect($host, $user, $password, $database);
                    
                        $SQL = "SELECT * FROM liste";
                        $risultato = mysqli_query($mysql, $SQL);
                    
                        $ciclo = ciclo($risultato);
     
                        echo "<select name = 'lista' id= 'lista'>
                            <option value='Selezionare la preferenza' style = 'color: #ffd633'>Selezionare la preferenza</option>
                            $ciclo
                            </select>";

                        function ciclo($risultato){
                            if($risultato->num_rows > 0){
                                $select = "";
                                while($row = $risultato->fetch_assoc()){
                                    $select .= "<option value = '" . $row["nome_lista"] . "'>". $row["nome_lista"] ."</option>";
                                }
                            }else{
                                echo "0 results";
                            }
                            return $select;
                        }
                    ?>
                    <br><br>
                    <input type="submit" value="Invia">
                    </div>
                <br>
            </div>
        </form>
    </body>
</html>