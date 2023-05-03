

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
    <div class="row d-flex justify-content-start ">
        <div class="col-6 shadow p-5">
            <form action="myscript.php" method="post">
                <div class="mb-3">
                    <label for="paragrafo">Paragrafo:</label>
                    <input type="text" name="paragrafo"  id="paragrafo" class="form-control" placeholder="inserisci paragrafo" >
                </div>
            </form>
            <!-- section paragrafo -->
            <form action="myscript.php" method="post">
                <div class="mb-3">
                    <label for="censura">Censura</label>
                    <input type="text" name="censura" id="censura" class="form-control" placeholder="inserisci censura" >
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="reset"class="btn btn-info">Reset</button>
            </form>
            <!-- section censura button -->
        </div>
    </div>
   </div>
    
</body>
</html>