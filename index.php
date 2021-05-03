<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pho giorno uno</title>
  </head>
  <body>

    <?php

      // frase
      $sentence = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
      echo $sentence;

    ?>
    <br>

    <?php

      $sentenceLng =  strlen($sentence);
      echo $sentenceLng;

    ?>
    <br>
    <br>

    <?php

      //imposto una variabile alla quale assegno il valore di una chiave nell'url di local host
      $badW = $_GET['badW'];
      //eseguo la replace e creo una nuova variabile alla quale vienbe assegnato il ritorno della funzione str_replace
      $newSentence = str_replace($badW, '***', $sentence);
      //stampiamo su monitor la nuova stringa
      echo $newSentence;

    ?>

  </body>
</html>
