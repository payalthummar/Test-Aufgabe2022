
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
                        <div class="card-header">
                            <h1>Result</h1>
                        </div>
                        <div class="card-body">
                            <!-- Get Method -->
                            <?php
                                        if(isset($_GET['hello']))
                                        {
                                            $hi = "Hello";
                                            echo $hi;
                                           
                                        } 
                                        if(isset($_GET['howareyou']))
                                        {
                                            echo "How Are You?". "<br>";
                                            $how = "I am Fine.";
                                            echo $how;
                                            
                                        }
                                        if(isset($_GET['time']))
                                        {
                                            date_default_timezone_set('Europe/London'); //to display time of London
                                            $time = date("H:ia ");
                                            echo "What time is it?". "<br>";
                                            echo "It is " .$time . " in London.";
                                        }

                            ?>
                                    <br><a href="index.php" class="btn btn-primary stretched-link">Home</a>
                        </div>                
                    </div>
                </div>
            </div>
</body>