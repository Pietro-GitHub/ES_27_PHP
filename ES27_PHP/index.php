<!DOCTYPE html>
<html>
    <head>
        <title>Sistema elettorale eleronico</title>
    </head>
    <body style = "background-color : cyan">
        
        <h2 style = "color: #0052cc; text-align: center">Benvenuti nel nuovo Sistema Elettorale Elettronico</h2>

        <form style = "margin-right: 30%; margin-left: 30%" action="pages/lista.php" method = "POST">

            <div style = "background-color : gray; border: 3px solid #1aa3ff; color: #0052cc">
                <p>Attraverso questo innovativo sistema è posibile adesso indicare la propria preferenza di voto scegliendo uno dei candidati proposti da un menu a scorimento
                <br>
                La definitiva conferma della scelta operata equivale alla consegna della tradizionale scheda elettorale al presidente di seggio: presti pertanto molta attenzione
                alle operazioni che sarà chiamato a svolgere per giungere alla compilazione della Sua scheda di voto e alla conferma della Sua effettiva scelta.</p>
            </div>
            <div style = "background-color : #99ff99; border : 3px solid #1aa3ff; color: #008000">
                <p style = "text-align: center"><b>L'operazione di voto si svolge in 3 fasi</b> (corrispondenti a 3 diverse pagine)</p>
                
                <ul>
                    <li type = "square">
                        selezione della lista elettorale da una casella combinata
                    </li>
                    <li type = "square">
                        selezione del candidato appartenente alla suddetta lista
                    </li>
                    <li type = "square">
                        conferma del voto o ritorno alla prima fase
                    </li>
                </ul>
            </div>
            <div style = "background-color : #1aa3ff; text-align: center; border: 3px solid #1aa3ff">
                <br>
                <input type="submit" href="pages/lista.php" name="seleziona" value="Seleziona lista" style = "color: #0052cc; background-color : gray">
                <br>
                <br>
            </div>
        </form>
    </body>
</html>