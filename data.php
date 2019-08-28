<?php

include('config.php');
if(isset($_POST['username']) && ($_POST['password']))
{
    $username = $_POST['username'];
    $Password = $_POST['password'];
    $sql = "SELECT * FROM user_details WHERE username= '$username' AND password= '$Password'";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result) == 1)
    {
        while($row = mysqli_fetch_array($result))
        {
           $_SESSION['id'] = $row['id'];
           
        }
        echo "1";
    }

    else
    {
        echo "0";
    }
}

else if(isset($_POST['name_reg']) && ($_POST['username_reg']) && ($_POST['password_reg']))
{
    $name = $_POST['name_reg'];
    $username_reg = $_POST['username_reg'];
    $password_reg = $_POST['password_reg'];
    
    $query = "INSERT INTO user_details (name,username,password) VALUES ('$name','$username_reg','$password_reg')";
    $result = mysqli_query($conn,$query);

    if($result==TRUE)
    {
        echo "successfully registered";
    }
    else
    {
        echo "failed to register";
    }
}

else{
    echo "data not recieved";
}


?>