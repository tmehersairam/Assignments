<?php
include("../assignment5/config.php");
$query = "SELECT * FROM STUDENTS";
$exec = mysqli_query($con, $query);

// for fetching the elements in an array
$array = mysqli_fetch_all($exec, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-		ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Index page</title>
</head>

<body class="jumbotron">
    <p style="text-align: center;"><i class="fa fa-star fa-spin" aria-hidden="true"></i><i class="fa fa-home fa-4x" aria-hidden="true"></i>
    <i class="fa fa-star fa-spin" aria-hidden="true"></i></p>
    <div class="container row col">
    	
		<form action="./insert.php" method="post" class="col col-lg-4">
			<div class="alert alert-primary" role="alert">
				<strong>INSERT</strong>
			</div>
			<label for="first_name">Enter first name</label>
			<input type="text" name="first_name" class="form-control" >
			<br>
			<label for="last_name">Enter Last name</label>
			<input type="text" name="last_name" class="form-control">
			<br>
			<label for="phone">Enter phone name</label>
			<input type="number" name="phone" class="form-control">
			<br>
			<button class="btn btn-primary">INSERT STUDENT</button>
		</form>
    
    <!--  FORM FOR UPDATING THE STUDENT -->

    <form action="./update.php" method="post" class="col col-lg-4">
    
		<div class="alert alert-success" role="alert">
			<strong>UPDATE</strong>
		</div>
		<label for="update_select">Please select a name to update</label>
        <select name="id" class="form-control">
            <?php
            foreach ($array as $row2) {
                echo "<option value='" . $row2['id'] . "' >" . $row2['first_name'] . "</option>";
            }
            ?>
        </select>
        <br>
		<label for="last_name">Enter last name to update</label>
		<input type="text" name="last_name" class='form-control'>
        <br>
		<label for="phone">Enter phone to update</label>
        <input type="number" name="phone"class="form-control">
        <br>
        <button class="btn btn-success">UPDATE STUDENT </button>
    </form>



    <!-- FORM FOR DELETING THE STUDENT -->
    <form action="./delete.php" method="post" class='col col-lg-4'>
		<div class="alert alert-danger" role="alert">
			<strong>DELETE</strong>
		</div>
		<label for="id">Select name to delete</label>

        <select name="id" id="" class="form-control">
            <?php
            foreach ($array as $row) {
                echo "<option value='" . $row['id'] . "' >" . $row['first_name'] . "</option>";
            }
            ?>
        </select>
        <br>
        <button name="delete_btn" class="btn btn-danger" value="del">DELETE <i class="fa fa-trash" aria-hidden="true"></i></button>
    </form>

    </div>
<!-- end of	/container	 -->

    <div class="card-columns" style="padding-top:  30px;">
            <?php 
            foreach ($array as $row1) {
            ?>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">First Name : <?php  echo $row1['first_name']; ?></h4>
                <h4 class="card-title">Last Name : <?php  echo $row1['last_name']; ?></h4>
                <p class="card-text">Phone Number : <?php echo  $row1['phone']; ?></p>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
<!--  end of / card-columns	 -->
</body>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

