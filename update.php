<?php
  include 'connect.php';
    $id =$_GET['updateid'];

    $sql= "SELECT * FROM student WHERE id=$id";
    $result= mysqli_query($con,$sql);
    $row= mysqli_fetch_assoc($result);
    $id =$row['id'];
    $name =$row['name'];
    $class =$row['class'];
    $mark =$row['mark'];

  if(isset($_POST['submit'])){
    $id = $_POST['id']; 
    $name =$_POST['name'];
    $class =$_POST['class'];
    $mark =$_POST['mark'];

    $sql = "UPDATE student SET id=$id, name='$name', class='$class', mark='$mark' WHERE id=$id" ;
    
    $result = mysqli_query($con,$sql);
    if($result){
 
      header('location:display.php');
        } 
        else{
          die(mysqli_error($con));
        }

  }


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
   
  </head>
  <body>
    
  <div>
    <form method="post">
    <div >
      <label>Id</label>
      <input type="text"  placeholder="Enter your Id" name="id" value=<?php echo $id; ?>>
    </div>

    <div >
      <label>Name</label>
      <input type="text"  placeholder="Enter your name" name="name" value=<?php echo $name; ?>>
    </div>

    <div >
      <label>Class</label>
      <input type="text"  placeholder="Enter your class" name="class" value=<?php echo $class; ?>>
    </div>

    <div >
      <label>Mark</label>
      <input type="text"  placeholder="Enter your mark" name="mark" value=<?php echo $mark; ?>>
    </div>

  <button type="submit" name="submit">Update</button>
  </form>
 </div>

  </body>
</html>

