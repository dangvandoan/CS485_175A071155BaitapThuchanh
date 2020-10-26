
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">

</head>
  <body>
  <?php 
    include('config.php');
    
    $sql = "SELECT * FROM employees";
    $query = mysqli_query($conn, $sql);
    
    // $row = mysqli_fetch_assoc($query);
    
    
?>
      <div class="container">
          <h1>Employee List</h1>
          <div class="nvlist">
              <div class="add">
                  <button> <a href="create.php"> <h5>+Add New Employee</h5></a></button>
              </div>

          
             <table class='table'>
                     <thead class='thead-dark'> 
                         <tr>
                         
                            <th>Name</th> 
                            <th>Description</th> 
                            <th>Gender</th> 
                            <th>Salary</th> 
                            <th>Birthday</th> 
                            <th>Created_at</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                 <tbody> 
                <?php while($row = mysqli_fetch_assoc($query)) {?>
                            <tr> 
                             <td> <?php echo $row['id']; ?></td>
                             <td> <?php echo $row['name'] ;?></td>
                             <td> <?php echo $row['description'] ;?> </td>
                             <td> <?php echo $row['gender'] ;?> </td>
                             <td> <?php echo $row['salary'] ;?> </td>
                             <td> <?php echo $row['birthday'] ;?> </td>
                             <td> <?php echo $row['created_at'] ;?></td>
                             <td>
                                 <a href="view.php?id=<?php echo $row['id'];?>"   ><i class="far fa-eye"></i></a>
                                 <a href="delete.php?id=<?php echo $row['id'];?>" onclick="if (!confirm('Bạn có chắc chắn muốn xóa bản ghi này không?')) { return false }" ><i class="fas fa-trash"></i></a>
                                 <a href="edit.php?id=<?php echo $row['id'];?>" ><i class="fas fa-edit"></i></a>
                            </td>               
                        </tr>
                        <?php
                    }
                    ?>
                   


                 </tbody> 
          </table> 

          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html>