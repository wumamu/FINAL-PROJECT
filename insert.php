<?php
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
</head>
<body style="margin: 0px">
    <div class="homepage">INSERT PAGE</div>
    <div style="width: 500px; margin: 20px auto;">
        <table width="100%" cellpadding="5" cellspacing="1" border="1">
            <form action="insert.php" method="post">
            <tr>
                <td>機構代碼:</td>
                <td><input name="機構代碼" type="text"></td>
            </tr>
            <tr>
                <td>機構名稱:</td>
                <td><input name="機構名稱" type="text"></td>
            </tr>
            <tr>
                <td>地址:</td>
                <td><input name="地址" type="text"></td>
            </tr>
            <tr>
                <td>電話:</td>
                <td><input name="電話" type="text"></td>
            </tr>
            <tr>
                <td><a href="list.php">See Data</a></td>
                <td><input name="insert_data" type="submit" value="Insert Data"></td>
            </tr>
            <a href="index.php">Homepage</a>
            </form>
        </table>
    </div>
</body>
</html>

<?php
    // include "db_connect.php";
    $message = "";
    if(isset($_POST['insert_data']))
    {
        // Gets the data from post
        $HOSP_ID = mysqli_real_escape_string($connect, $_POST['機構代碼']);
        $HOSP_NAME =mysqli_real_escape_string($connect, $_POST['機構名稱']);
        $HOSP_ADDRESS =mysqli_real_escape_string($connect, $_POST['地址']);
        $HOSP_TEL =mysqli_real_escape_string($connect, $_POST['電話']);
        if($HOSP_ID=='' || $HOSP_NAME=='' || $HOSP_ADDRESS=='' || $HOSP_TEL=='')
        {
            echo "<p class = 'content_text'>請輸入完整資料。</p>";
            //header("Location: insert.php?insert=fail");
        }
        else
        {  
            // Makes query with post data
            // $query = "INSERT INTO CSV (機構代碼, 機構名稱) VALUES ('$HOSP_ID', '$HOSP_NAME')";

            // // Executes the query
            // // If data inserted then set success message otherwise set error message
            // if( $db->exec($query) )
            // {
            //     $message = "Data inserted successfully.";
            // }
            // else
            // {
            //     $message = "Sorry, Data is not inserted.";
            // }
            // $sql_insert = "INSERT INTO table1 (機構代碼, 機構名稱) VALUES ('$HOSP_ID', '$HOSP_NAME')";
            // $result_insert = mysqli_query($connect, $sql_insert);
            // $resultcheck_insert = mysqli_num_rows($result_insert);
            $sql_insert = "INSERT INTO table1 (機構代碼, 機構名稱, 地址, 電話) VALUES (?, ?, ?, ?)";
            //creat a prepared statement
            $stmt = mysqli_stmt_init($connect);
            //prepare the prepared statement
            if(!mysqli_stmt_prepare($stmt, $sql_insert))
            {
                echo "<p class = 'content_text'>SQL statement failed.</p>";
            } 
            else
            {
                mysqli_stmt_bind_param($stmt,"ssss", $HOSP_ID, $HOSP_NAME, $HOSP_ADDRESS, $HOSP_TEL);
                if(mysqli_stmt_execute($stmt))
                {
                    echo "<p class = 'content_text'>New record created successfully.</p>";
                }
                else 
                {
                    echo "<p class = 'content_text'>Error: ".mysqli_error($connect)."</p>";
                    // header("Location: index.php?insert=fail");
                }
            }
        }

    }
    else
    {
        echo "<p class = 'content_text'>請輸入資料。</p>"."<br>";
        // header("Location: index.php?insert=fail");
    } 
?>



