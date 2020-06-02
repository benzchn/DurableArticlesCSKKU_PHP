<?php
if (!session_id()) session_start();
include '../controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:../login.php");
}
if(isset($_SESSION['user_name'])){
	if($_SESSION['role'] == 1){
                    header("location:../admin/dashboard.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0.1"> -->
    <title>ระบบครุภัณฑ์ ภาควิชาวิทยาการคอมพิวเตอร์ มหาวิทยาลัยขอนแก่น</title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Data Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    
    <!-- icon -->
    <script src="https://kit.fontawesome.com/ba8cda9d5b.js" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>


    <style>
      body {
        font-family: 'K2D' !important;
    }
      

      * {
        margin: 0;
        padding: 0;
      }

      i {
        margin-right: 10px;
      }

      /*----------multi-level-accordian-menu------------*/
      .navbar-logo {
        padding: 15px;
        color: #fff;
      }

      .navbar-mainbg {
        background-color: #5161ce;
        padding: 0px;
      }

      #navbarSupportedContent {
        overflow: hidden;
        position: relative;
      }

      #navbarSupportedContent ul {
        padding: 0px;
        margin: 0px;
      }

      #navbarSupportedContent ul li a i {
        margin-right: 10px;
      }

      #navbarSupportedContent li {
        list-style-type: none;
        float: left;
      }

      #navbarSupportedContent ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        display: block;
        padding: 20px 20px;
        transition-duration: 0.6s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
      }

      /* ul li a{
        color: #fff;
        text-decoration: none;
        font-size: 15px;
        display: block;
        padding: 20px 20px;
        transition-duration: 0.6s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
      } */

      #navbarSupportedContent > ul > li > a.active  {
        color: #5161ce;
        background-color: #fff;
        transition: all 0.7s;
        border-top-left-radius: 25px;
        border-top-right-radius: 25px;
        
        transition-duration: 0.4s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
      }

      #navbarSupportedContent a:not(:only-child):after {
        content: "\f105";
        position: absolute;
        right: 20px;
        top: 10px;
        font-size: 14px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
      }

      #navbarSupportedContent .active > a:not(:only-child):after {
        transform: rotate(90deg);
      }

      .hori-selector {
        display: inline-block;
        position: absolute;
        height: 100%;
        top: 0px;
        left: 0px;
        transition-duration: 0.4s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        background-color: #fff;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        margin-top: 10px;
      }

      .hori-selector .right,
      .hori-selector .left {
        position: absolute;
        width: 25px;
        height: 25px;
        background-color: #fff;
        bottom: 10px;
      }

      .hori-selector .right {
        right: -25px;
      }

      .hori-selector .left {
        left: -25px;
      }

      .hori-selector .right:before,
      .hori-selector .left:before {
        content: "";
        position: absolute;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #5161ce;
      }

      .hori-selector .right:before {
        bottom: 0;
        right: -25px;
      }

      .hori-selector .left:before {
        bottom: 0;
        left: -25px;
      }

      @media (max-width: 991px) {
        #navbarSupportedContent ul li a {
          padding: 12px 30px;
        }

        .hori-selector {
          margin-top: 0px;
          margin-left: 10px;
          border-radius: 0;
          border-top-left-radius: 25px;
          border-bottom-left-radius: 25px;
        }

        .hori-selector .left,
        .hori-selector .right {
          right: 10px;
        }

        .hori-selector .left {
          top: -25px;
          left: auto;
        }

        .hori-selector .right {
          bottom: -25px;
        }

        .hori-selector .left:before {
          left: -25px;
          top: -25px;
        }

        .hori-selector .right:before {
          bottom: -25px;
          left: -25px;
        }
      }


    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
      }
    </style>

    <style>
      @font-face {
        font-family: "K2D";
        src: url("https://fonts.googleapis.com/css?family=K2D&display=swap");
        font-weight: normal;
        font-style: normal;
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
        float: right;
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
        cursor: pointer;
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
        background-color: #f4f4f4;
        -webkit-box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 10px 10px 23px 0px rgba(0, 0, 0, 0.1);
        cursor: context-menu;
      }

      .fas:hover {
        color: #d63031;
      }

      .notBtn:hover > .box {
        height: 60vh;
      }

      .content {
        padding: 20px;
        color: black;
        vertical-align: middle;
        text-align: left;
      }

      .gry {
        background-color: #f4f4f4;
      }

      .top {
        color: black;
        padding: 10px;
      }

      .display {
        position: relative;
      }

      .cont {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #f4f4f4;
      }

      .cont:empty {
        display: none;
      }

      .stick {
        text-align: center;
        display: block;
        font-size: 50pt;
        padding-top: 70px;
        padding-left: 80px;
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
        background-color: #f4f4f4;
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
        background-color: #bfbfbf;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-mainbg">
      <div class="container">
        <img src="../images/cs_logo.png" style="
          -webkit-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, .5), 0px -15px 35px 0px rgba(50, 50, 50, .3) inset;
	        -moz-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, .5), 0px -15px 35px 0px rgba(50, 50, 50, .3) inset;
	        box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, .5), 0px -15px 35px 0px rgba(50, 50, 50, .3) inset;
	        color: rgba(100, 100, 100, .8);
	        text-shadow: 1px 1px 0 rgba(255, 255, 255, .6);
	        background: rgba(255, 255, 255, 255);
          width:15%;
          ">

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          <ul class="navbar-nav ml-auto">
            <!-- <div class="hori-selector">
              <div class="left"></div>
              <div class="right"></div>
            </div> -->

            <li class="nav-item">
              <a href="index.php" class="nav-link"
                ><i class="far fa-address-book" ></i>หน้าแรก</a
              >
            </li>
            <li class="nav-item" >
              <a href="tables_list.php" class="nav-link"
                ><i class="far fa-address-book" ></i>ครุภัณฑ์</a
              >
            </li>
            <li class="nav-item" >
              <a href="rent_my.php" class="nav-link" 
                ><i class="far fa-clone"></i>ติดตามการยืม - คืน ครุภัณฑ์</a
              >
            </li>
            <li class="nav-item">
              <a href="repair_report.php" class="nav-link"
                ><i class="far fa-calendar-alt"></i>แจ้งซ่อม</a
              >
            </li>
            <li class="nav-item">
              <a href="repair_follow.php" class="nav-link" 
                ><i class="far fa-chart-bar"></i>ติดตามการแจ้งซ๋อม</a
              >
            </li>
          </ul>
          <!-- Example single danger button -->
        </div>

        <?php
							include_once('php_action/db_connect.php');
							$sql = "SELECT users_personal.role_id,role_table.role_title FROM users_personal
                            INNER JOIN role_table ON users_personal.role_id = role_table.role_id
                             WHERE user_id = '$session_username'";
							
              $query = $conn->query($sql); 
              if($query->num_rows > 0) 
              { 
                $row = $query->fetch_array(); 
                } ?>
      </div>
      <div class="btn-group" style="padding-right:20px;">
        <button
          type="button"
          class="btn btn-success dropdown-toggle"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          <?php echo $session_username; ?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../logout.php">ออกจากระบบ</a>
        </div>
      </div>
    </nav>



   
