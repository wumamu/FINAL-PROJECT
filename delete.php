<?php
	// Includs database connection
	// include "db_connect.php";
	include 'header.php';
?>
	<div class="homepage">DELETE PAGE</div>
	<a href="index.php">Homepage</a>
	<a href="list.php">Back to List</a>
<?php	
	$id = $_GET['id']; // rowid from url
	
	// Prepar the deleting query according to rowid
	// $query = "DELETE FROM CSV WHERE 機構代碼='$id';";
	 
	// // Run the query to delete record
	// if( $db->query($query) ){
	//     $message = "Record is deleted successfully. ";
	// }else {
	//     $message = "Sorry, Record is not deleted. ";
	// }
	$sql_delete = "DELETE FROM table1 WHERE 機構代碼='$id';";
    //$result_delete = mysqli_query($connect, $sql_delete);
    if (mysqli_query($connect, $sql_delete)) 
    {
    	//echo "<p class='content_text'>Record deleted successfully</p>";
    	print '<p class="title_text">您所刪除的資料 機構代碼:'.$id."</p><br> ";
    } 
    else 
    {
    	echo "<p class='content_text'>Error deleting record: " . mysqli_error($conn)."</p>";
    }
?>