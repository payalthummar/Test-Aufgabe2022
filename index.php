<?php

                            if(isset($_POST['hello']))
                            {
                                $hi = "Hello";
                                //echo $hi;
                                $url = "test.php?hello=" . $hi;
                                header("Location: $url");
                            } 
                            if(isset($_POST['how']))
                            {
                                $how = "I am Fine.";
                                //echo $how;
                                $url = "test.php?howareyou=" . $how;
                                header("Location: $url");
                            }

                            if(isset($_POST['time']))
                            {
                                date_default_timezone_set('Europe/London'); //to display London date and time
                                $time = date("H:ia e");
                                $url = "test.php?time=" . $time;
                                header("Location: $url");
                            }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <form action="index.php" method="post">
                    <div class="card-header">
                        <h1>Test Aufgabe</h1>
                    </div>
                    <div class="card-body">
                        <label for="time">Hello</label>
                        <button type="submit" name="hello">Hello</button><br><br>
                        <label for="time">How are You?</label>
                        <button type="submit" name="how">How are You?</button><br><br>
                        <label for="time">What Time is it?</label>
                        <button type="submit" name="time">What time is it?</button><br>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
  </body>
</html>