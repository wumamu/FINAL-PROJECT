
<?php

// Includs database connection
    // include "db_connect.php";
    include 'header.php';

    // // Makes query with rowid
    // $query = "SELECT * FROM CSV;";

    // // Run the query and set query result in $result
    // // Here $db comes from "db_connect.php"
    // $result = $db->query($query);
    $sql_all = "SELECT * FROM table1 ORDER BY table1.機構代碼 ASC;";
    $result_all = mysqli_query($connect, $sql_all);
    $resultcheck_all = mysqli_num_rows($result_all); 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Data List</title>
</head>
<body style="margin: 0px">
    <div class="homepage">LIST PAGE</div>
    <div style="width: 900px; margin: 20px auto;">
    <div class = 'information_box'>
        <a href="index.php">Homepage</a>
        <a href="insert.php">Add New</a>
        
        <table class="list">
            <tr>
                <td>機構代碼</td>
                <td>機構名稱</td>
                <td>地址</td>
                <td>電話</td>
                <td>操作</td>
            </tr>
            <?php foreach($result_all as $row_all) {?>
            <tr>
                <td><?php echo $row_all['機構代碼'];?></td>
                <td><?php echo $row_all['機構名稱'];?></td>
                <td><?php echo $row_all['地址'];?></td>
                <td><?php echo $row_all['電話'];?></td>
                <td>
                    <a href="update.php?id=<?php echo $row_all['機構代碼'];?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $row_all['機構代碼'];?>" onClick="return confirm('Delete This Information?')">Delete</a>
                    <!-- <a href="delete.php?id=<?php //echo $row_all['機構代碼'];?>"  confirm('Are you sure?');">Delete</a> -->
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
