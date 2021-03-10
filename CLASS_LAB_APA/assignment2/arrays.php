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
    
    <div class="card text-white bg-dark">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <h4 class="card-title">Bellow are the list of indian cricketers</h4>
        <p class="card-text">We use an array to store them</p>
        <p>for example</p>
        <h5> $cricketers = array("Rohit Sharma"," Kholi ", " Sachin Tendulkar ", " Rahul Dravid ", "Dhoni"
        , "Hardik pandya", " Krunal pandya", " Rishab Pant", " Kedar jadav", " K L Rahul ", " Mayank tiwari");</h5>
      <p>Lets print all the players</p>
      </div>
    </div>
      <?php 
       $cricketers = array("Rohit Sharma"," Kholi ", " Sachin Tendulkar ", " Rahul Dravid ", "Dhoni"
        , "Hardik pandya", " Krunal pandya", " Rishab Pant", " Kedar jadav", " K L Rahul ", " Mayank tiwari");
      ?>
     
      
    
      <div class="card-columns card-body">
    
          <?php 
            foreach($cricketers as $cricketer)
            { 
            ?>
          <div class="card ">
              <div class="card-body">
                  <h4 class="card-title"><?php  echo $cricketer ?></h4>
              </div>
          </div>
         <?php } ?>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
