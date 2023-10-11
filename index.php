<!-- 

Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
-Creare un form che invii in GET la lunghezza della password. 
-Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
-Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
-Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

Milestone 3 (BONUS)
-Invece di visualizzare la password nella index, 
effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

//leggete le slide sulla session e la documentazione

Milestone 4 (BONUS)
-Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
-Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). 
-Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

 -->


<?php

$inputPassw = $_GET['password'];

var_dump($inputPassw);

function randomPassword() {
    $inputPassw = $_GET['password'];
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!£$%&/^-.;,_<>\|';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < strlen($inputPassw); $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
};

//randomPassword();
var_dump(randomPassword($inputPassw));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>

    <div class="container mt-5 mx-5">
        <div class="row mt-5">
            <div class="col mt-5">
                <div class="card mt-5 p-5">

                    <form action="./index.php" method="GET">

                        <!-- Input text inserisci password -->
                        <!-- Qui la password viene inserita dall'utente -->
                        <div class="mb-3 d-flex justify-content-between">
                            <label for="password" class="form-label">Lunghezza password</label>

                            <input type="text" class="form-control w-25" name="password" id="password">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <!-- Qui ci sono i radioboxs -->
                        <div class="radioboxs">

                        <!-- Radios Si -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>

                        <!-- Radios No -->
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>
                        </div>


                        <!-- Qui ci sono tutti i checkbox-->
                        <div class="checkboxs d-flex flex-column justify-content-end align-items-end">

                            <!-- Qui check filtro per Lettere -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Lettere</label>
                            </div>
                            <!-- Qui check filtro per Numeri -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Numeri</label>
                            </div>
                            <!-- Qui check filtro per Simboli -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Simboli</label>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary mt-3">Invia</button>
                        <button type="reset" class="btn btn-secondary btn mt-3">Annulla</button>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>