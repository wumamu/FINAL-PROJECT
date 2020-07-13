
<?php
    // include "db_connect.php";
    include 'header.php';
    //include "bar_search_1.php";
?>

    <!-- 給定特定機構名回傳其資料 -->
    <!-- <form method="GET"> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <title>php & sqlite3 測試網頁</title>
    <style>body{width:80%;margin:20px auto;}</style>
</head>
<body style="margin: 0px">
  <div class="homepage">HOME PAGE</div>
  <p class="title_text">醫療機構查詢:</p>
  <div class="information_container">
  <form name="myForm" method="post" action="search_bar.php">
  縣市:
  <select Name="area" OnChange="Buildkey(this.selectedIndex);">
    <option Value="選擇">選擇<option value="臺北市">臺北市</option><option value="新北市">新北市</option><option value="桃園市">桃園市</option>
    <option value="新竹縣">新竹縣</option><option value="新竹市">新竹市</option><option value="苗栗縣">苗栗縣</option>
    <option value="臺中市">臺中市</option><option value="南投縣">南投縣</option><option value="彰化縣">彰化縣</option><option value="雲林縣">雲林縣</option>
    <option value="嘉義縣">嘉義縣</option><option value="嘉義市">嘉義市</option><option value="臺南市">臺南市</option><option value="高雄市">高雄市</option>
    <option value="屏東縣">屏東縣</option><option value="宜蘭縣">宜蘭縣</option><option value="花蓮縣">花蓮縣</option><option value="臺東縣">臺東縣</option>
    <option value="澎湖縣">澎湖縣</option> <option value="金門縣">金門縣</option><option value="連江縣">連江縣</option><option value="基隆市">基隆市</option>
  </select>

  區域:
  <select Name="district">
  <option>選擇</option>
  </Select>

  科別:
  <Select name="type">
    <option value="">選擇:</option><option value="中醫一般科">中醫一般科</option><option value="西醫一般科">西醫一般科</option><option value="牙醫一般科">牙醫一般科</option>
    <option value="齒顎矯正科">齒顎矯正科</option><option value="家庭醫學科">家庭醫學科</option><option value="內科 兒科">內科 兒科</option>
    <option value="整形外科">整形外科</option><option value="耳鼻喉科">耳鼻喉科</option><option value="精神科">精神科</option><option value="神經科">神經科</option>
    <option value="復健科">復健科</option> <option value="皮膚科">皮膚科</option><option value="婦產科">婦產科</option><option value="眼科">眼科</option>
    <option value="內科">內科</option><option value="外科">內科</option<option value="骨科">眼科</option><option value="兒科">兒科</option>
  </Select>
  <input type="submit" value="SEARCH">
  </div>
</body>
</html>


<head>

  <title>show error</title>
</head>
<body>
  <form action="insert.php" method="post"></form>
</body>
</html>


<html>
<p class="title_text">新增醫療機構:</p>
<body>
<div class="information_container">
        <table width="100%" cellpadding="5" cellspacing="1" border="1">
            <form action="insert.php" method="POST">
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
            </form>
        </table>
</div>
</body>
</html>


<SCRIPT Language="JavaScript">
key=new Array(4);
key[0]=new Array(1);key[1]=new Array(12);key[2]=new Array(29);key[3]=new Array(12);
key[4]=new Array(12);key[5]=new Array(3);key[6]=new Array(18);key[7]=new Array(29);
key[8]=new Array(13);key[9]=new Array(26);key[10]=new Array(19);key[11]=new Array(18);
key[12]=new Array(2);key[13]=new Array(37);key[14]=new Array(38);key[15]=new Array(33);
key[16]=new Array(12);key[17]=new Array(13);key[18]=new Array(16);key[19]=new Array(6);
key[20]=new Array(6);key[21]=new Array(4);key[22]=new Array(7);

key[0][0]="選擇";
key[1][0]="松山區"; key[1][1]="信義區"; key[1][2]="大安區";key[1][3]="大安區"; key[1][4]="中山區";key[1][5]="中正區";key[1][6]="萬華區"; key[1][7]="文山區"; key[1][8]="南港區";key[1][9]="內湖區"; key[1][10]="士林區"; key[1][11]="北投區";
key[2][0]="板橋區"; key[2][1]="中和區"; key[2][2]="新莊區";key[2][3]="土城區"; key[2][4]="汐止區"; key[2][5]="鶯歌區";key[2][6]="淡水區"; key[2][7]="五股區"; key[2][8]="林口區";key[2][9]="深坑區";key[2][10]="坪林區";key[2][11]="石門區"; key[2][12]="萬里區"; key[2][13]="雙溪區";key[2][14]="烏來區";key[2][15]="貢寮區"; key[2][16]="三重區";key[2][17]="石門區"; key[2][18]="萬里區"; key[2][19]="雙溪區";key[2][20]="烏來區";key[2][21]="三峽區";key[2][22]="瑞芳區"; key[2][23]="泰山區"; key[2][24]="八里區";key[2][25]="石碇區";key[2][26]="三芝區";key[2][27]="金山區"; key[2][28]="平溪區";
key[3][0]="桃園區"; key[3][1]="中壢區"; key[3][2]="平鎮區";key[3][3]="八德區"; key[3][4]="楊梅區";key[3][5]="蘆竹區";key[3][6]="龜山區"; key[3][7]="龍潭區"; key[3][8]="大溪區";key[3][9]="大園區"; key[3][10]="觀音區"; key[3][11]="新屋區";key[3][12]="復興區";
key[4][0]="竹北市"; key[4][1]="竹東鎮"; key[4][2]="新埔鎮";key[4][3]="關西鎮"; key[4][4]="峨眉鄉";key[4][5]="寶山鄉";key[4][6]="北埔鄉"; key[4][7]="橫山鄉"; key[4][8]="芎林鄉";key[4][9]="湖口鄉"; key[4][10]="新豐鄉"; key[4][11]="尖石鄉";key[4][12]="五峰鄉";
key[5][0]="東區"; key[5][1]="北區鎮"; key[5][2]="香山區";
key[6][0]="苗栗市"; key[6][1]="通霄鎮"; key[6][2]="苑裡鎮";key[6][3]="竹南鎮"; key[6][4]="頭份鎮"; key[6][5]="後龍鎮";key[6][6]="卓蘭鎮"; key[6][7]="西湖鄉"; key[6][8]="頭屋鄉";key[6][9]="公館鄉";key[6][10]="銅鑼鄉";key[6][11]="三義鄉"; key[6][12]="造橋鄉";key[6][13]="三灣鄉";key[6][14]="南庄鄉"; key[6][15]="大湖鄉"; key[6][16]="獅潭鄉"; key[6][17]="泰安鄉";
key[7][0]="中區";key[7][1]="東區";key[7][2]="南區";key[7][3]="西區";key[7][4]="北區";key[7][5]="北屯區";key[7][6]="西屯區";key[7][7]="南屯區";key[7][8]="太平區";key[7][9]="大里區";key[7][10]="后里區";key[7][11]="東勢區";key[7][12]="石岡區";key[7][13]="新社區";key[7][14]="和平區";key[7][15]="神岡區";key[7][16]="潭子區";key[7][17]="大雅區";key[7][18]="大肚區";key[7][19]="龍井區";key[7][20]="沙鹿區";key[7][21]="梧棲區";key[7][22]="清水區";key[7][23]="大甲區";key[7][24]="外埔區";key[7][25]="霧峰區";key[7][26]="烏日區";key[7][27]="豐原區";key[7][28]="大安區";
key[8][0]="南投市";key[8][1]="埔里鎮";key[8][2]="草屯鎮";key[8][3]="竹山鎮";key[8][4]="集集鎮";key[8][5]="名間鄉";key[8][6]="中寮鄉";key[8][7]="鹿谷鄉";key[8][8]="魚池鄉";key[8][9]="國姓鄉";key[8][10]="水里鄉";key[8][11]="信義鄉";key[8][12]="仁愛鄉";
key[9][0]="彰化市";key[9][1]="員林鎮";key[9][2]="和美鎮";key[9][3]="鹿港鎮";key[9][4]="溪湖鎮";key[9][5]="二林鎮";key[9][6]="田中鎮";key[9][7]="北斗鎮";key[9][8]="花壇鄉";key[9][9]="芬園鄉";key[9][10]="大村鄉";key[9][11]="永靖鄉";key[9][12]="伸港鄉";key[9][13]="線西鄉";key[9][14]="福興鄉";key[9][15]="秀水鄉";key[9][16]="埔心鄉";key[9][17]="埔鹽鄉";key[9][18]="大城鄉";key[9][19]="芳苑鄉";key[9][20]="竹塘鄉";key[9][21]="社頭鄉";key[9][22]="二水鄉";key[9][23]="田尾鄉";key[9][24]="埤頭鄉";key[9][25]="溪州鄉";
key[10][0]="斗六市";key[10][1]="斗南鎮";key[10][2]="虎尾鎮";key[10][3]="西螺鎮";key[10][4]="土庫鎮";key[10][5]="北港鎮";key[10][6]="莿桐鄉";key[10][7]="古坑鄉";key[10][8]="大埤鄉";key[10][9]="崙背鄉";key[10][10]="二崙鄉";key[10][11]="麥寮鄉";key[10][12]="臺西鄉";key[10][13]="東勢鄉";key[10][14]="褒忠鄉";key[10][15]="四湖鄉";key[10][16]="口湖鄉";key[10][17]="水林鄉'";key[10][18]="元長鄉";
key[11][0]="太保市";key[11][1]="朴子市";key[11][2]="布袋鎮";key[11][3]="大林鎮";key[11][4]="民雄鄉";key[11][5]="溪口鄉";key[11][6]="新港鄉";key[11][7]="六腳鄉";key[11][8]="東石鄉";key[11][9]="義竹鄉";key[11][10]="鹿草鄉";key[11][11]="水上鄉";key[11][12]="中埔鄉";key[11][13]="竹崎鄉";key[11][14]="梅山鄉";key[11][15]="番路鄉";key[11][16]="阿里山鄉";key[11][17]="大埔鄉";
key[12][0]="東區";key[12][1]="西區";
key[13][0]="中西區";key[13][1]="東區";key[13][2]="南區";key[13][3]="北區";key[13][4]="安平區";key[13][5]="安南區";key[13][6]="永康區";key[13][7]="歸仁區";key[13][8]="新化區";key[13][9]="左鎮區";key[13][10]="玉井區";key[13][11]="楠西區";key[13][12]="南化區";key[13][13]="仁德區";key[13][14]="關廟區";key[13][15]="龍崎區";key[13][16]="官田區";key[13][17]="麻豆區";key[13][18]="佳里區";key[13][19]="西港區";key[13][20]="七股區";key[13][21]="將軍區";key[13][22]="學甲區";key[13][23]="北門區";key[13][24]="新營區";key[13][25]="後壁區";key[13][26]="白河區";key[13][27]="東山區";key[13][28]="六甲區";key[13][29]="下營區";key[13][30]="柳營區";key[13][31]="鹽水區";key[13][32]="善化區";key[13][33]="大內區";key[13][34]="山上區";key[13][35]="新市區";key[13][36]="安定區";
key[14][0]="楠梓區";key[14][1]="左營區";key[14][2]="鼓山區";key[14][3]="三民區";key[14][4]="鹽埕區";key[14][5]="前金區";key[14][6]="新興區";key[14][7]="苓雅區";key[14][8]="前鎮區";key[14][9]="小港區";key[14][10]="旗津區";key[14][11]="鳳山區";key[14][12]="大寮區";key[14][13]="鳥松區";key[14][14]="林園區";key[14][15]="仁武區";key[14][16]="大樹區";key[14][17]="大社區";key[14][18]="岡山區";key[14][19]="路竹區";key[14][20]="橋頭區";key[14][21]="梓官區";key[14][22]="彌陀區";key[14][23]="永安區";key[14][24]="燕巢區";key[14][25]="田寮區";key[14][26]="阿蓮區";key[14][27]="茄萣區";key[14][28]="湖內區";key[14][29]="旗山區";key[14][30]="美濃區";key[14][31]="內門區";key[14][32]="杉林區";key[14][33]="甲仙區";key[14][34]="六龜區";key[14][35]="茂林區";key[14][36]="桃源區";key[14][37]="那瑪夏區";
key[15][0]="屏東市";key[15][1]="潮州鎮";key[15][2]="東港鎮";key[15][3]="恆春鎮";key[15][4]="萬丹鄉";key[15][5]="長治鄉";key[15][6]="麟洛鄉";key[15][7]="九如鄉";key[15][8]="里港鄉";key[15][9]="鹽埔鄉";key[15][10]="高樹鄉";key[15][11]="萬巒鄉";key[15][12]="內埔鄉";key[15][13]="竹田鄉";key[15][14]="新埤鄉";key[15][15]="枋寮鄉";key[15][16]="新園鄉";key[15][17]="崁頂鄉";key[15][18]="林邊鄉";key[15][19]="南州鄉";key[15][20]="佳冬鄉";key[15][21]="琉球鄉";key[15][22]="車城鄉";key[15][23]="滿州鄉";key[15][24]="枋山鄉";key[15][25]="霧台鄉";key[15][26]="瑪家鄉";key[15][27]="泰武鄉";key[15][28]="來義鄉";key[15][29]="春日鄉";key[15][30]="獅子鄉";key[15][31]="牡丹鄉";key[15][32]="三地門鄉";
key[16][0]="宜蘭市";key[16][1]="羅東鎮";key[16][2]="蘇澳鎮";key[16][3]="頭城鎮";key[16][4]="礁溪鄉";key[16][5]="壯圍鄉";key[16][6]="員山鄉";key[16][7]="冬山鄉";key[16][8]="五結鄉";key[16][9]="三星鄉";key[16][10]="大同鄉";key[16][11]="南澳鄉";
key[17][0]="花蓮市";key[17][1]="鳳林鎮";key[17][2]="玉里鎮";key[17][3]="新城鄉";key[17][4]="吉安鄉";key[17][5]="壽豐鄉";key[17][6]="秀林鄉";key[17][7]="光復鄉";key[17][8]="豐濱鄉";key[17][9]="瑞穗鄉";key[17][10]="萬榮鄉";key[17][11]="富里鄉";key[17][12]="卓溪鄉";
key[18][0]="臺東市";key[18][1]="成功鎮";key[18][2]="關山鎮";key[18][3]="長濱鄉";key[18][4]="海端鄉";key[18][5]="池上鄉";key[18][6]="東河鄉";key[18][7]="鹿野鄉";key[18][8]="延平鄉";key[18][9]="卑南鄉";key[18][10]="金峰鄉";key[18][11]="大武鄉";key[18][12]="達仁鄉";key[18][13]="綠島鄉";key[18][14]="蘭嶼鄉";key[18][15]="太麻里鄉";
key[19][0]="馬公市";key[19][1]="湖西鄉";key[19][2]="白沙鄉";key[19][3]="西嶼鄉";key[19][4]="望安鄉";key[19][5]="七美鄉";
key[20][0]="金城鎮";key[20][1]="金湖鎮";key[20][2]="金沙鎮";key[20][3]="金寧鄉";key[20][4]="烈嶼鄉";key[20][5]="烏坵鄉";
key[21][0]="南竿鄉";key[21][1]="北竿鄉";key[21][2]="莒光鄉";key[21][3]="東引鄉";
key[22][0]="中山區";key[22][1]="中正區";key[22][2]="信義區";key[22][3]="仁愛區";key[22][4]="暖暖區";key[22][5]="安樂區";key[22][6]="七堵區";

function Buildkey(num)
{
  document.myForm.district.selectedIndex=0;
  for($i=0;$i<key[num].length;$i++){
    document.myForm.district.options[$i]=new Option(key[num][$i],key[num][$i]);
  }
 document.myForm.district.length=key[num].length;
}
</Script>
    <p class="title_text">搜尋特定醫療機構或指定距離附近機構:</p>
    <div>
      <?php
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($fullurl, "distant=false"))
        {
          echo "<p class='content_text'>在search distance請正確填入數字或留白</p>";
        }
      ?>
    </div>
    <div class="information_container">
    <form action = "search_direct.php" method="POST">
        <input type="text" name="ins" ins = "ins" placeholder="enter your place" >
        <input type="text" name="dis" dis = "dis" placeholder="search distance range (m)" >
        <button type = "submit" name = "submit_search">SUMIT</button>
    </form>
    </div>
    <p class="title_text">所有資訊:</p>
    <div class="information_container">
        <?php
            // $query = "SELECT * FROM CSV LIMIT 100;";
            // $result = $db->query($query);
            // $resultcheck_all = $result->fetchColumn();
            $sql_all = "SELECT * FROM table1;";
            $result_all = mysqli_query($connect, $sql_all);
            $resultcheck_all = mysqli_num_rows($result_all);
            if($resultcheck_all>0)
            {
                //foreach($result as $row_all)
                foreach($result_all as $row_all)
                {
                    echo "<div class = 'information_box'>
                        <h3 class='content_text'>"."代碼: ".$row_all['機構代碼']."<br>"."</h3>
                        <h3 class='content_text'>"."名稱: ".$row_all['機構名稱']."<br>"."</h3>
                        <h3 class='content_text'>"."權屬別: ".$row_all['權屬別']."<br>"."</h3>
                        <h3 class='content_text'>"."型態別: ".$row_all['型態別']."<br>"."</h3>
                        <h3 class='content_text'>"."電話: ".$row_all['電話']."<br>"."</h3>
                        <h3 class='content_text'>"."地址: ".$row_all['地址']."<br>"."</h3>
                        <h3 class='content_text'>"."-----------------------------------------------------------------------------"."<br>"."</h3>
                    </div>";
                }
            }
        ?>

    </div>
</body>

</html>
