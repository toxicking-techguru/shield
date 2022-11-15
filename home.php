<?php
$server_name="localhost";
$username ="root";
$password="";
$database_name="database178 ";

$conn=mysqli_connect($server_name,$user_name,$password,$database_name);
if(!$conn)
{
    die("connection failed:" . mysql_connect error());
}

if(isset($_POST['Submit']))
{
    $first_name=$_POST['first_name']
    $last_name=$_POST['last_name'];
    $school=$_POST['school'];
   

    $sql_query = "INSERT INTO school_form (first_name,last_name,school)
    VALUES ('$first_name','$last_name','$school')";
    if (mysqli_query=($conn,$sql_query))
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

  