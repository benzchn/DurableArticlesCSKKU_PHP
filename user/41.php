<?php require_once 'include/header1.php'; ?>
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
                            text-decoration-line: underline; color: black;'><?php echo '11'; ?></h3>
                            <p>ประกาศเมื่อ :   โดย : ชานนท์  ชาภิรมย์</p>
                        <?php 
							require_once 'php_action/core.php';
									$sql = 'SELECT * FROM news_ad where news_id = 41';
								//use for MySQLi-OOP
								$query = $connect->query($sql);
								$row = $query->fetch_assoc();
							
							if('' == ''){
							
							} else { ?>
                        <div style='display: flex;justify-content: center;align-items: center;'>
                            <img src='' width='100px'>
                        </div>


                        <?php } ?>
                        <h4 style='color: black;'><?php echo 'dsadad'; ?></h4>


                    </div> <!-- /panel-body -->
                </div> <!-- /panel -->
            </div> <!-- /col-md-12 -->
        </div> <!-- /row -->
    </div>
<?php require_once 'include/footer1.php'; ?>
