<?php 

// dichiarazione variabili
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

// sostituzione badword con ***
$new_paragraph = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- Bootstrap -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous">

    
</head>
<body>
    <div class="container mt-4">

        <!-- stampa paragrafo -->
        <div class="card mb-4 p-3"> 
          <h4>Paragrafo</h4>
          <p><?= $paragraph ?></p>
          <p>Lunghezza paragrafo: <?= strlen($paragraph)?></p>
        </div>
       
        <!-- stampa paragrafo con parola censurata -->
        <div class="card p-3">
          <h4>Nuovo paragrafo</h4>
          <p><?= $new_paragraph ?></p>
          <p>Lunghezza nuovo paragrafo: <?= strlen($new_paragraph)?></p>
        </div>   

    </div>
</body>
</html>