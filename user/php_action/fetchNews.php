<?php
require_once 'core.php';

$sql = "SELECT news_id,news_image_64,news_title,news_detail,news_who_create,DATE_FORMAT(news_date, '%d %M %Y'),news_status FROM news_ad";
//use for MySQLi-OOP
$query = $connect->query($sql);
if($query->num_rows > 0) {
while($row = $query->fetch_array()){
    $newsTitle = $row[2];
    $newsDate = $row[5];
    $newsWho = $row[4];
    $newsId = $row[0];
    $newsDetail = $row[3];
    $newsStatus = $row[6];
    $imagefile = $row[1];


    if($newsStatus == 1){

                $filename = "".$newsId.".php";
                $ourFileName = $filename;
                $ourFileHandle = fopen($ourFileName, 'w');

		   echo     "
                                <article id='featured'>
                                <div>
                                    <?php if('".$imagefile."' == ''){ 

                                    } else { ?>
                                        <div style='display: flex; justify-content: center; align-items: center;'>
                                    <a href='".$newsId.".php'><img src='".$imagefile."' width='100px' alt='' /></a>
                                    </div>
                                    <?php } ?>
                                    <h3 style='color:black;'>".$newsTitle."&nbsp;<img src='http://oxygen.readyplanet.com/images/column_1303576852/icon0002.gif' width='25px'/></h3>
                                    <p>ประกาศเมื่อ : ".$newsDate." </p>
                                    <p>โดย : ".$newsWho."</p>
                                    <a  href='".$newsId.".php'  class='readmore'>อ่านเพิ่มเติม-></a>
                                    </div>
                                </article>
 
                    ";
        
                    
					$written =  
								"<?php require_once 'include/header1.php'; ?>
                                <div class='container' style='padding-top:20px;'>
                                <div class='row' style='padding-top:20px;'>
                                            <div class='col-md-12'>
                                
                                                <div style='box-shadow: 0 1px 2px rgba(0,0,0,.05);border-color: #ddd;margin-bottom: 20px;
                                    background-color: #fff;
                                    border: 1px solid transparent;
                                    border-radius: 4px;'>
                                                    <div style='background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%);background-repeat: repeat-x;    color: #333;
                                    background-color: #f5f5f5;
                                    border-color: #ddd;padding: 10px 15px;
                                    border-bottom: 1px solid transparent;
                                    border-top-left-radius: 3px;
                                    border-top-right-radius: 3px;'>
                                                        <div style='box-sizing: border-box;'> 
                                                        <i class='glyphicon glyphicon-edit'></i> ข่าวประชาสัมพันธ์</div>
                                                    </div>
                                
                                                    <div style='padding: 15px;'>


                        <h3 style='-webkit-text-decoration-line: underline; /* Safari */
                            text-decoration-line: underline; color: black;'><?php echo '".$newsTitle."'; ?></h3>
                            <p>ประกาศเมื่อ : ".$newsDate."  โดย : ".$newsWho."</p>
                        <?php 
							require_once 'php_action/core.php';
									".'$sql'." = 'SELECT * FROM news_ad where news_id = ".$newsId."';
								//use for MySQLi-OOP
								".'$query = $connect->query($sql);'."
								".'$row = $query->fetch_assoc();'."
							
							if('".$imagefile."' == ''){
							
							} else { ?>
                        <div style='display: flex;justify-content: center;align-items: center;'>
                            <img src='".$imagefile."' width='100px'>
                        </div>


                        <?php } ?>
                        <h4 style='color: black;'><?php echo '".$newsDetail."'; ?></h4>


                    </div> <!-- /panel-body -->
                </div> <!-- /panel -->
            </div> <!-- /col-md-12 -->
        </div> <!-- /row -->
    </div>
<?php require_once 'include/footer1.php'; ?>
";

fwrite($ourFileHandle,$written);

fclose($ourFileHandle);

}
}
}

?>