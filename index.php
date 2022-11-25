<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<h2>Inserisci le tue parole nel Form</h2>

<div class='container'>
<form action="filterWord.php" method="get"></form>
    <div class="form-group">
      <label for="words">Parole o Parolacce?</label>
      <input type="text" name="words" id="words" class="form-control" placeholder="Inserisci il tuo testo" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Scrivi quello che vuoi se hai il coraggio!</small>
    </div>
</div>
</body>
</html>