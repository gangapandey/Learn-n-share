<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'curdform'))
{
    echo 'database not selected';
}

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$sql = "insert into curdreg (Username,Password) value('$Username','$Password')";

if(!mysqli_query($con,$sql))
{
    echo"data not inserted";
}
else
{
 	echo"<font color='DarkBlue'>new record inserted successfully";

}
?>