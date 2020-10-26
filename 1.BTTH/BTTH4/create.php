<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
      include('config.php');
      if($_POST) {

      $id = $_POST['id'] ;
      $name = $_POST['name'];
      $description = $_POST['description'];
      $salary = $_POST['salary'];
      $gender = $_POST['gender'];
      $birthday = $_POST['birthday'];
      $date = date('y-m-d h:m:s');
      
      $sql = "INSERT INTO employees(id,name,description,gender,salary,birthday,created_at) VALUES ($id, '$name', '$description',$gender, $salary,'$birthday', '$date')" ;
      $query = mysqli_query($conn, $sql); 

        echo "<script type='text/javascript'>alert('Thêm vào thành công !');</script>"; 
      }    
    ?>

    <?php
// define variables and set to empty values
$nameErr = "";
$name = "";

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

    <h1>Create Record</h1>
    <div class="container">
        <form method="post" action="create.php">
            <label for="id">ID</label> <br>
            <input type="text" name="id"> <br>

            <label for="Name">Name</label> <br>
            <input type="text" class="name" name="name">
            <span class="error">*<?php echo $nameErr;?> </span> <br>

            <label for="descrip">Description</label> <br>
            <textarea name="description" id="descrip" cols="30" rows="10"></textarea> <br>

            <label for="salary">Salary</label> <br>
            <input type="text" name="salary" class="salary"> <br>

            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="0"> Male
            <input type="radio" name="gender" value="1"> Female
            <br>

            <label for="birthday">Birthday</label> <br>
            <input type="date" class="birthday" name="birthday"> <br>

            <input type="submit" value="Save" class="save">
            <input type="submit" value="Cancel">
        </form>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>