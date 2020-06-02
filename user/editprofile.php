<?php require_once 'include/header1.php'; ?>
<div class="container" style="padding-top:20px;">
<div class="row" style="padding-top:20px;">
            <div class="col-md-12">

                <div style="box-shadow: 0 1px 2px rgba(0,0,0,.05);border-color: #ddd;margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;">
                    <!-- <div style="background-image: linear-gradient(to bottom,#f5f5f5 0,#e8e8e8 100%);background-repeat: repeat-x;    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;">
                        <div style="box-sizing: border-box;"> 
                        <i class="glyphicon glyphicon-edit"></i> รายละเอียดการซ่อม</div>
                    </div> -->

                    <div style="padding: 15px;">


                        <div id='cssmenu'>
                            <ul>
                                <li><a href='myprofile.php'>ข้อมูลส่วนตัว</a></li>
                                <li class='active'><a href='editProfile.php'>แก้ไขข้อมูลส่วนตัว</a></li>
                                <li><a href='Changepassword.php'>เปลี่ยนรหัสผ่าน</a></li>
                            </ul>
                        </div>

                        <div class="containner">

                            <?php

$sql = "SELECT * FROM users_personal WHERE user_id = '$session_username'";

$result = $connect->query($sql);
$row = $result->fetch_assoc();
$degree = "";
$department = "";
if($row['degree'] == 1){
    $degree = "ปริญญาตรี";
}elseif($row['degree'] == 2){
    $degree = "ปริญญาโท";
}else{
    $degree = "ปริญญาเอก";
}

if($row['department'] == 1){
    $department = "วิทยาการคอมพิวเตอร์";
}elseif($row['department'] == 2){
    $department = "เทคโนโลยีสารสนเทศ";
}else{
    $department = "ภูมิศาสตร์สารสนเทศ";
}

                            if($session_role == 2){?>

                            <!-- <div class="container portfolio"> -->

                            <div class="bio-info">
                                <div class="row">

                                    <form method="POST" action="php_action/update_profile.php">

                                        <div class="form-group">
                                            <label for="email">อีเมล *</label>&nbsp;<span class="badge badge-info"
                                                style="font-weight:normal;">(ใช้ @kku.ac.th เท่านั้น)</span>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="user@kku.ac.th" autocomplete="off" required
                                                value="<?= $row['email']?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">ชื่อ - นามสกุล *</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                placeholder="Full Name" autocomplete="off" required
                                                value="<?= $row['fullname']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">เบอร์โทรศัพท์ *</label>&nbsp;<span
                                                class="badge badge-info"
                                                style="font-weight:normal;">(ไม่ต้องใส่ขีด)</span>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone" autocomplete="off" required
                                                value="<?= $row['phone']?>" OnKeyPress="return chkNumber(this)">
                                        </div>
                                        <br>
                                        <button type="submit" id="btnTeachSubmit" name="btnTeachSubmit"
                                            class="btn btn-primary">อัพเดท</button>
                                    </form>
                                </div>
                            </div>
                            <?php }else{?>
                            <div class="bio-info">
                                <div class="row">
                                    <form method="POST" action="php_action/update_profile.php">
                                        <div class="form-group">
                                            <label for="user_id">รหัสนักศึกษา *</label>&nbsp;<span
                                                class="badge badge-info" style="font-weight:normal;">(ตัวอย่าง:
                                                60302xxxx-x *ใส่ขีดด้วย*)</span>
                                            <input type="text" class="form-control" id="user_id" name="user_id"
                                                placeholder="60302xxxx-x" autocomplete="off" required
                                                OnInput="add_hyphen()" maxlength="11"
                                                OnKeyPress="return chkNumber(this)" disabled
                                                value="<?= $row['user_id']?>" pattern="[0-9]{8,8}.[-].[0-9]{0,0}">
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">ชื่อ - นามสกุล *</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                placeholder="Full Name" autocomplete="off" required
                                                value="<?= $row['fullname']?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">อีเมล *</label>&nbsp;<span class="badge badge-info"
                                                style="font-weight:normal;">(ใช้ @kkumail.com เท่านั้น)</span>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="user@kkumail.com" autocomplete="off" required
                                                value="<?= $row['email']?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
        else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">เบอร์โทรศัพท์ *</label>&nbsp;<span
                                                class="badge badge-info"
                                                style="font-weight:normal;">(ไม่ต้องใส่ขีด)</span>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone" autocomplete="off" required
                                                value="<?= $row['phone']?>" OnKeyPress="return chkNumber(this)">
                                            <!-- <small id="emailHelp" class="form-text text-muted">Password incorrect.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="col_year">ชั้นปีที่ *</label>&nbsp;<span
                                                class="badge badge-info" style="font-weight:normal;">(1,2,3,4)</span>
                                            <input type="text" class="form-control" id="col_year" name="col_year"
                                                placeholder="ชั้นปี" autocomplete="off" required
                                                value="<?= $row['col_year']?>" maxlength="1" OnKeyPress="return chkNumber1(this)">
                                            <!-- <small id="emailHelp" class="form-text text-muted">Password incorrect.</small> -->
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-2" style="padding-top:50px;">
                                                <button type="submit" id="btnStdSubmit" name="btnStdSubmit"
                                                    class="btn btn-primary">อัพเดท</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                            }
?>




                        </div><!-- containner -->
                    </div> <!-- /panel-body -->
                </div> <!-- /panel -->
            </div> <!-- /col-md-12 -->
        </div> <!-- /row -->
    </div>

<script>

    function chkNumber1(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'1' || vchar>'4') && (vchar != '.')) return false;
	ele.onKeyPress=vchar;
	}

    </script>
<?php require_once 'include/footer1.php'; ?>