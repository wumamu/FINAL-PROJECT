<?php
    include 'header.php';
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<style>
body{width:80%;margin:30px auto;}
</style> -->

<div class="homepage">SEARCH RESULT PAGE</div>
<a href="index.php">Homepage</a>
<div style="width: 800px; margin: 20px auto; ">
    <?php
        //include "db_connect.php";
        $message = ""; // error message

        if( isset($_POST) )
        {
            // Get data from post
            $area =  mysqli_real_escape_string($connect, $_POST['area']);
            $type =  mysqli_real_escape_string($connect, $_POST['type']);
            $district =  mysqli_real_escape_string($connect, $_POST['district']);

            print "<p class='content_text'>您的搜尋: ".$area."  ".$type." ".$district."</p><br>";
            // $query="SELECT * FROM CSV, INFO WHERE substr(CSV.地址,1,3)='$area'
            //         AND substr(CSV.地址,4,3) LIKE  '%$district%' 
            //         AND CSV.機構代碼=INFO.機構代碼
            //         AND substr(INFO.診療科別,1,10) LIKE '%$type%';";
            // //print error
            // if( $db->exec($query) ){
            //     $message = "";
            // }else{
            //     $message = "Fail";
            // }
            // $sql_bar = "SELECT * FROM table1, table2 WHERE substr(table1.地址,1,3)='$area'
            //         AND substr(table1.地址,4,3) LIKE  '%$district%' 
            //         AND table1.機構代碼=table2.機構代碼
            //         AND substr(table2.診療科別,1,10) LIKE '%$type%';";
            // $result_bar = mysqli_query($connect, $sql_bar);
            // $resultcheck_bar = mysqli_num_rows($result_bar);   
            $sql_bar = "SELECT * FROM table1, table2 WHERE substr(table1.地址,1,3)=?
                    AND substr(table1.地址,4,3) LIKE ? 
                    AND table1.機構代碼=table2.機構代碼
                    AND substr(table2.診療科別,1,10) LIKE ?;";
            
            //creat a prepared statement
            $stmt = mysqli_stmt_init($connect);
            //prepare the prepared statement
            if(!mysqli_stmt_prepare($stmt, $sql_bar))
            {
                echo "<p class = 'content_text'>SQL statement failed.。</p>";
            } 
            else
            {
                //bind parameters to the placeholder
                $dis_p = "%".$district."%";
                $type_p = "%".$type."%";
                mysqli_stmt_bind_param($stmt,"sss", $area, $dis_p, $type_p);
                mysqli_stmt_execute($stmt);
                $result_bar = mysqli_stmt_get_result($stmt);
                $resultcheck_bar = mysqli_num_rows($result_bar); 
                if($resultcheck_bar>0)
                {
                    echo ' <table class="list_table" >
                            <tr>
                                <td>機構代碼</td>
                                <td>機構名稱</td>
                                <td>地址</td>
                                <td>診療科別</td>
                                <td>電話</td>
                            </tr>';
                    foreach($result_bar as $row_bar)
                    {
                        echo "<tr>
                            <td>".$row_bar['機構代碼']."</td> 
                            <td>".$row_bar['機構名稱']."</td>
                            <td>".$row_bar['地址']."</td>
                            <td>".$row_bar['診療科別']."</td>
                            <td>".$row_bar['電話']."</td>
                            </tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "<p class='content_text'>查無結果。</p>";

                }
            }

        }
        // $result = $db->query($query);
        // $data=$result->fetchAll(PDO::FETCH_ASSOC);
    ?>

    </div>
</body>
</html>