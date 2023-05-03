
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

  <div class="container mt-5">
    <div class="row d-flex justify-content-start ">
        <div class="col col-6 shadow p-5">
            <?php

            var_dump($_GET);

                $paragrafo = $_GET["paragrafo"];
                $censura = $_GET["censura"];


                // Stampiamo il paragrafo e la sua lunghezza
            
            
                echo "<h1>Il tuo paragrafo è:</h1>";
                echo $paragrafo;

                echo "<h1>parola censurata:</h1>";
                echo "<p>***</p>";
            ?>
        </div>
    </div>
  </div>
    
</body>
</html>
