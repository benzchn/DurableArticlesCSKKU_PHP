<?php require_once 'php_action/core.php';
include '../controller.php';
if (isset($_SESSION['user_name'])) {
    if ($_SESSION['role'] == 3 || $_SESSION['role'] == 2) {
        header("location:../user/index.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
<title>ระบบครุภัณฑ์ ภาควิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยขอนแก่น (Admin Only)</title>
    <link rel="icon" href="http://sciweb.kku.ac.th/online_register/images/logo11.png" sizes="32x32">
    <link href="https://fonts.googleapis.com/css?family=K2D&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/ba8cda9d5b.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assests/bootstrap/css/bootstrap.min.css">
    <!-- bootstrap theme-->
    <link rel="stylesheet" href="../assests/bootstrap/css/bootstrap-theme.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="../assests/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../assests/font-awesome-4.7.0/css/font-awesome.min.css"> -->

    <!-- custom css -->
    <link rel="stylesheet" href="custom/css/custom.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../assests/plugins/datatables/jquery.dataTables.min.css">

    <!-- file input -->
    <link rel="stylesheet" href="../assests/plugins/fileinput/css/fileinput.min.css">

    <!-- jquery -->
    <script src="../assests/jquery/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <!-- jquery ui -->
    <link rel="stylesheet" href="../assests/jquery-ui/jquery-ui.min.css">
    <script src="../assests/jquery-ui/jquery-ui.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

    <!-- bootstrap js -->
    <script src="../assests/bootstrap/js/bootstrap.min.js"></script>

    <!-- Datepicker -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />



    <style>
        @font-face {
            font-family: 'K2D';
            src: url('https://fonts.googleapis.com/css?family=K2D&display=swap');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'K2D' !important;
        }

        #featured {
            position: relative;
        }

        #featuredico {
            position: absolute;
            top: 0;
            left: 0;
        }

        article {
            width: 280px;
            margin-right: 40px;
            display: inline-block;
            vertical-align: top;
            border: 1px solid #c8c8c8;
            margin-bottom: 20px;
            padding: 7px;
            border-radius: 3px;
            box-shadow: 0 2px 3px #ccc;
            background-color: white;
            *display: inline;
            zoom: 1;
        }

        article p {
            margin-bottom: 7px;
        }

        .readmore {
            background-color: black;
            padding: 5px 10px;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            display: inline-block;
        }

        .readmore:hover {
            background-color: #383838;
        }

        .old_ie header h1,
        .old_ie nav,
        .old_ie nav li,
        .old_ie #adbanner a,
        .old_ie article,
        .old_ie .readmore,
        .old_ie #sponsors a {
            display: inline;
            zoom: 1;
        }


        .icons {
            display: inline;
            float: right
        }

        .notification {
            padding-top: 10px;
            position: relative;
            display: inline-block;
        }

        .number {
            height: 22px;
            width: 22px;
            background-color: #d63031;
            border-radius: 20px;
            color: white;
            text-align: center;
            position: absolute;
            top: 23px;
            left: 60px;
            /* padding: 3px; */
            border-style: solid;
            border-width: 2px;
        }

        .number:empty {
            display: none;
        }

        .notBtn {
            transition: 0.5s;
            cursor: pointer
        }

        .fas {
            font-size: 25pt;
            padding-bottom: 10px;
            color: black;
            margin-right: 40px;
            margin-left: 40px;
        }

        .box {
            width: 400px;
            height: 0px;
            border-radius: 10px;
            transition: 0.5s;
            position: absolute;
            overflow-y: scroll;
            padding: 0px;
            left: -300px;
            margin-top: 5px;
            background-color: #F4F4F4;
            -webkit-box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.1);
            cursor: context-menu;
        }

        .fas:hover {
            color: #d63031;
        }

        .notBtn:hover>.box {
            height: 60vh
        }

        .content {
            padding: 20px;
            color: black;
            vertical-align: middle;
            text-align: left;
        }

        .gry {
            background-color: #F4F4F4;
        }

        .top {
            color: black;
            padding: 10px
        }

        .display {
            position: relative;
        }

        .cont {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F4F4F4;
        }

        .cont:empty {
            display: none;
        }

        .stick {
            text-align: center;
            display: block;
            font-size: 50pt;
            padding-top: 70px;
            padding-left: 80px
        }

        .stick:hover {
            color: black;
        }

        .cent {
            text-align: center;
            display: block;
        }

        .sec {
            padding: 25px 10px;
            background-color: #F4F4F4;
            transition: 0.5s;
        }

        .profCont {
            padding-left: 15px;
        }

        .profile {
            -webkit-clip-path: circle(50% at 50% 50%);
            clip-path: circle(50% at 50% 50%);
            width: 60px;
            float: left;
        }

        .txt {
            vertical-align: top;
            font-size: 1.25rem;
            padding: 5px 10px 0px 115px;
        }

        .sub {
            font-size: 1rem;
            color: grey;
        }

        .new {
            border-style: none none solid none;
            border-color: red;
        }

        .sec:hover {
            background-color: #BFBFBF;
        }



        .education {
            --bg-color: #ffd861;
            --bg-color-light: #ffeeba;
            --text-color-hover: #4C5656;
            --box-shadow-color: rgba(255, 215, 97, 0.48);
        }

        .credentialing {
            --bg-color: #B8F9D3;
            --bg-color-light: #e2fced;
            --text-color-hover: #4C5656;
            --box-shadow-color: rgba(184, 249, 211, 0.48);
        }

        .wallet {
            --bg-color: #CEB2FC;
            --bg-color-light: #F0E7FF;
            --text-color-hover: #fff;
            --box-shadow-color: rgba(206, 178, 252, 0.48);
        }

        .human-resources {
            --bg-color: #DCE9FF;
            --bg-color-light: #f1f7ff;
            --text-color-hover: #4C5656;
            --box-shadow-color: rgba(220, 233, 255, 0.48);
        }

        .card {
            width: 220px;
            height: 321px;
            background: #fff;
            border-top-right-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            box-shadow: 0 14px 26px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease-out;
            text-decoration: none;
        }

        .card:hover {
            transform: translateY(-5px) scale(1.005) translateZ(0);
            box-shadow: 0 24px 36px rgba(0, 0, 0, 0.11),
                0 24px 46px var(--box-shadow-color);
        }

        .card:hover .overlay {
            transform: scale(4) translateZ(0);
        }

        .card:hover .circle {
            border-color: var(--bg-color-light);
            background: var(--bg-color);
        }

        .card:hover .circle:after {
            background: var(--bg-color-light);
        }

        .card:hover p {
            color: var(--text-color-hover);
        }

        .card:active {
            transform: scale(1) translateZ(0);
            box-shadow: 0 15px 24px rgba(0, 0, 0, 0.11),
                0 15px 24px var(--box-shadow-color);
        }

        .card p {
            font-size: 17px;
            color: #4C5656;
            margin-top: 30px;
            z-index: 1000;
            transition: color 0.3s ease-out;
        }

        .circle {
            width: 131px;
            height: 131px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid var(--bg-color);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease-out;
        }

        .circle:after {
            content: "";
            width: 118px;
            height: 118px;
            display: block;
            position: absolute;
            background: var(--bg-color);
            border-radius: 50%;
            top: 7px;
            left: 7px;
            transition: opacity 0.3s ease-out;
        }

        .circle svg {
            z-index: 10000;
            transform: translateZ(0);
        }

        .overlay {
            width: 118px;
            position: absolute;
            height: 118px;
            border-radius: 50%;
            background: var(--bg-color);
            top: 70px;
            left: 50px;
            z-index: 0;
            transition: transform 0.3s ease-out;
        }
    </style>


</head>

<body>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">เมนู</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a href="dashboard.php"><img src="../images/cs_logo.png" width="200px" alt="Image"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li id="navDashboard"><a href="index.php">
                            
                            หน้าแรก</a></li>
                    <li id="navDashboard"><a href="categories.php">
                           
                            คลัง</a></li>
                    <li class="dropdown" id="navRepair">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           
                            งานซ่อม <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="navRepairList"><a href="repair_list.php">
                                    รายการแจ้งซ่อม </a></li>
                        </ul>
                    </li>
                    <li id="navRent"><a href="rent_detail.php">
                            
                            การยืม </a></li>
                    <li id="navNews"><a href="news_ad.php">
                            
                            ประกาศข่าวสาร </a></li>

                    <li id="navManageUser"><a href="manageUser.php">
                            
                            จัดการบัญชีผู้ใช้ </a></li>

                    <li class="dropdown" id="navSetting">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src='https://image.flaticon.com/icons/svg/2622/2622309.svg' width="21px" height="21px">
                            &nbsp;(<?php echo $_SESSION['user_name']; ?>)&nbsp;
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="topNavSetting"><a href="setting.php"><img src='https://image.flaticon.com/icons/svg/1293/1293874.svg' width="21px" height="21px"> ตั้งค่า</a></li>
                            <li id="topNavLogout"><a href="logout.php"><img src='https://image.flaticon.com/icons/svg/1716/1716282.svg' width="21px" height="21px"> ออกจากระบบ</a></li>
                        </ul>
                    </li>
                    <li>
                        <?php
                        $sql = "SELECT * FROM users_personal WHERE user_status = 0";
                        $sql1 = "SELECT COUNT(user_status) AS num FROM users_personal WHERE user_status = 0";
                        $result = $connect->query($sql);
                        $count = $connect->query($sql1);
                        $countValue = $count->fetch_assoc();
                        if ($countValue == 0) {
                        }
                        ?>
                        <div class="icons">
                            <div class="notification">
                                <div class="notBtn" href="#">
                                    <div class="number"><?= $countValue['num'] ?></div>
                                    <i class="fas fa-bell"></i>
                                    <div class="box">
                                        <div class="display">

                                            <div class="cont">
                                                <form action="php_action/updateUserRole.php" method="post">

                                                    <?php
                                                    while ($row = $result->fetch_assoc()) {
                                                        $degree = "";
                                                        $department = "";
                                                        if ($row['degree'] == 1) {
                                                            $degree = "ปริญญาตรี";
                                                        } elseif ($row['degree'] == 2) {
                                                            $degree = "ปริญญาโท";
                                                        } else {
                                                            $degree = "ปริญญาเอก";
                                                        }

                                                        if ($row['department'] == 1) {
                                                            $department = "วิทยาการคอมพิวเตอร์";
                                                        } elseif ($row['department'] == 2) {
                                                            $department = "เทคโนโลยีสารสนเทศ";
                                                        } else {
                                                            $department = "ภูมิศาสตร์สารสนเทศ";
                                                        }
                                                        if ($row['role_id'] == 2) {
                                                            echo "
                                                                <div class='sec new'>

                                                                    <div class='profCont'>
                                                                        <img class='profile' src='https://i.ya-webdesign.com/images/transparent-teacher-flat-design-5.png'>
                                                                    </div>
                                                                    <div class='txt'>" . $row['fullname'] . "
                                                                        ร้องขอคำอนุมัติการเป็นสมาชิก !
                                                                    </div>
                                                                    <div class='txt'> ชื่อผู้ใช้งาน : " . $row['user_id'] . "</div>
                                                                    <input type='hidden' value='" . $row['user_id'] . "' id='user_id' name='user_id'>
                                                                    <div style='margin-left:180px;'>
                                                                        <button type='submit' id='updateRoleBtn' name='updateRoleBtn' class='btn btn-success'>อนุมัติ</button>
                                                                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#DetailPersonnal_" . $row['id'] . "'>รายละเอียด</button>
                                                                        
                                                                    </div>
                                                                </div>";
                                                        } else {
                                                            echo "
                                                                <div class='sec new'>

                                                                    <div class='profCont'>
                                                                        <img class='profile' src='https://itservice.forest.go.th/download/img/jitasa.png'>
                                                                    </div>
                                                                    <div class='txt'>" . $row['fullname'] . " 
                                                                        ร้องขอคำอนุมัติการเป็นสมาชิก !
                                                                    </div>
                                                                    <div class='txt'> ชื่อผู้ใช้งาน : " . $row['user_id'] . "
                                                                    </div>
                                                                    <input type='hidden' value='" . $row['user_id'] . "' id='user_id' name='user_id'>
                                                                    <div style='margin-left:180px;'>
                                                                        <button type='submit' id='updateRoleBtn' name='updateRoleBtn' class='btn btn-success'>อนุมัติ</button>
                                                                        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#DetailStudent_" . $row['id'] . "'>รายละเอียด</button>
                                                                    </div>
                                                                </div>";
                                                         }
                                                    ?>

                                                        <div class="modal fade" id="DetailPersonnal_<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดผู้ใช้งาน</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div>
                                                                            <div class="bio-content">
                                                                                <div class="form-row">
                                                                                    <h2><?= $row['fullname']; ?></h2>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <label>---------------------------------</label>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>อีเมล : <span style="color:blue;"><?= $row['email']; ?></span></h4>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>เบอร์โทรศัพท์ : <span style="color:blue;"><?= $row['phone']; ?></span></h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal fade" id="DetailStudent_<?= $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="false" style="background-color: rgba(0, 0, 0, 0.5);">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียดผู้ใช้งาน</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <div>
                                                                            <div class="bio-content">
                                                                                <div class="form-row">
                                                                                    <h2><?= $row['fullname']; ?></h2>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <label>---------------------------------</label>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>รหัสนักศึกษา : <span style="color:blue;"><?= $row['user_id']; ?></span></h4>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>อีเมล : <span style="color:blue;"><?= $row['email']; ?></span></h4>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>เบอร์โทรศัพท์ : <span style="color:blue;"><?= $row['phone']; ?></span> </h4>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>นักศึกษาชั้นปีที่ : <span style="color:blue;"><?= $row['col_year']; ?></span></h4>
                                                                                </div><br>
                                                                                <div class="form-row">
                                                                                    <h4>ระดับ<?= $degree ?> หลักสูตรวิชา<?= $department ?></h4>
                                                                                </div>
                                                                                <div class="form-row">
                                                                                    <h4>มหาวิทยาลัยขอนแก่น</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php
                                                    }
                                                    ?>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </a> -->
                            </div>
                        </div>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <div class="container">