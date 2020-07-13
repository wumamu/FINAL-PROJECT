<?php

	include 'header.php';
	// include "db_connect.php";
    //enter your api key here
    $api_key = "AIzaSyBjL5LYb_GFGzQx_KF757MhJ8U01nl5Jnc";
    $url_lat_lng = "https://maps.googleapis.com/maps/api/place/findplacefromtext/xml?";
    $url_near = "https://maps.googleapis.com/maps/api/place/nearbysearch/xml?";
?>

<div class="homepage">SEARCH RESULT PAGE</div>
<a href="index.php">Homepage</a>
<div class="information_container">
<?php
		if(isset($_POST['submit_search']))
		{
			$ins_search = mysqli_real_escape_string($connect, $_POST['ins']);
		  $dis_search = mysqli_real_escape_string($connect, $_POST['dis']);
	    $sql_ins ="SELECT * FROM table1 WHERE table1.機構名稱 LIKE ? ;";
      //creat a prepared statement
      $stmt = mysqli_stmt_init($connect);
      //prepare the prepared statement
      if(!mysqli_stmt_prepare($stmt, $sql_ins))
      {
          echo "SQL statement failed";
      }
      else
      {
          //bind parameters to the placeholder
          $ins_search_p = "%".$ins_search."%";
          mysqli_stmt_bind_param($stmt,"s", $ins_search_p);
          mysqli_stmt_execute($stmt);
          $result_ins = mysqli_stmt_get_result($stmt);
          $resultcheck_ins = mysqli_num_rows($result_ins);
          if($resultcheck_ins>0 && $dis_search=='')
          {
          	echo "<p class='content_text'>您所搜尋的醫療機構".$ins_search."有".$resultcheck_ins."份結果。</p><br>";
	         	while ($row_ins = mysqli_fetch_assoc($result_ins))
	          {
	          	echo "<div class = 'information_box'>
	                    <h3 class='content_text'>"."名稱: ".$row_ins['機構名稱']."<br>"."</h3>
	                    <h3 class='content_text'>"."電話: ".$row_ins['電話']."<br>"."</h3>
	                    <h3 class='content_text'>"."地址: ".$row_ins['地址']."<br>"."</h3>
	                    <h3 class='content_text'>"."-----------------------------------------------------------------------------"."<br>"."</h3>
	          	</div>";
	          }
          }
					else if ($dis_search=='')
					{
						echo "<p class='content_text'>您所搜尋的醫療機".$ins_search."構查無結果。</p><br>";
					}
         	else
      		{
						//echo "sorry no result"."<br>";
						if(!preg_match("/^([0-9]+)$/", $dis_search))
						{
							header("Location: index.php?distant=false");
							exit();
						}
						$final_lat_lng = $url_lat_lng.'input='.$ins_search.'&inputtype=textquery&fields=photos,formatted_address,name,rating,opening_hours,geometry'.'&key='.$api_key.'&language=zh-TW';
		  			$xmlsearch_lat_lng = simplexml_load_file($final_lat_lng);
						if($xmlsearch_lat_lng->status == 'OK')
					  {
					        $lat = $xmlsearch_lat_lng->candidates[0]->geometry->location->lat;
					        $lng = $xmlsearch_lat_lng->candidates[0]->geometry->location->lng;
					        $final_near = $url_near.'location='.$lat.','.$lng.'&radius='.$dis_search.'&type=doctor,hospital,physiotherapist,dentist&keyword=hospital&opennow=true&key='.$api_key.'&language=zh-TW';
					        //echo $final_near."<br>";
					        $xmlsearch_near = simplexml_load_file($final_near);
					        if($xmlsearch_near->status == 'OK')
						    	{
										$result_num = count($xmlsearch_near->result);
										$result_num_tmp = count($xmlsearch_near->result)-1;
						        echo "<p class='content_text'>在距離您指定地點".$ins_search.$dis_search."公尺內google有".$result_num_tmp."份搜尋結果。</p>"."<br>";
						        echo "<p class='content_text'>以下呈現與資料庫match的結果</p><br>";
						        echo "<br>";
						        for ($x = 1; $x < $result_num; $x++)
						        {
											$name_ins = $xmlsearch_near->result[$x-1]->name;
						          //echo $name_ins."<br>";
						          $sql_detail = "SELECT * FROM table1 WHERE table1.機構名稱 LIKE '%$name_ins%';";
							        $result_detail = mysqli_query($connect, $sql_detail);
							        if($result_detail)
							        {
							        	$resultcheck_detail = mysqli_num_rows($result_detail);
								        if($resultcheck_detail>0)
								        {
								       		while ($row_detail = mysqli_fetch_assoc($result_detail))
								          {
								            	echo "<div class = 'information_box'>
							                        <h3 class='content_text'>"."名稱: ".$row_detail['機構名稱']."<br>"."</h3>
							                        <h3 class='content_text'>"."電話: ".$row_detail['電話']."<br>"."</h3>
							                        <h3 class='content_text'>"."地址: ".$row_detail['地址']."<br>"."</h3>
							                        <h3 class='content_text'>目前是否營業中: 是</h3>
							                        <h3 class='content_text'>"."google評分: ".$xmlsearch_near->result[$x]->rating."</h3>
							                        <h3 class='content_text'>"."-----------------------------------------------------------------------------"."<br>"."</h3>
								            		</div>";
								          }
								        }
								        else
								        {
								        	//echo "<h3>database no match result</h3>";
								        }
							        }
							        else
							        {
							        	//echo "123Warning: mysqli_num_rows() expects parameter 1 to be mysqli_result, bool given in<br>";
							        }
						        }
					   			}
					   			else//ZERO_RESULTS
							    {
							        echo "<p class='content_text'>在距離".$ins_search.$dis_search."公尺內無醫療機構。</p>"."<br>";
							    }

						}
				    else//ZERO_RESULTS
				    {
				        echo "<h4>查無地點資料。</h4>"."<br>";
				    }
      		}

      }
		}
	?>

</div>
