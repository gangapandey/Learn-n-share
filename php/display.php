<?php
$conn=mysqli_connect("localhost","root","","curdform");
$id=$_GET['ids'];
$delete="DELETE from curdreg where id=$id";
$q=mysqli_query($conn,$delete);
if($q){
	?>
	<script>alert('deleted successfully');</script>
	<?php
	header('location:display.php');
}
else{
	?>
	<script>alert('not deleted');</script>
	<?php
}
?>