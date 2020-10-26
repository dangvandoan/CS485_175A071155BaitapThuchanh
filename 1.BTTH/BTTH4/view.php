<?php 
    include('database/config.php');
    
    $user_id = $_GET['id'];
    // $name = $_POST['name'];
    // $description = $_POST['description'];
    // $salary = $_POST['salary'];
    // $gender = $_POST['gender'];
    // $birthday = $_POST['birthday'];
    // $date = date("d/m/Y h:i:a");
    
    $sql = "SELECT * FROM employees WHERE id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($query);
    
    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php
// define variables and set to empty values
// $nameErr = "";
// $name = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name không được để trống";
//   } else {
//     $name = test_input($_POST["name"]);
//   }
// }

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
?>

    <h1>View Record</h1>
    <div class="container">
      <form method="post" action="index.php">
      <label for="id">ID</label> <br>
       <p><?php echo $row['id'] ;?></p>

      <label for="Name">Name</label> <br>
      <p><?php echo $row['name'] ;?></p> 
        <br>
        
        <label for="descrip">Description</label> <br>
        <p><?php echo $row['description'] ;?></p> <br>
        
        <label for="salary">Salary</label> <br>
        <p><?php echo $row['salary'] ;?></p> <br>
        
        <label for="gender">Gender</label>
        <?php
        if( $row['gender'] == 1 ){
        ?>
            <p>Male</p>
            <?php
        }else{
            ?>
            <p>Female</p>
            <?php
        }
        ?>
        <br>
        
        <label for="birthday">Birthday</label> <br>
        <p><?php echo $row['birthday'] ;?></p> <br>
        
        <input type="submit" value="Back" class="save" href="index.php">
        <!-- <input  type="submit" value="Cancel"> -->
      </form>
    </div>




  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>