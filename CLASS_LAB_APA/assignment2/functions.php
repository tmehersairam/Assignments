<!-- functions in php -->
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container">
  <h4 class="card-title">Functions</h4>
    <div class="card text-white bg-secondary"> 
      <div class="card-body">
        <p class="card-text">Single argument functions</p>
        </code>
            function appendName($name)
            <br>
            {
                <br>
                return $name." is Good";
                <br>
            }    
       </code>
       <h6>if we give name = meher</h6>
       <h6>out pur will be : </h6>
       <br>
       <i>-> 
        <?php 
                function appendName($name)
                {
                    return $name." is Good";
                }
                echo appendName("meher");
        ?>
        </i>
      </div>
    </div>

    <div class="card text-white bg-secondary">
     
      <div class="card-body">
      
        <p class="card-text">Multi argument functions</p>
        </code>
         function getSum($a, $b)
         <br>
            {
                <br>
                return $a+$b;
                <br>
            }
       </code>
       <h6>if we give 3 and 4 as the arguments to getSum(3, 4)</h6>
       <h6>out put will be : </h6>
       <br>
       <i>-> 
        <?php 

            function getSum($a, $b)
            {
                return $a+$b;
            }
            echo getSum(3, 4);
        ?>
        </i>
      </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
