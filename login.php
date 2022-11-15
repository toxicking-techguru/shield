<?php
$server_name="localhost:5500";
$username ="root";
$password="";
$database_name="login_lilian_db";

$conn = mysqli_ct($server_name,$user_name,$password,$database_name);
if(!$conn)
{
    die("connection failed:" . mysql_connect_error());
}
if(isset($_POST['this_is_like_id']))
{
    $id=$_POST['id'];
    $user_id=$_POST['user_id'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $date=$_POST['date'];


    $sql_query = "INSERT INTO userss (id,user_id,user_name,password,date)
    VALUES ('$id','$user_id','$user_name','$password','$date')";
    if (mysqli_query($conn,$sql_query))
    {
        echo "new details entry inserted successfully !";
    }
    else
    {
        echo "error:".$sql ."" .mysqli_error($conn);
    }
    mysqli_close ($conn);
}


    ?>

  