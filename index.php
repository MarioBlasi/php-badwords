<?php
$name = $_GET["name"];

$name = $_GET["password"];

echo "ciao" . $name
or "ciao" . $password


?>

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
    <h1>ciao <?php echo $paragrafo;?></h1>
    <h3>ciao <?php echo $censura;?></h3>
    

   <div class="container  mt-5">
    <div class="row d-flex justify-content-start ">
        <div class="col-6 shadow ">
            <form action="login.php" method="GET" >
                <div class="mb-3">
                    <label for="paragrafo">Paragrafo</label>
                    <input type="text" name="paragrafo"  id="censura" class="form-control" placeholder="inserisci paragrafo" aria-describedby="suffuxId">
                </div>
                <div class="mb-3">
                    <label for="censura">Censura</label>
                    <input type="text" name="censura" id="censura" class="form-control" placeholder="inserisci censura" aria-describedby="suffuxId">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="reset"class="btn btn-info">Reset</button>
            </form>
        </div>
    </div>
   </div>
    
</body>
</html>