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
    
    $user_id = $_GET['id'];

    // $date = date("d/m/Y h:i:a");
    
    $sql = "SELECT * FROM employees WHERE id ='$user_id'";
    $query = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($query);
    
    
    ?>
    <h1>Update Record</h1>
    <div class="container">
        <form method="POST" action="xuliedit.php">

            <input hidden type="text" class="name" name="id" value="<?php echo $row['id'] ;?>">

            <label for="Name">Name</label> <br>
            <input type="text" class="name" name="name" value="<?php echo $row['name'] ; ?>">
            <br>

            <label for="descrip">Description</label> <br>
            <textarea name="description" id="descrip" cols="30"
                rows="10"> <?php echo $row['description'] ; ?> </textarea> <br>

            <label for="salary">Salary</label> <br>
            <input type="text" name="salary" class="salary" value="<?php echo $row['salary'] ; ?>"> <br>

            <label for="gender">Gender</label>
            <?php if($row['gender'] == 0){?>
            <input type="radio" name="gender" value="0" checked> Male
            <input type="radio" name="gender" value="1"> Female
            <?php }else{ ?>
            <input type="radio" name="gender" value="0"> Male
            <input type="radio" name="gender" value="1" checked> Female
            <?php } ?>
            <br>

            <label for="birthday">Birthday</label> <br>
            <input type="date" class="birthday" name="birthday" value="<?php echo $row['birthday'] ; ?>"> <br>

            <input type="submit" value="Save" class="save">
            <input type="button" value="Cancel">
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