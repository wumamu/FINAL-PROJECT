<?php
    $message = ""; // initial message
     
    // Includs database connection
    // include "db_connect.php";
    include 'header.php';

    // Updating the table row with submited data according to rowid once form is submited
    $id = $_GET['id']; // rowid from url
    //$query = "SELECT * FROM CSV WHERE 機構代碼='".$_GET['id']."';";
    $sql_get = "SELECT * FROM table1 WHERE 機構代碼='".$_GET['id']."';";
    // $result = $db->query($query);
    // $data=$result->fetch(PDO::FETCH_ASSOC);
    $result_get = mysqli_query($connect, $sql_get);
    $row_get = mysqli_fetch_assoc($result_get);
    if( isset($_POST['submit_data']) )
    {     
        // Gets the data from post
        //$HOSP_ID = $_GET['id']; // rowid from url
        $HOSP_ID = $_GET['id'];
        // $sql_get = "SELECT * FROM table1 WHERE 機構代碼='".$_GET['id']."';";
        // $result_get = mysqli_query($connect, $sql_get);
        // $row_get = mysqli_fetch_assoc($result_get);

        if($_POST['機構名稱']!='')
        {
            
            $HOSP_NAME = mysqli_real_escape_string($connect, $_POST['機構名稱']);
        }
        else
        {
            $HOSP_NAME = $row_get['機構名稱'];
        }
        if($_POST['地址']!='')
        {
            $ADDR = mysqli_real_escape_string($connect, $_POST['地址']); 
        }
        else
        {
            $ADDR = $row_get['地址'];
        }
        if($_POST['電話']!='')
        {
            $TEL = mysqli_real_escape_string($connect, $_POST['電話']); 
        }
        else
        {
            $HOSP_NAME = $row_get['電話'];
        }

        $sql_update = "UPDATE table1 SET 機構名稱='$HOSP_NAME', 地址='$ADDR', 電話='$TEL' WHERE 機構代碼='$HOSP_ID';";
        // $result_update = mysqli_query($connect, $sql_update);
       
        if (mysqli_query($connect, $sql_update)) 
        {
            //echo "Record updated successfully";
             $message = "<p class='content_text'>更新成功!</p>";
        } 
        else 
        {
            //echo "Error updating record: " . mysqli_error($connect);
        }
    }
    else
    {
        $message = "<p class='content_text'>更改欄位更新資料或保留。</p>";
    }

// if( isset($_POST['submit_data']) )
// {
 
//     // Gets the data from post
//     $HOSP_ID = $_GET['id']; // rowid from url
//     $HOSP_NAME = $_POST['機構名稱']; 
//     $ADDR = $_POST['地址']; 
//     $TEL = $_POST['電話']; 
//     // Makes query with post data
//     $query = "UPDATE CSV SET 機構名稱='$HOSP_NAME', 地址='$ADDR', 電話='$TEL' WHERE 機構代碼='".$_GET['id']."';";
     
//     // Executes the query
//     // If data inserted then set success message otherwise set error message
//     // Here $db comes from "db_connect.php"
//     if( $db->exec($query) ){
//         $message = "Data is updated successfully.";
//     }else{
//         $message = "Sorry, Data is not updated.";
//     }
// }
 
// $id = $_GET['id']; // rowid from url
// $query = "SELECT * FROM CSV WHERE 機構代碼='".$_GET['id']."';";
// $result = $db->query($query);
// $data=$result->fetch(PDO::FETCH_ASSOC);
   

?>
 
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<body> -->
    <div class="homepage">UPDATE PAGE</div>
    <a href="index.php">Homepage</a>
    <a href="list.php">Back to List</a>
    <div style="width: 500px; margin: 20px auto;"> 
        <!-- showing the message here-->
        <div><?php echo '<p>'.$message.'<p>';?></div>
 
        <table width="100%" cellpadding="5" cellspacing="1" border="1">
            <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <tr>
                <td>機構代碼:</td>
                <td><?php echo $row_get['機構代碼']?></td>
            </tr>
            <tr>
                <td>機構名稱:</td>
                <td><input name="機構名稱" type="text" value="<?php echo $row_get['機構名稱']?>"></td>
            </tr>
            <tr>
                <td>機構地址:</td>
                <td><input name="地址" type="text" value="<?php echo $row_get['地址'];?>"></td>
            </tr>
            <tr>
                <td>電話:</td>
                <td><input name="電話" type="text" value="<?php echo $row_get['電話'];?>"></td>
            </tr>
            <tr>
                <td><a href="list.php">Back</a></td>
                <td><input name="submit_data" type="submit" value="Update Data"></td>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>

