<?php require_once 'include/header1.php'; ?>
<div class="container" style="padding-top:20px;">
<div class="row" style="padding-top:20px;">
            <div class="col-md-12">

                <div style="box-shadow: 0 1px 2px rgba(0,0,0,.05);border-color: #ddd;margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;">
                    <div style="background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%);background-repeat: repeat-x;    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;">
                        <div style="box-sizing: border-box;"> 
                        <i class="glyphicon glyphicon-edit"></i> รายการครุภัณฑ์</div>
                    </div>
                    <div style="padding: 15px;">



                        <table id='myTable' class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th id='th_css'>รหัสครุภัณฑ์</th>
                                    <th id='th_css' style='width:10%;'>รูปภาพ</th>
                                    <th id='th_css'>ลักษณะ/ยี่ห้อ</th>
                                    <th id='th_css'>ตำแหน่งที่ตั้ง</th>
                                    <th id='th_css'>สถานะ</th>
                                    <th id='th_css'>หมายเหตุ</th>
                                    <th id='th_css' style='width:15%;'>ตัวเลือก</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include_once('php_action/db_connect.php');
                                $sql = "SELECT * FROM product";
                                //use for MySQLi-OOP
                                $query = $conn->query($sql);
                                $active = "";
                                while ($row = $query->fetch_assoc()) {

                                    // active
                                    if ($row['active'] == 1) {
                                        $active = "<label class='label label-success'>ว่าง</label>";
                                    } elseif ($row['active'] == 2) {
                                        $active = "<label class='label label-danger'>ไม่ว่าง</label>";
                                    } elseif ($row['active'] == 3) {
                                        $active = "<label class='label label-warning'>ซ่อม/รอซ่อม</label>";
                                    } elseif ($row['active'] == 4) {
                                        $active = "<label class='label label-default'>ชำรุด</label>";
                                    } elseif ($row['active'] == 5) {
                                        $active = "<label class='label label-default'>บริจาค</label>";
                                    } elseif ($row['active'] == 6) {
                                        $active = "<label class='label label-default'>รอบริจาค</label>";
                                    } elseif ($row['active'] == 7) {
                                        $active = "<label class='label label-default'>ขายทอดตลาด</label>";
                                    } elseif ($row['active'] == 8) {
                                        $active = "<label class='label label-default'>โอนย้าย</label>";
                                    } // /else

                                    if ($_SESSION['role'] == 3 && $row['status'] == 1 && $row['role_product_id'] == 2) {
                                        if ($row['active'] == 1 || $row['active'] == 2) {
                                            echo
                                                "
                            
                                <tr>
                                <td id='td_css'>" . $row['product_code'] . "</td>
                                <td id='td_css'><img class='img-round' src='" . $row['product_image_64'] . "' style='height:40px; width:40px;'  /></td>
									
									<td id='td_css'>" . $row['product_style'] . "</td>
									<td id='td_css'>" . $row['product_location'] . "</td>
                                    <td id='td_css'>" . $active . "</td>
                                    <td id='td_css'>" . $row['product_etc'] . "</td>
                                    <td id='td_css'>
                                    <div class='btn-group' role='group'>
                                    <button type='button' class='btn btn-success' data-toggle='modal' id='' data-target='#rentModal_" . $row['product_id'] . "'>ยืม</button>
                                    <button type='button' class='btn btn-dark' data-toggle='modal' id='' data-target='#Modal'>ข้อมูลเพิ่มเติม</button>
	                                </div>
                                    </td>
								</tr>";
                                        }
                                        // else{
                                        //     echo 
                                        //     "

                                        //     <tr>
                                        //     <td id='td_css'>".$row['product_code']."</td>
                                        //     <td id='td_css'><img class='img-round' src='".$row['product_image_64']."' style='height:40px; width:40px;'  /></td>

                                        //         <td id='td_css'>".$row['product_style']."</td>
                                        //         <td id='td_css'>".$row['product_location']."</td>
                                        //         <td id='td_css'>".$active."</td>
                                        //         <td id='td_css'>".$row['product_etc']."</td>
                                        //         <td id='td_css'>
                                        //         <div class='btn-group' role='group'>
                                        //         <button type='button' class='btn btn-success disabled' data-toggle='modal' id='' data-target='#Modal'>ยืม</button>
                                        //         <button type='button' class='btn btn-dark' data-toggle='modal' id='' data-target='#Modal'>ข้อมูลเพิ่มเติม</button>
                                        //         </div>
                                        //         </td>
                                        //     </tr>";	
                                        // }
                                    }

                                    if ($_SESSION['role'] == 2 && $row['status'] == 1) {

                                        if ($row['active'] == 1) {
                                            echo
                                                "
                                <tr>
                                <td id='td_css'>" . $row['product_code'] . "</td>
                                <td id='td_css'><img class='img-round' src='" . $row['product_image_64'] . "' style='height:40px; width:40px;'  /></td>
									
									<td id='td_css'>" . $row['product_style'] . "</td>
									<td id='td_css'>" . $row['product_location'] . "</td>
                                    <td id='td_css'>" . $active . "</td>
                                    <td id='td_css'>" . $row['product_etc'] . "</td>
                                    <td id='td_css'>
                                    <div class='btn-group' role='group'>
                                    <button type='button' class='btn btn-success' data-toggle='modal' id='' data-target='#rentModal_" . $row['product_id'] . "'>ยืม</button>
                                    <button type='button' class='btn btn-dark' data-toggle='modal' id='' data-target='#Modal'>ข้อมูลเพิ่มเติม</button>
	                                </div>
                                    </td>
								</tr>";
                                        } else {
                                            echo
                                                "
                                    <tr>
                                    <td id='td_css'>" . $row['product_code'] . "</td>
                                    <td id='td_css'><img class='img-round' src='" . $row['product_image_64'] . "' style='height:40px; width:40px;'  /></td>
                                        
                                        <td id='td_css'>" . $row['product_style'] . "</td>
                                        <td id='td_css'>" . $row['product_location'] . "</td>
                                        <td id='td_css'>" . $active . "</td>
                                        <td id='td_css'>" . $row['product_etc'] . "</td>
                                        <td id='td_css'>
                                        <div class='btn-group' role='group'>
                                        <button type='button' class='btn btn-success disabled' data-toggle='modal' id='' data-target='#Modal'>ยืม</button>
                                        <button type='button' class='btn btn-dark' data-toggle='modal' id='' data-target='#Modal'>ข้อมูลเพิ่มเติม</button>
                                        </div>
                                        </td>
                                    </tr>";
                                        }
                                    }

                                ?>

                                    <div class='modal fade' id='rentModal_<?= $row['product_id'] ?>' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                                        <div class='modal-dialog modal-dialog-centered' role='document'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title' id='exampleModalCenterTitle' style="color:black;">ยืนยันการยืมครุภัณฑ์</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                        <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <div>
                                                        <label style="color:black;font-size:15px;">คุณแน่ใจว่าจะยืมครุภัณฑ์ (</label>&nbsp;<label class='label label-warning' style="font-size:15px;"><?= $row['product_code'] ?>&nbsp;/&nbsp;<?= $row['product_style'] ?></label>&nbsp;<label style="color:black;font-size:15px;">) ?</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="php_action/insert_rent.php" method="post">
                                                            <label for="rent_detail" style="color:black;font-size:15px;">วัตถุประสงค์ในการยืม</label>
                                                            <input type="text" class="form-control" id="rent_detail" name="rent_detail" required>
                                                            <input type="hidden" id="user_id" name="user_id" value="<?= $_SESSION['user_name'] ?>" />
                                                            <input type="hidden" id="product_code" name="product_code" value="<?= $row['product_code'] ?>" />
                                                    </div>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>ยกเลิก</button>
                                                    <button type='submit' class='btn btn-primary'>ยืนยัน</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                <?php
                                }

                                ?>
                            </tbody>
                        </table>

                        </div> 
                </div> 
            </div> 
        </div>
        </div>

<?php require_once 'include/footer1.php'; ?>