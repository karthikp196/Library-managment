
<?php
include('config.php');
if(!isset($_SESSION['id']))
{
    header('location:index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <div class="container">
<?php
$id = $_SESSION['id'];
$query1 = "SELECT * FROM user_details WHERE id=$id";
$result1 = mysqli_query($conn,$query1);
while($row2= mysqli_fetch_array($result1))
{

?>
    <p><?php echo $row2['name'] ?></p>
    <p>Not <?php echo $row2['name'] ?>? <a href="logout.php">logout</a></p>

    <?php
}
    ?>

<table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Book Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
  <?php
                $query = "SELECT * FROM book_details";
                $result = mysqli_query($conn,$query);
                while($row=mysqli_fetch_array($result))
                {

               
 ?>
    <tr>
      
      <td> <?php echo $row['bookname']; ?></td>
      <td> <?php
       $a_id = $row['aurthorname']; 
       $sql2 = "SELECT * FROM aurthor_details WHERE id=$a_id";
       $res2 = mysqli_query($conn,$sql2);
       while($aur = mysqli_fetch_array($res2))
       {
           echo $aur['aurthor_name'];
       }
       ?>
       </td>
      <td> <?php 
      $c_id = $row['category'];
      $sql3 = "SELECT * FROM categories WHERE id=$c_id";
      $res3 = mysqli_query($conn,$sql3);
      while($cate = mysqli_fetch_array($res3))
      {
          echo $cate['category_name'];
      }
       ?></td>
    </tr>
    <?php
                }
    ?>
  </tbody>
</table>

<p>
    <b>Total Number of books :</b>   <?php
        $sql4 = "SELECT * FROM book_details";
        $res4 = mysqli_query($conn,$sql4);
        $rows = mysqli_num_rows($res4);
        echo $rows;
    ?>
</p>

<p>
    <b>Total Number of Aurthors :</b>    
    <?php
         $sql5 = "SELECT * FROM aurthor_details";
         $res5 = mysqli_query($conn,$sql5);
         $rows1 = mysqli_num_rows($res5);
         echo $rows1;
    ?>
</p>

<p>
    <b>Total Number of Category :  </b> 
    <?php
         $sql6 = "SELECT * FROM categories";
         $res6 = mysqli_query($conn,$sql6);
         $rows2 = mysqli_num_rows($res6);
         echo $rows2;
    ?>  
</p>

<p>
    <b>(Check the database to verify insert category and aurthor or book you can see the dynamic values here)</b>
</p>

    </div>
</body>
</html>