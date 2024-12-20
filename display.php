<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    
</head>
<body>
    <div>
    <button>
         <a href="user.php"> Add User</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Mark</th>
      <th scope="col">Operations</th>
    </tr> 
  </thead>
  <tbody>

    <?php
      $sql = "SELECT * from student"  ;
      $result = mysqli_query($con,$sql);

      if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id =$row['id'];
            $name =$row['name'];
            $class =$row['class'];
            $mark =$row['mark'];
        
            echo '<tr>
      <th scope="row">'.$id.'</th>   
      <td>'.$name.'</td>
      <td>'.$class.'</td>
      <td>'.$mark.'</td>

       <td>
      <button> 
        <a href="update.php?updateid='.$id.'" >Update</a></button>
      <button>
        <a href="delete.php?deleteid='.$id.'" >Delete</a>  
      </button> 
      </td>
    </tr>';
        }
      }
    ?>

  </tbody>
</table>
    </div>
</body>
</html>