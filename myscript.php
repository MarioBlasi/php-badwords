
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--Script Bootstrap bundle-->
</head>
<body >

  <div class="container pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8 shadow-lg p-5">
        <?php
        $paragrafo = isset($_GET["paragrafo"]) ? $_GET["paragrafo"] : '';
        $censura = isset($_GET["censura"]) ? $_GET["censura"] : '';

        //paragrafo
        echo "<h1>Il tuo paragrafo è:</h1>";
        $str = $paragrafo;
        $length = strlen($str);
        echo "<h4> $paragrafo </h4>";
        echo "<p><i>la lunghezza del paragrafo è:</i></p>";
        echo "<b> $length </b> ";

        // censura
        echo "<h1>la parola censurata:</h1>";
        $length = strlen($censura);
        echo "<h4>$censura</h4>";
        $paragrafo_censurato = str_replace($censura, '***', $paragrafo);
        echo "<h4>" . $paragrafo_censurato . "</h4>";
        echo "<p><i>la lunghezza della parola censurata è:</i></p>";
        echo "<b>$length</b>";
        ?>
        </div>
    </div>
  </div>
    
</body>
</html>
