<?php
$array = ['m', 'b', 'a'];
echo "<pre>";
var_dump($array);
echo "<pre>";
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
   <div class="container  mt-5">
    <div class="row d-flex justify-content-centre ">
        <div class="col">
            <form action="saluto.php" method="GET" >
                <input type="text" name="nome">
                <button type="submit">invia</button>
            </form>
        </div>
        <div class="col-10 shadow">
            <form>
                <div class="form-group">
                    <label for="exampleInputparagrafo1">invia paragrafo</label>
                    <input type="paragrafo" class="form-control" id="exampleInputparagrafo1" aria-describedby="paragrafoHelp" placeholder="inserisci paragrafo">
                    <small id="paragrafoHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
   </div>
    
</body>
</html>