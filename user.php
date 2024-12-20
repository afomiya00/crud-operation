<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name =$_POST['name'];
    $class =$_POST['class'];
    $mark =$_POST['mark'];

    $sql = "INSERT INTO student (id,name,class,mark)
    values('$id', '$name', '$class', '$mark')" ;
    
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
    <title>CRUD</title>
    
  </head>
  <body>
    
  <div>
    <form method="post">
    <div>
      <label>ID</label>
      <input type="text" placeholder="Enter your ID" name="id">
    </div>

    <div>
      <label>Name</label>
      <input type="text"  placeholder="Enter your name" name="name">
    </div>

    <div>
      <label>Class</label>
      <input type="text" placeholder="Enter your class" name="class">
    </div>

    <div>
      <label>Mark</label>
      <input type="text" placeholder="Enter your mark" name="mark">
    </div>

  <button type="submit"  name="submit">Submit</button>
  </form>
 </div>

  </body>
</html>